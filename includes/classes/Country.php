<?php

class Country extends Saveable {

	protected static $fields;
	
    public function __construct($id = null) {
        parent::__construct($id);
    }
	
	public static function getCountries() {
		$countries = array();
		
		$fields = 'id, name, fips104, iso2, iso3, ison, internet, capital, mapReference, nationalitySingular, nationalityPlural, currency, currencyCode, population, title, comment, createDate, updateDate';
		$sql = 'SELECT '. $fields. ' FROM '. self::getTablename(). ' ORDER BY  CASE  WHEN id=254 THEN \'a\'  ELSE name  END ASC ';
      
		$db = Config::getGeoInstance();
		if($result = $db->sql_query($sql)) {
			while($row = $db->sql_fetchrow($result)) {
				$country = new Country();
				$country->setData($row);
				$countries[] = $country;
			}
		}
		return $countries;
	}
   
   public static function getCountriesArray() {
      $countries = self::getCountries();
      $countriesArray = array();
      foreach($countries as $index => $country) {
         $countriesArray[] = $country->serialize(); 
      }
      return $countriesArray;
   }
	
	public function getRegions() {
		return Region::getRegions($this->getId());
	}

    function getTable() {
        return self::getTablename();
    }

    public static function getTablename() {
        return 'country';
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

			self::$fields["name"] = "string";
			self::$fields["fips104"] = "string";
			self::$fields["iso2"] = "string";
			self::$fields["iso3"] = "string";
         self::$fields["ison"] = "string";
         self::$fields["internet"] = "string";
         self::$fields["capital"] = "string";
         self::$fields["mapReference"] = "string";
         self::$fields["nationalitySingular"] = "string";
         self::$fields["nationalityPlural"] = "string";
         self::$fields["currency"] = "string";
         self::$fields["currencyCode"] = "string";
         self::$fields["population"] = "integer";
         self::$fields["title"] = "string";
         self::$fields["comment"] = "string";
        }

        return self::$fields;
    }
}

?>