<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'test';
	$db = mysqli_connect($db_host, $db_user, "", $db_name) or die ("Íåâîçìîæíî ïîäêëþ÷èòüñÿ ê ÁÄ");
	mysqli_query($db, 'set character_set_results = "utf8"');
	$link = mysqli_connect($host, $user, $pass, $db_name);

    	if (!$link) {
		echo ('Íåâîçìîæíî ïîäêëþ÷èòüñÿ ê ÁÄ');
      		exit;
    	}

    	if (isset($_POST["Name_P"])) {
      		if (isset($_GET['red'])) {
        		$sql = mysqli_query($link, "UPDATE `posts` SET `Name_P` = '{$_POST['Name_P']}',`Text_P` = '{$_POST['Text_P']}' WHERE `ID`={$_GET['red']}");
      		} else {
        		$sql = mysqli_query($link, "INSERT INTO `posts` (`Name_P`, `Text_P`) VALUES ('{$_POST['Name_P']}', '{$_POST['Text_P']}')");
      		}
    	}

    	if (isset($_GET['del'])) {
      		$sql = mysqli_query($link, "DELETE FROM `posts` WHERE `ID` = {$_GET['del']}");
    	}

    	if (isset($_GET['red'])) {
      		$sql = mysqli_query($link, "SELECT `ID`, `Name_P`, `Text_P` FROM `posts` WHERE `ID`={$_GET['red']}");
      		$product = mysqli_fetch_array($sql);
    	}
?>
