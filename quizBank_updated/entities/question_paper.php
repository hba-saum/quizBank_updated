<?php 
class Question_paper{
	private $id;
	private $title;
	private $name;
	private $question_setter_id;
	
	function __construct($title, $name, $question_setter_id){
		$this->title = $title;
		$this->name = $name;
		$this->question_setter_id = $question_setter_id;
	}
	
	//getters
	public function set_id($id){
		$this->id = $id;
	}	
	public function set_title($title){
		$this->title = $title;
	}	

	public function set_name($name){
		$this->name = $name;
	}	

	public function set_question_setter_id($question_setter_id){
		$this->question_setter_id = $question_setter_id;
	}	
	
	
	
	//setters
	public function get_id(){
		return $this->id;
	} 
	public function get_title(){
		return $this->title;
	}	

	public function get_name(){
		return $this->name;
	}	

	public function get_question_setter_id(){
		return $this->question_setter_id;
	}			
}
?>