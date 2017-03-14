<?php

abstract class SoftDelete extends Saveable {

	public function __construct($id = null) {
        parent::__construct($id);
    }

	function save() {
		if(is_null($this->getId())) {
			$this->setField('deleted', false);
		}
		return parent::save();
	}
   
   public function delete() {
      if ($this->getId() == null) {
         return false;
      }

      $this->setField('deleted', true);

      return parent::save();
   }
   
   public function hardDelete() {
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
	
	protected static function getDataFields() {
      $fields = parent::getDataFields();
      $fields["deleted"] = "boolean";
      return $fields;
   }
}
?>