<?php
session_start();
require_once('new-connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a Quote</title>
	<style type="text/css">
		#container{
			width:400px;
			margin:10px auto;
		}
		#quote{
			width:150px;
			height:100px;
		}
		#name{
			width:150px;
		}
		table tr, td{
			vertical-align:top;
		}
		.button{
			display:inline-block;
			border:1px solid black;
			background-color:white;
			margin:5px;
		}
		.button:hover{
			background-color:#99ddff;
		}
		form{
			display:inline-block;
		}
		.skip{
			position:relative;
			left:-100px;
		}
		.entries{
			border-bottom:2px solid #99ddff;
			text-align:center;
		}
		.quotes{
			color:#193366;
			font-size:15pt;
			text-align:left;
		}
	</style>
</head>
<body>
	<div id="container">
		<h1>Here are the awesome quotes</h1>
		<?php 
		$messages = fetch_all("SELECT name, quote, DATE_FORMAT(created_at, '%h:%i %p %M %e %Y')as date from quotes ORDER BY created_at DESC;");
		foreach($messages as $message){ ?>
		<div class='entries'><p class='quotes'>

		"<?= $message['quote']; ?>" 

		</p><p>
			
		- <?= $message['name']; ?> at <?= $message['date']; ?> 

		</p></div>
		<?php } ?>
		<form action="index_quotingdojo.php">
			<input class="button" type="submit" value="Add another quote!">
		</form>
	</div>
</body>
</html>