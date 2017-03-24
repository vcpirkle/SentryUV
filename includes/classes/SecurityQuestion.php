<?php

class SecurityQuestion extends Saveable {

   protected static $fields;

   public function __construct($id = null) {
      parent::__construct($id);
   }

   public static function getSecurityQuestions() {
      $questions = array();

      $sql = 'SELECT id, question, createDate, updateDate, deleted FROM '. self::getTableName();
      $db = Configuration::getInstance();
      if($result = $db->sql_query($sql)) {
         while($row = $db->sql_fetchrow($result)) {
            $question = new Securityquestion();
            $question->setData($row);
            $questions[] = $question;
         }
      }
      return $questions;
   }

   function getTable() {
      return self::getTableName();
   }

   public static function getTableName() {
      return 'securityQuestion';
   }

   public function getFields() {
      return self::getDataFields();
   }

   public static function getDataFields() {
      if (self::$fields == null) {
         self::$fields = parent::getDataFields();

         self::$fields["question"] = "string";
      }

      return self::$fields;
   }
}

?>