<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:home.php'); }
   require_once("koneksi.php");
?>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="sign in style.css">
</head>
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
		<form  method="post" action="proses.php">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="username" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			
			<div class="login-w3">
					<input type="submit" class="login" name="login" value="login">
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="../index.php">Back to home</a>
				</div>
				
	</div>
	</div>
	</div>
</body>
</html>