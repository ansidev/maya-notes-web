<?php
include 'config/site-config.php';
include 'inc/function.php';
$page_title = "Register";
?>
<?php include 'header.php'; ?>
<title><?= APP_NAME ?> - <?= $page_title ?></title>
</head>
<body>
<header>
    <h1 class="text-uppercase page-name"><?= $page_title ?></h1>
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
        <!--		<form role="form" method="POST">-->
        <?php //init_general_input("email", "Email address *", "email", "email", "Enter your email address", "1");?>
        <?php //init_general_input("username", "Username *", "text", "", "Enter your username", "2");?>
        <?php //init_general_input("password", "Password *", "password", "", "Enter your password", "3");?>
        <?php //init_general_input("confirm-password", "Confirm password *", "password", "", "Retype your password", "4");?>
        <?php //init_general_input("first-name", "First name", "text", "", "Your first name", "5");?>
        <?php //init_general_input("last-name", "Last name", "text", "", "Your last name", "6");?>
        <?php echo "\n\t"; ?>
        <!--            <div class="form-group input-append date">-->
        <!--                <label class="control-label" for="birthday">Birthday</label>-->
        <!--                <input type="datetime" required class="form-control" id="birthday" name="" placeholder="Your birthday" tabindex="7">-->
        <!--                <span style="display: none;"></span>-->
        <!--                <span id="datetime-tooltip" style="display: none;" ></span>-->
        <!--            </div>-->
        <!--			<div class="form-group">-->
        <!--				<label class="control-label" for="gender">Gender:</label>-->
        <!--				<label class="radio-inline">-->
        <!--				<input type="radio" name="gender" id="male" value="Male" tabindex="8">-->
        <!--				Male-->
        <!--				</label>-->
        <!--				<label class="radio-inline">-->
        <!--				<input type="radio" name="gender" id="female" value="Female" tabindex="9">-->
        <!--				Female-->
        <!--				</label>-->
        <!--<!--				<span class="clearfix" id="gender-tooltip" style="display: none;">Gender is not valid</span>-->
        <!--			</div>				-->
        <!--			<div class="checkbox">-->
        <!--				<label>-->
        <!--					<input type="checkbox" name="tos-checkbox" id="tos-checkbox" tabindex="10">I have read this agreement and agree to the Term and Condition of Use.-->
        <!--				<span class="clearfix" id="tos-checkbox-tooltip" style="display: none;" >You must check this checkbox.</span>-->
        <!--				</label>-->
        <!--			</div>-->
        <!--			<button type="submit" class="btn btn-primary" tabindex="11">Register</button>-->
        <!--		</form>-->
        <form action="signin.php" role="form" method="post" onsubmit="validateForm()">
            <div class="form-group">
                <label class="control-label" for="email">Email address *</label>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" required class="form-control" id="email" name=""
                           placeholder="Enter your email address" tabindex="1">
                    <span style="display: none;"></span>
                    <span id="email-tooltip" style="display: none;"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="username">Username *</label>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" required class="form-control" id="username" name=""
                           placeholder="Enter your username" tabindex="2">
                    <span style="display: none;"></span>
                    <span id="text-tooltip" style="display: none;"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password *</label>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" required class="form-control" id="password" name=""
                           placeholder="Enter your password" tabindex="3">
                    <span style="display: none;"></span>
                    <span id="password-tooltip" style="display: none;"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="confirm-password">Confirm password *</label>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" required class="form-control" id="confirm-password" name=""
                           placeholder="Retype your password" tabindex="4">
                    <span style="display: none;"></span>
                    <span id="password-tooltip" style="display: none;"></span>
                </div>
            </div>
                        <span class="checkbox">
                        <label>
                            <input type="checkbox" name="tos-checkbox" id="tos-checkbox" tabindex="5">
                            I have read this agreement and agree to the Term and Condition of Use.
                        </label>
                        </span>
            <button type="submit" class="btn btn-primary" tabindex="5">
                <span class="glyphicon glyphicon-log-in"></span> Sign up
            </button>
        </form>
    </div>
</section>
<footer>
    <div class="footer">
        Copyright &copy; 2014 by <a href="https://github.com/Maya-Team" target="_blank">Maya Team</a>
    </div>
</footer>
<!--[if lt IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->
<script src="./bootstrap/js/register.js"></script>
</body>
</html>

<?php
//printf("<br>Email: ");
//printf(validateEmail($_POST['email']));
//printf("<br>Username: ");
//printf(validateUsername($_POST['username']));
////printf("<br>Password: ");
////printf($_POST['password']);
//printf("<br>Hashed Password: ");
//printf(password_hash($_POST['password'],PASSWORD_DEFAULT));
//printf("<br>Verify Password: ");
//printf((password_verify($_POST['confirm-password'],password_hash($_POST['password'],PASSWORD_DEFAULT))) ? 1 : 0);
//printf("<br>Checkbox Value: ");
//printf($_POST['tos-checkbox']);
//?>