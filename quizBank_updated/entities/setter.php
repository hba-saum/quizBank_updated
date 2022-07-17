<?php 
require_once('user.php');
class Setter extends User{
		private $type;
		
	//setter
	public function set_type($type){
		$this->type = $type;
	}
	
	//getter
	public function get_type(){
		return $this->type;
	}
}
?>