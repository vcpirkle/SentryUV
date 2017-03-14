<?php

class Resource extends Saveable {

	protected static $fields;
	
    public function __construct($id = null) {
        parent::__construct($id);
    }

    function getTable() {
        return self::getTablename();
    }

    public static function getTablename() {
        return 'resource';
    }

    public function getFields() {
        return self::getDataFields();
    }
   
   public static function getDataFields() {
        if (self::$fields == null) {
			self::$fields = parent::getDataFields();

			self::$fields["pageName"] = "string";
         self::$fields["stringName"] = "string";
			self::$fields["stringValue"] = "string";
        }

        return self::$fields;
    }
}

?>