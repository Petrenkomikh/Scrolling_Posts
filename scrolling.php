﻿<?php
	include 'php/db.php';
	$startFrom = $_POST['startFrom'];
	$res = mysqli_query($db, "SELECT * FROM `posts` ORDER BY `ID` DESC LIMIT {$startFrom}, 5");
	$maspost = array();
	while ($row = mysqli_fetch_assoc($res))
	{
		$maspost[] = $row;
	}
	echo json_encode($maspost);
?>