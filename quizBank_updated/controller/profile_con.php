<?php
	require_once '../model/db.php';
	function get_qs_row($id){
		$sql = "SELECT * FROM setter WHERE id=" . $id;
		return get_row($sql);
	}
	function update_qs_row($id){
		$sql = "";
	}
?>