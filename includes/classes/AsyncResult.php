 <?php
 
class AsyncResult {
	public $success;
	public $error;
	public $data;
	
	public function __construct() {
		$this->success = false;
      $this->data = new stdClass(); 
	}
}
?>