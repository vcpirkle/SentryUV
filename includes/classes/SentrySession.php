<?php

class SentrySession extends Saveable {
	
   protected static $fields;
   const COOKIE = 'sessionid';
   const EXPIRE = 2592000; //Sessions will expire in 30 days
   protected static $session;
   protected static $user;
   private $isEndingSession;

   public function __construct($id = null) {
      parent::__construct($id);

      $this->isEndingSession = false;
   }

   public static function getSession($lastTime = false) {
      if(!is_null(self::$session)) {
         return self::$session;
      }

      $method = $_SERVER['REQUEST_METHOD'];
      if(isset($_GET['sessionid'])) {
         self::$session = self::getSessionFromId($_GET['sessionid']);
      }
      else if($method == 'POST' && !isset($_COOKIE[self::COOKIE])) {
         return false;
      }
      else if(isset($_COOKIE[self::COOKIE])) {
         self::$session = self::getSessionFromId($_COOKIE[self::COOKIE]);
      }
      else if(isset($_GET[self::COOKIE])) {
         self::$session = self::getSessionFromId($_GET[self::COOKIE]);
      }

      if(is_null(self::$session)) {
         self::$session = self::begin();
      }
      return self::$session;
   }

   public static function getSessionFromId($sessionGuid) {
      $db = Configuration::getInstance();
      $fields = 'id, userId, sessionGuid, startTime, lastTime, createDate, updateDate';
      $sql = 'SELECT '. $fields. ' FROM '. self::getTableName(). ' WHERE sessionGuid = \''. $db->sql_escape($sessionGuid). '\' AND lastTime > '. (time() - self::EXPIRE);

      $s = null;
      if($result = $db->sql_query($sql)) {
         if($row = $db->sql_fetchrow($result)) {
            $s = new Session();
            $s->setData($row);
         }
      }

      $db->_sql_close();
      return $s;
   }

   public static function begin($userId = null) {
      $s = new Session();
      
      if(!is_null($userId)) {
         // $db = Configuration::getInstance();
         // $sql = 'DELETE FROM session WHERE userId = '. $db->sql_escape($userId);
         // $db->sql_query($sql);
         // $db->_sql_close();
      }
        
      $s->setField('userId', $userId);
      $s->setField('sessionGuid', newGuid());
      $s->setField('startTime', time());
      $s->setField('lastTime', time());
      $s->save();

      if($userId > 0) {
         setcookie(self::COOKIE, $s->getField('sessionGuid'), time() + (60 * 60 * 24 * 30), '/', $_SERVER['HTTP_HOST'] , '0');
      }
      else {
         setcookie(self::COOKIE, $s->getField('sessionGuid'), 0, '/', $_SERVER['HTTP_HOST'] , '0');
      }

      return $s;
   }

   public function end() {
      $db = $this->getDatabase();
      $db->query('DELETE FROM '. self::getTableName(). ' WHERE id = '. $this->getId());
      $db->_sql_close();
      setcookie(self::COOKIE, '', time() - 31536000, '/', $_SERVER['HTTP_HOST'], '0');
      self::$session = null;
      self::$user = null;
      $this->isEndingSession = true;
   }

   public function getUser() {
      if(is_null(self::$user) && $this->getField('userId') > 0) {
         self::$user = new User($this->getField('userId'));
         self::$user->populate();
      }
      return self::$user;
   }
   
   public static function login($user) {
      if(!is_null($user)) {
         self::$session = SentrySentrySession::begin($user->getId());
         self::$user = $user;
         return self::$session;
      }
      return false;
   }

   public function save() {
      $this->setField('lastTime', time());
      parent::save();
   }

   public function __destruct() {
      if(!$this->isEndingSession) {
         $this->save();
      }
   }
   
   public function serialize() {
      $obj = parent::serialize();
      unset($obj["userId"]);
      $user = $this->getUser();
      if(is_null($user)) {
         $obj['user'] = null;
      }
      else {
         $obj['user'] = $user->serialize();
      }
      
      return $obj;
   }

   function getTable() {
      return self::getTableName();
   }

   public static function getTableName() {
      return 'session';
   }

   public function getFields() {
      return self::getDataFields();
   }

   public static function getDataFields() {
      if (self::$fields == null) {
         self::$fields = parent::getDataFields();

         self::$fields["userId"] = "integer";
         self::$fields["sessionGuid"] = "string";
         self::$fields["startTime"] = "integer";
         self::$fields["lastTime"] = "integer";
      }

      return self::$fields;
   }
}

?>