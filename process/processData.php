<?php

	if (isset($_POST["slideShowURL"])) {
		$tmp = file_put_contents("db.txt", $_POST["slideShowURL"]);
		$outout = array(
			'data' => $_POST["slideShowURL"]
		);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($outout);
	} else if (isset($_POST["requestLinks"])) {
		$result = file_get_contents("db.txt");
		$outout = array(
			'data' => $result
		);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($outout);
	} else if (isset($_POST['message'])) {
		$message = ";;;;;;;;;;". $_POST['message'];
		$tmp = file_put_contents("message.txt", $message, FILE_APPEND);
		$messageRecord = file_get_contents("message.txt");
		$outout = array(
			'data' => $messageRecord
		);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($outout);
	} else if (isset($_POST['getMessage'])) {
		$result = file_get_contents("message.txt");
		$outout = array(
			'data' => $result
		);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($outout);
	} else if (isset($_POST['clear'])) {
		$tmp = file_put_contents("message.txt", "");
		$outout = array(
			'data' => "Cleared"
		);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($outout);
	}
?>