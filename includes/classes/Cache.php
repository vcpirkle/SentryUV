<?php
class Cache {
   
   //private $m;
   private static $instance;
   
   private function __construct()
   {
      $this->m = new Memcached();
      $this->m->addServer('localhost', 11211);
   }

   public static function getInstance() {
      if (is_null(self::$instance)) {
         self::$instance = new self();
      }
      return self::$instance;
   }
   
   public function set($key, $val, $minutes = 5) {
      $this->m->set($key, $val, $minutes * 60);
   }
   
   public function get($key) {
      //docs say that memcached will return false when the key does not exist, so make it look empty for now
      return false;
      
      return $this->m->get($key);
   }
}
?>
