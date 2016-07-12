<?php
session_start();
require_once('new-connection.php')

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
		.red{
			padding:10px;
			color:red;
			background-color:pink;
			border:1px solid red;
		}
	</style>
</head>
<body>
	<div id="container">
	<h1>Welcome to QuotingDojo!</h1>
		<form action="process_quotingdojo.php" method="post">
			<table>
				<tr>
					<td>Your name:</td>
					<td><input id="name" type="text" name="name"></td>
				</tr>
				<tr>
					<td>Your quote:</td>
					<td><input id="quote" type="textarea" name="quote"></td>
				</tr>
			</table>

			<?php 

			if(isset($_SESSION['error'])) {
				echo $_SESSION['error'];
				unset($_SESSION['error']);}

			?>
			
			<input class="button" type="submit" value="Add my quote!">
		</form>
		<form action="main_quotingdojo.php">
			<input class="button skip" type="submit" value="Skip to Quotes!">
		</form>
	</div>
</body>
</html>