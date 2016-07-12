<?php
session_start();
require_once('new-connection.php');

if(!isset($_POST['quote']) || $_POST['quote'] == ''){
	$_SESSION['error'] = "<div class='red'>All fields are required</div>";
header('Location: index_quotingdojo.php');
}
else if(!isset($_POST['name']) || $_POST['name'] == ''){
	$_SESSION['error'] = "<div class='red'>All fields are required</div>";
header('Location: index_quotingdojo.php');
}

else 
	// if (isset($_POST['quote'])&& isset($_POST['name']))
	{
	run_mysql_query("INSERT INTO quotes (name, quote, created_at) VALUES('{$_POST['name']}','{$_POST['quote']}', NOW())");
header('Location: main_quotingdojo.php');
}

?>