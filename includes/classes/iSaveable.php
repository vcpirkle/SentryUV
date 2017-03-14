<?php

interface iSaveable {
   public function __get($name);
   public function __set($name, $value);
   public function __isset($name);
   public function doesFieldExist($name);
   public function populate();
   public function setData($dataIn);
   public function updateData($dataIn);
   public function getData();
   public function getId();
   public function setId($id);
   public function hasIdentity();
   public function getField($name);
   public function setField($name, $newValue);
   public function hasChanges();
   public function save();
   public function delete();
   public function getIdField();
   public function toJson();
}

?>