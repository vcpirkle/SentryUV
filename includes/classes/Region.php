<?php

class Region extends Saveable {

	protected static $fields;
	
    public function __construct($id = null) {
        parent::__construct($id);
    }
	
	public static function getRegions($countryId = null) {
		$regions = array();
      
      $db = Configuration::getGeoInstance();
		
		$fields = 'id, countryId, name, code, createDate, updateDate';
		$sql = 'SELECT '. $fields. ' FROM '. self::getTablename(). 
             (is_null($countryId) ? '' : ' WHERE countryId = '. $db->sql_escape($countryId)). 
             ' ORDER BY name ASC';
		
		if($result = $db->sql_query($sql)) {
			while($row = $db->sql_fetchrow($result)) {
				$region = new Region();
				$region->setData($row);
				$regions[] = $region;
			}
		}
		return $regions;
	}
   
   public static function getRegionsArray($countryId = null) {
      $regions = self::getRegions($countryId);
      $regionsArray = array();
      foreach($regions as $index => $region) {
         $regionsArray[] = $region->serialize(); 
      }
      return $regionsArray;
   }
	
	public function getCities() {
		return City::getCities($this->getId());
	}

    function getTable() {
        return self::getTablename();
    }

    public static function getTablename() {
        return 'region';
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

			self::$fields["countryId"] = "integer";
			self::$fields["name"] = "string";
			self::$fields["code"] = "string";
        }

        return self::$fields;
    }
}

?>