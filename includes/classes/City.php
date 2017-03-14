<?php

class City extends Saveable {

	protected static $fields;
	
    public function __construct($id = null) {
        parent::__construct($id);
    }
	
	public static function getCities($regionId = null) {
		$cities = array();
      
      $db = Config::getGeoInstance();
		
		$fields = 'id, countryId, regionId, name, lat, lon, code, createDate, updateDate';
		$sql = 'SELECT '. $fields. ' FROM '. self::getTablename(). 
             (is_null($regionId) ? '' : ' WHERE regionId = '. $db->sql_escape($regionId)). 
             ' ORDER BY name ASC';
		
		if($result = $db->sql_query($sql)) {
			while($row = $db->sql_fetchrow($result)) {
				$city = new City();
				$city->setData($row);
				$cities[] = $city;
			}
		}
		return $cities;
	}
   
   public static function getCitiesArray($regionId = null) {
      $cities = self::getCities($regionId);
      $citiesArray = array();
      foreach($cities as $index => $city) {
         $citiesArray[] = $city->serialize(); 
      }
      return $citiesArray;
   }

    function getTable() {
        return self::getTablename();
    }

    public static function getTablename() {
        return 'city';
    }

    public function getFields() {
        return self::getDataFields();
    }
    
    protected function getDatabase() {
      return Config::getGeoInstance();
   }
   
   public static function getDataFields() {
        if (self::$fields == null) {
			self::$fields = parent::getDataFields();

			self::$fields["countryId"] = "integer";
			self::$fields["regionId"] = "integer";
			self::$fields["name"] = "string";
			self::$fields["lat"] = "double";
         self::$fields["lon"] = "double";
         self::$fields["code"] = "string";
        }

        return self::$fields;
    }
}

?>