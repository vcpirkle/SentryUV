<?php

abstract class Saveable implements iSaveable {
   
	protected $id;
	protected $data;
	protected $hasChanges;
   protected $modifiedFields;

	public function __construct($id = null) {
      $this->id = $id;
      $this->data = array();
      $this->modifiedFields = array();
      $this->hasChanges = is_null($id);
	}

	public function __get($name) {		
		if ($this->doesFieldExist($name)) {
			return $this->getField($name);
		}
		if ($name == $this->getIdField()) {
			return $this->getId();
		}
      return null;
	}
	
	public function __set($name, $value) {
		if ($this->doesFieldExist($name)) {
			return $this->setField($name, $value);
		}
      return null;
	}

	public function __isset($name) {
		if ($this->doesFieldExist($name)) {
			return isset($this->data[$name]);
		}		
		return false;
	}	
	
	public function doesFieldExist($name) {	
		$fields = $this->getFields();		
		if (isset($fields[$name])) {
			return true;
		}
		return false;
	}

	public function populate() {
		$db = $this->getDatabase();

		$sql =  'SELECT p.'. $this->getIdField(). ', '.
		 		 $this->getSelectionFromFields($this->getFields(), 'p') . 
		  		 ' FROM ' . $this->getTable() . ' as p' . 
				 ' WHERE p.'.$this->getIdField().' = ' . $this->getIdWrapper() . $this->getId() . $this->getIdWrapper();

		if (!($result = $db->sql_query($sql))) {
		  $error = $db->_sql_error();
		  throw new Exception('Error getting data: '.$error["message"].' - '.$sql);
		}

		$row = $db->sql_fetchrow($result);
		if ($row === false) { return false; }
		$this->setData($row);
		$db->sql_freeresult($result);
      
      return true;
	}
	
	public static function getSelectionFromFields($fields, $prefix, $namePrefix = '') {
		$fieldSelection = array();
		
		foreach ($fields as $name => $type) {
			switch ($type) {
				case 'uniqueidentifier':
					$fieldSelection[] = 'cast(' . $prefix . '.' . $name . ' as varchar(64)) as ' . $namePrefix. $name;
					break;
				default:
					$fieldSelection[] = $prefix . '.' . $name . ' as ' . $namePrefix. $name;
					break;
			}
		}		
		return implode(',', $fieldSelection);
	}

	public function setData($dataIn) {
      $fields = $this->getFields();
      foreach ($dataIn as $name => $value) {
         if(array_key_exists($name, $fields)) {
            switch($fields[$name]) { 
               case 'integer': $this->data[$name] = (int) $value; break;
               case 'double': $this->data[$name] = (double) $value; break;
               case 'float': $this->data[$name] = (float) $value; break;
               case 'boolean': $this->data[$name] = ($value > 0 ? true: false); 
               default: $this->data[$name] = $value; break;
            }
         }
      }
      
      if(array_key_exists($this->getIdField(), $dataIn)) {
         $this->setId($dataIn[$this->getIdField()]);
      }
      
		$this->hasChanges = false;
      $this->modifiedFields = array();
	}

	public function updateData($dataIn) {
		foreach ($dataIn as $name => $value) {
			$this->setField($name, $value);
		}
	}
  
	public function getData() {
		return $this->data;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		$this->data[$this->getIdField()] = $id;
	}

	public function hasIdentity() {
		return ($this->id != null);
	}
  
	public function getField($name) {
      if(isset($this->data[$name])) {
         return $this->data[$name];
      }
      else { 
         return null;
      }
	}

	public function setField($name, $newValue) {
      if($this->doesFieldExist($name)) {
         if(!isset($this->data[$name]) || $this->data[$name] != $newValue) {
            $this->data[$name] = $newValue;
            if(!in_array($name, $this->modifiedFields)) {
               $this->modifiedFields[] = $name;
            }
            $this->hasChanges = true;
         }
         return true;
      }
      return false;
	}

	public function hasChanges() {
		return $this->hasChanges;
	}
	
	private function saveWithMerge($db, $table, $idName, $data, $shouldCheckDB) {
		$sql = '';
		$action = '';
			
		$isUpdate = isset($this->data[$idName]);
		if ($isUpdate && $shouldCheckDB) {
			$sql = 'SELECT COUNT(*) as [count] FROM ' . $table  . ' WHERE ' . $idName . ' = ' . $data[$idName];
			$countResult = $db->sql_query($sql);
			if (!$countResult) {	
				throw new Exception('Error checking for row in ' . $table);
			}
			$row = $db->sql_fetchrow($countResult);		
			$isUpdate = $row['count'] != 0;	
		}
		
		if ($isUpdate) {
			$sets = array();
			foreach($data as $field => $value) {
				if ($field !== $idName) {
					$sets[] = $field . ' = ' . $value;
				}
			}
			
			if(count($sets) == 0) 
				return array('action' => $action, 'insertedId' => null);
			
			$action = 'UPDATE';
			$sql = 'UPDATE ' . $table . ' SET ' . implode(',', $sets) . ' WHERE ' . $idName . ' = ' . $data[$idName];
		}
		else {
			$fields = array();
			$values = array();
			
			foreach($data as $field => $value) {
				$fields[] = $field;
				$values[] = $value;
			}
			
			$action = 'INSERT';
			$sql = 'INSERT INTO ' . $table . ' (' . implode(',', $fields) . ') VALUES (' .  implode(',', $values) . ')';			
		}
      
		$result = $db->sql_query($sql);
		if (!$result) {
			throw $db->createDbFailureException($sql, $table);
		}	

		return array('action' => $action, 'insertedId' => ($action == 'INSERT' && !isset($data[$idName]))? $db->sql_nextid() : null);
	}
  
