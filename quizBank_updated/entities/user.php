<?php
class User{
	private $id;
	private $firstname;
	private $lastname;
	private $username;
	private $dob;
	private $gender;
	private $institute;
	private $address;
	private $email;
	private $mobno;
	private $pass;
	
	
	function __construct($firstname, $lastname, $username, $dob, $gender, $institute, $address, $email, $mobno, $pass){
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->dob = $dob;
		$this->gender = $gender;
		$this->institute = $institute;
		$this->address = $address;
		$this->email = $email;
		$this->mobno = $mobno;
		$this->pass = $pass;
	}
	
	//setters
	public function set_id($id){
		$this->id = $id;
	}
	public function set_firstname($firstname){
		$this->firstname = $firstname;
	}
	public function set_lastname($lastname){
		$this->lastname = $lastname;
	}
	public function set_dob($dob){
		$this->dob = $dob;
	}
	public function set_gender($gender){
		$this->gender = $gender;
	}
	public function set_institute($institute){
		$this->institute = $institute;
	}
	
	public function set_address($address){
		$this->address = $address;
	}
	public function set_email($email){
		$this->email = $email;
	}
	public function set_mobno($mobno){
		$this->mobno = $mobno;
	}
	public function set_pass($pass){
		$this->pass = $pass;
	}
	
	
	//getters
	public function get_id(){
		return $this->id;
	}
	public function get_firstname(){
		return $this->firstname;
	}
	public function get_lastname(){
		return $this->lastname;
	}
	public function get_username(){
		return $this->username;
	}
	public function get_dob(){
		return $this->dob;
	}
	public function get_gender(){
		return $this->gender;
	}
	public function get_institute(){
		return $this->institute;
	}
	public function get_address(){
		return $this->address;
	}
	public function get_email(){
		return $this->email;
	}
	public function get_mobno(){
		return $this->mobno;
	}
	public function get_pass(){
		return $this->pass;
	}
}
	
?>