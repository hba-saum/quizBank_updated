<?php
class Question{
	private $id;
	private $question;
	private $question_paper_id;
	private $opt1;
	private $opt2;
	private $opt3;
	private $opt4;
	private	$corr_ans;
	
	function __construct($question, $question_paper_id, $opt1, $opt2, $opt3, $opt4, $corr_ans){
		$this->question = $question;
		$this->question_paper_id = $question_paper_id;
		$this->opt1 = $opt1;
		$this->opt2 = $opt2;
		$this->opt3 = $opt3;
		$this->opt4 = $opt4;
		$this->corr_ans = $corr_ans;
	}
	
	
	//getters
	function get_id(){
		return $this->id;
	}
	function get_question(){
		return $this->question;
	}
	function get_question_paper_id(){
		return $this->question_paper_id;
	}
	function get_opt1(){
		return $this->opt1;
	}
	function get_opt2(){
		return $this->opt2;
	}
	
	function get_opt3(){
		return $this->opt3;
	}
	function get_opt4(){
		return $this->opt4;
	}
	function get_corr_ans(){
		return $this->corr_ans;
	}
}
?>