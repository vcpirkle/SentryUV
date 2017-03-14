<?php

class Image extends Saveable {

	protected static $fields;
	
    public function __construct($id = null) {
        parent::__construct($id);
    }

    function getTable() {
        return self::getTablename();
    }

    public static function getTablename() {
        return 'image';
    }

    public function getFields() {
        return self::getDataFields();
    }
   
   public static function getDataFields() {
        if (self::$fields == null) {
			self::$fields = parent::getDataFields();

			self::$fields["name"] = "string";
			self::$fields["s3Id"] = "string";
        }

        return self::$fields;
    }
}

?>