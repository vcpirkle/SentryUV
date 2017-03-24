<?php

class Historical extends SoftDelete {

   protected static $fields;

   public function __construct($id = null) {
      parent::__construct($id);
   }

   function getTable() {
      return self::getTablename();
   }
   
   public function save() {
      if( is_null($this->getField('revisionId')) ) {
         $this->setField('revisionId', 1);
      }
      else if( $this->hasChanges ) {
         $this->setField('revisionId', $this->getField('revisionId') + 1);
      }
      
      $id = parent::save();
      if($id > 0) {
         //If the parent object was saved then insert into the history table
         $db = $this->getDatabase();
         
         $sql = 'INSERT INTO '. $this->getTable(). '_history (id, revisionId, userId, json, createDate, updateDate, deleted) VALUES('. 
                $id. ','. 
                $this->getField('revisionId'). ','.
                $this->getField('userId'). ','. 
                "'". $db->sql_escape($this->toJson()). "',".
                time(). ','. time(). ','.
                ( $this->getField('deleted') || $this->getField('deleted') > 0 ? '1' : '0' ). ')';
         
         $result = $db->sql_query($sql);
         if (!$result) {
            throw $db->createDbFailureException($sql, $this->getTable(). '_history');
         }	
         $db->_sql_close();
      }
      
      return $id;
   }
   
   public function delete() {
      parent::delete();
      
      $this->setField('revisionId', $this->getField('revisionId') + 1);
      
      $id = parent::save();
      if($id > 0) {
         //If the parent object was saved then insert into the history table
         $db = $this->getDatabase();
         
         $sql = 'INSERT INTO '. $this->getTable(). '_history (id, revisionId, userId, json, createDate, updateDate, deleted) VALUES('. 
                $id. ','. 
                $this->getField('revisionId'). ','.
                $this->getField('userId'). ','. 
                "'". $db->sql_escape($this->toJson()). "',".
                time(). ','. time(). ','.
                ( $this->getField('deleted') || $this->getField('deleted') > 0 ? '1' : '0' ). ')';
         
         $result = $db->sql_query($sql);
         if (!$result) {
            throw $db->createDbFailureException($sql, $this->getTable(). '_history');
         }	
         $db->_sql_close();
      }
      
      return $id;
   }
   
   public function hardDelete() {
      
      if ($this->getId() == null) {
         return false;
      }

      $sql = 'DELETE FROM '.$this->getTable(). '_history WHERE '.$this->getIdField().' = '. $this->getIdWrapper() . $this->getId() . $this->getIdWrapper(); 

      $db = $this->getDatabase();

      if (!($result = $db->sql_query($sql))) {
         $error = $db->_sql_error();
         throw new Exception('Error deleting data: ' . $error['message']);
         return false;
      }
      $db->_sql_close();

      return parent::hardDelete();
   }

   public function getFields() {
      return self::getDataFields();
   }

   protected function getDatabase() {
      return Config::getInstance();
   }

   public static function getDataFields() {
      if (self::$fields == null) {
         self::$fields = parent::getDataFields();

         self::$fields["revisionId"] = "integer";
         self::$fields["userId"] = "integer";
      }

      return self::$fields;
   }
}

?>