<?php
	include 'config/app-config.php';
	include 'inc/function.php';
	$page_title = "Register";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css" media="all">
	<!-- <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css" media="all"> -->
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-flat.css" media="all">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/maya-notes.css" media="all">
	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" type="text/css" href="./bootstrap/css/reset.css" media="all"> -->
	<title><?=APP_NAME?> - <?=$page_title?></title>
</head>
<body>
<header>
	<h1 class="text-uppercase page-name"><?=$page_title?></h1>
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
			<?php init_general_input("email", "Email address *", "email", "email", "Enter your email address", "1");?>
			<?php init_general_input("username", "Username *", "text", "", "Enter your username", "2");?>
			<?php init_general_input("password", "Password *", "password", "", "Enter your password", "3");?>
			<?php init_general_input("confirm-password", "Confirm password *", "password", "", "Retype your password", "4");?>
			<?php init_general_input("first-name", "First name", "text", "", "Your first name", "5");?>
			<?php init_general_input("last-name", "Last name", "text", "", "Your last name", "6");?>
			<?php init_general_input("birthday", "Birthday", "datetime", "", "Your birthday", "7");?>
			<div class="form-group">
				<label class="control-label" for="gender">Gender:</label>
				<label class="radio-inline">
				<input type="radio" name="gender" id="male" value="Male" tabindex="8">
				Male
				</label>
				<label class="radio-inline">
				<input type="radio" name="gender" id="female" value="Female" tabindex="9">
				Female
				</label>
<!--				<span class="clearfix" id="gender-tooltip" style="display: none;">Gender is not valid</span>-->
			</div>				
			<div class="checkbox">
				<label>
					<input type="checkbox" name="tos-checkbox" id="tos-checkbox" tabindex="10">I have read this agreement and agree to the Term and Condition of Use.
				<span class="clearfix" id="tos-checkbox-tooltip" style="display: none;" >You must check this checkbox.</span>
				</label>
			</div>
			<button type="submit" class="btn btn-primary" tabindex="11">Register</button>
		</form>
	</div>
</section>
<footer>
	<div class="footer">
	Copyright &copy; 2014 by <a href="https://github.com/Maya-Team" target="_blank">Maya Team</a>
	</div>
</footer>
<!--[if lt IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<script src="./bootstrap/js/register.js"></script>    
</body>
</html>