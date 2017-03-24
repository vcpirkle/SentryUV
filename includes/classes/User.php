<?php

class User extends SoftDelete {

   protected static $fields;

   public function __construct($id = null) {
      parent::__construct($id);
   }

   public static function isEmailTaken($email) {
      $db = Configuration::getInstance();
      $email = $db->sql_escape($email);
      $sql = "SELECT COUNT(*) num FROM ". self::getTableName(). " WHERE email = '$email'";

      if (!($result = $db->sql_query($sql))) {
         throw $db->createDbFailureException($sql, self::getTableName());
      }
      else {
         $row = $db->sql_fetchrow($result);
         if($row['num'] > 0) {
            return true;
         }
         else {
           return false;
         }
      }
   }

   public function setPassword($password) {
      $this->setField('password', generateHash($password));
   }

   public function setSecurityAnswer($answer) {
      $this->setField('securityQuestionAnswer', generateHash(strtolower($answer)));
   }
   
   public static function login($email, $password) {
      $db = Configuration::getInstance();
		$sql =  'SELECT u.id, '. self::getSelectionFromFields(self::getDataFields(), 'u'). 
              ' FROM '. self::getTablename(). ' as u' . 
              ' WHERE u.email = \'' . $db->sql_escape($email). '\'';

		if (!($result = $db->sql_query($sql))) {
         return false;
		}
      
      $user = new User();
      $loginValid = false;
      
      if($row = $db->sql_fetchrow($result)){
         $user->setData($row);
         if(checkHash($user->getField('password'), $password)) {
            $loginValid = true;
         }
      }
      
      $db->sql_freeresult($result);
      
      if($loginValid) {
         //Password was a match. Login the user
         SentrySession::login($user);
         
         $user->setField('lastSigninDate', time());
         $user->save();
         return true;
      }
      else { return false; }      
   }
   
   public static function getByUserGuid($userGuid) {
      $db = Configuration::getInstance();
		$sql =  'SELECT u.id, '. self::getSelectionFromFields(self::getDataFields(), 'u').
              ' FROM '. self::getTablename(). ' as u' . 
              ' WHERE u.userGuid = \'' . $db->sql_escape($userGuid). '\'';

		if (!($result = $db->sql_query($sql))) {
         return false;
		}
      
      $user = null;
      if($row = $db->sql_fetchrow($result)){
         if(is_null($user)) { 
            $user = new User();
            $user->setData($row); 
         }
      }
      $db->sql_freeresult($result);
      
      if( !is_null($user) ) { return $user; }
      else { return false; }
   }
   
   public static function getByUserIds($userIds) {
      $db = Configuration::getInstance();
		$sql =  'SELECT u.id, '. self::getSelectionFromFields(self::getDataFields(), 'u'). 
              ' FROM '. self::getTablename(). ' as u' . 
              ' WHERE u.id IN ('. implode(',', $userIds). ')'.
              ' ORDER BY id ASC';

		if (!($result = $db->sql_query($sql))) {
         return false;
		}
      
      $users = array();
      $user = null;
      
		while($row = $db->sql_fetchrow($result)){
         if( is_null($user) || $user->getId() != $row['id'] ) {
            $user = new User();
            $user->setData($row);
            $users[] = $user;
         }
      }
      return $users;
   }
   
   public static function getByUserGuids($userGuids) {
      $db = Configuration::getInstance();
		$sql =  'SELECT u.id, '. self::getSelectionFromFields(self::getDataFields(), 'u'). 
              ' FROM '. self::getTablename(). ' as u' . 
              ' WHERE u.userGuid IN (\''. implode("','", $userGuids). '\')'.
              ' ORDER BY id ASC';

		if (!($result = $db->sql_query($sql))) {
         return false;
		}
      
      $users = array();
      $user = null;
      
		while($row = $db->sql_fetchrow($result)){
         if( is_null($user) || $user->getId() != $row['id'] ) {
            $user = new User();
            $user->setData($row);
            $users[] = $user;
         }
      }
      return $users;
   }
   
   public function save() {
      if(is_null($this->getField('userGuid'))) {
         $this->setField('userGuid', newGuid());
      }
      return parent::save();
   }
   
   public function serialize() {
      $obj = parent::serialize();
      unset($obj["password"]);
      unset($obj["deleted"]);
      unset($obj["lastSigninDate"]);
      unset($obj["signinAttemptCount"]);
      return $obj;
   }

   function getTable() {
      return self::getTableName();
   }
   
   public function isBasicUser() {
      return $this->getField('userLevel')  > 0;
   }
   
   public function isPayingUser() {
      return $this->getField('userLevel')  > 1;
   }
   
   public function isContentEditor() {
      return $this->getField('userLevel')  > 2;
   }
   
   public function isSystemAdmin() {
      return $this->getField('userLevel')  > 3;
   }

   public static function getTableName() {
      return 'user';
   }

   public function getFields() {
      return self::getDataFields();
   }

   public static function getDataFields() {
      if (self::$fields == null) {
         self::$fields = parent::getDataFields();

         self::$fields["userGuid"] = "string";
         self::$fields["password"] = "string";
         self::$fields["firstName"] = "string";
         self::$fields["lastName"] = "string";
         self::$fields["email"] = "string";
         self::$fields["lastSigninDate"] = "integer";
         self::$fields["signinAttemptCount"] = "integer";
         self::$fields["userLevel"] = "integer";
      }

      return self::$fields;
   }
}

?>