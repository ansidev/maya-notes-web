<?php
	include 'sql_connect.php';
	$query = "SELECT * FROM `lang` WHERE `lang_string` = 'LOGIN_TITLE'";
	$result = mysqli_query($query, $con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css" media="all">
	<!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="all"> -->
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-flat.css" media="all">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/maya-notes.css" media="all">
	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/reset.css" media="all"> -->
	<title>Maya Notes Web Apps</title>
</head>
<body>
<header>
	<h1 class="text-uppercase page-name">Login</h1>
</header>
<nav>
<!-- 
	<ul class="text-uppercase">
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<ul>
			<li><a href="#">Contact</a></li>
		</ul>
	</ul>
 -->
</nav>
<section style="margin-bottom: 50px;">
	<div class="container">
		<form role="form" method="POST">
			<div class="form-group">
				<label for="username">Username*</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" tabindex="2">
				<span id="username-tooltip" style="display: none;" >Username is not valid or existed.</span>
			</div>
			<div class="form-group">
				<label for="password">Password*</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" tabindex="3">
				<span id="password-tooltip" style="display: none;" >Password is not valid.</span>
			</div>
			<button type="submit" class="btn btn-primary" tabindex="11">Login</button>
		</form>
		<?php
		    if(isset($_POST['username']) && isset($_POST['password']))
		    {
		    	$escapedName = mysql_real_escape_string($_POST['username']);
				$escapedPW = mysql_real_escape_string($_POST['password']);
		    	$user_query = "SELECT * FROM `lang` WHERE `lang_string` = 'LOGIN_TITLE'";
		    }
		?>
	</div>
</section>
<?php require 'footer.php';?>