   public function save() {
      if (!$this->hasChanges()) {
         return -1;
      }
      
      if(!isset($this->data['createDate'])) {
         $this->setField('createDate', time());
      }
      $this->setField('updateDate', time());

      $fields = $this->getFields();
      $mergeData = array();

      $db = $this->getDatabase();	

      foreach($this->modifiedFields as $name) {
         if (isset($fields[$name])) {
            $mergeData[$name] = $this->encodeSQL($name, $db);
         } 
      }

      if (count($mergeData) == 0 && $this->id != null) {
         return -1;
      }

      if ($this->id != null) { 
         $mergeData[$this->getIdField()] = $this->getIdWrapper() . $this->getId() . $this->getIdWrapper();			
      }

      $saveResult = $this->saveWithMerge($db, $this->getTable(), $this->getIdField(), $mergeData, !$this->isAutoId());	
      if ($saveResult['action'] == 'INSERT' && !$this->id) {			
         $this->setId($saveResult['insertedId']);
      }
      $this->hasChanges = 0;
      $this->modifiedFields = array();
      $db->_sql_close();
      
      return $this->getId();
   }

   public function delete() {
      if ($this->getId() == null) {
         return false;
      }

      $sql = 'DELETE FROM '.$this->getTable().' WHERE '.$this->getIdField().' = '. $this->getIdWrapper() . $this->getId() . $this->getIdWrapper(); 

      $db = $this->getDatabase();

      if (!($result = $db->sql_query($sql))) {
         $error = $db->_sql_error();
         throw new Exception('Error deleting data: ' . $error['message']);
         return false;
      }
      return true;
   }

   protected function encodeSQL($name, $db) {
      $var = $this->data[$name];
      $fields = $this->getFields();

      if (!isset($var)) {
         return 'NULL';
      }
      $t = $fields[$name];
      return self::wrapSQL($t, $var, $db);
   }

	protected static function wrapSQL($type, $var, $db) {
		switch ($type) {
			case 'boolean':
				return $var ? '1' : '0';
			case 'integer':
				return (int) $var;
			case 'double':
			case 'float':
				return sprintf('%F', $var);
			case 'string':
				return 'N\''.$db->sql_escape($var).'\'';
			default:
				return '\''.$db->sql_escape($var).'\'';
		}
	}
   
   public function serialize() {
      $obj = array();
      $obj[$this->getIdField()] = is_numeric($this->getId()) ? (int) $this->getId() : $this->getId();
      foreach($this->getFields() as $field => $type) {
          switch($type) { 
               case 'integer': $obj[$field] = is_null($this->getField($field)) ? null : (int) $this->getField($field); break;
               case 'double': $obj[$field] = is_null($this->getField($field)) ? null : (double) $this->getField($field); break;
               case 'float': $obj[$field] = is_null($this->getField($field)) ? null : (float) $this->getField($field); break;
               case 'boolean': $obj[$field] = is_null($this->getField($field)) ? null : $this->getField($field) ? true : false; break;
               default: $obj[$field] = $this->getField($field); break;
            }
      }
      return $obj;
   }

   public function toJson() {
      return json_encode($this->serialize(), JSON_HEX_QUOT);
   }
   
   public function serializeFullGraph() {
      $obj = array();
      $obj[$this->getIdField()] = is_numeric($this->getId()) ? (int) $this->getId() : $this->getId();
      foreach($this->getFields() as $field => $type) {
          switch($type) { 
               case 'integer': $obj[$field] = is_null($this->getField($field)) ? null : (int) $this->getField($field); break;
               case 'double': $obj[$field] = is_null($this->getField($field)) ? null : (double) $this->getField($field); break;
               case 'float': $obj[$field] = is_null($this->getField($field)) ? null : (float) $this->getField($field); break;
               case 'boolean': $obj[$field] = is_null($this->getField($field)) ? null : $this->getField($field) ? true : false; break;
               default: $obj[$field] = $this->getField($field); break;
            }
      }
      return $obj;
   }
   
   public function toJsonFullGraph() {
      return json_encode($this->serializeFullGraph(), JSON_HEX_QUOT);
   }
  
   public function getIdField() {
      return 'id';
   }
  
   protected function getDatabase() {
      return Config::getInstance();
   }
  
   protected function getIdWrapper() {
      if ($this->isIdString()) {
         return '\'';
      }
      return '';
   }
  
   protected function isAutoId() { return true; }
   protected function isIdString() { return false; }
   protected abstract function getTable();
   protected abstract function getFields();
   
   protected static function getDataFields() {
      $fields = array();
      $fields["createDate"] = "integer";
      $fields["updateDate"] = "integer";
      return $fields;
   }
}

?>
