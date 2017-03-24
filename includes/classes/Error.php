<?php

class Error extends Saveable {

	protected static $fields;
	
    public function __construct($id = null) {
        parent::__construct($id);
    }
	
	public static function getErrors() {
      $cache = Cache::getInstance();
		$errors = $cache->get('errors');
      
      if(!$errors) {
         $db = Configuration::getInstance();
         
         $fields = 'id, code, message, createDate, updateDate';
         $sql = 'SELECT '. $fields. ' FROM '. self::getTablename();
         
         if($result = $db->sql_query($sql)) {
            while($row = $db->sql_fetchrow($result)) {
               $error = new Error();
               $error->setData($row);
               $errors[] = $error;
            }
         }
         $cache->set('errors', $errors);
      }
		return $errors;
	}
   
   public static function getError($code) {
      foreach(self::getErrors() as $error) {
         if($error->getField('code') == $code) {
            return $error;
         }
      }
   }
   
   public static function getErrorsArray() {
      $errors = self::getErrors();
      $errorsArray = array();
      foreach($errors as $index => $error) {
         $errorsArray[] = $error->serialize(); 
      }
      return $errorsArray;
   }
   
   public function serialize() {
      $obj = parent::serialize();
      unset($obj["id"]);
      unset($obj["createDate"]);
      unset($obj["updateDate"]);
      return $obj;
   }

    function getTable() {
        return self::getTablename();
    }

    public static function getTablename() {
        return 'error';
    }

    public function getFields() {
        return self::getDataFields();
    }
    
    protected function getDatabase() {
      return Configuration::getGeoInstance();
   }
   
   public static function getDataFields() {
        if (self::$fields == null) {
			self::$fields = parent::getDataFields();

			self::$fields["code"] = "integer";
			self::$fields["message"] = "string";
        }

        return self::$fields;
    }
}

?>