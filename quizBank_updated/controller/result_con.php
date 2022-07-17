<?php
	require_once '../model/db.php';

	function get_answersheet_row($id){
		$sql = "SELECT * FROM answer_sheet WHERE id=" . $id;
		return get_row($sql);
	}
	
function get_answers($id){
		$sql = "SELECT * FROM answer WHERE answer_sheet_id=" . $id;	
		return get_all_rows($sql);
}
?>