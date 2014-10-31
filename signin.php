<?php
include 'sql_connect.php';
$query = "SELECT * FROM `lang` WHERE `lang_string_id` = 2";
$result = mysqli_query($query, $con);
?>

<?php
include 'config/site-config.php';
include 'inc/function.php';
$page_title = "Sign in";
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
        <form action="signin.php" role="form" method="post" onsubmit="validateForm()">
            <div class="form-group">
                <label for="username">Username*</label>
                <input type="text" class="form-control" id="username" name="username"
                       placeholder="Enter your username" tabindex="2">
                <span id="username-tooltip" style="display: none;">Username is not valid or existed.</span>
            </div>
            <div class="form-group">
                <label for="password">Password*</label>
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="Enter your password" tabindex="3">
                <span id="password-tooltip" style="display: none;">Password is not valid.</span>
            </div>
                    <span class="checkbox">
                        <label>
                            <input type="checkbox" name="remember-me" id="remember-me" value="forever" tabindex="4">
                            Remember Me
                        </label>
                        <a href="signin.php?action=forgotpassword" title="Forgot your password?" class="pull-right"
                           tabindex="6">
                            Forgot your password?
                        </a>
                    </span>
            <button type="submit" class="btn btn-primary" tabindex="5">
                <span class="glyphicon glyphicon-log-in"></span> Sign in
            </button>
        </form>
        <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $escapedName = mysql_real_escape_string($_POST['username']);
            $escapedPW = mysql_real_escape_string($_POST['password-tooltip']);
            $user_query = "SELECT * FROM `lang` WHERE `lang_string` = 'LOGIN_TITLE'";
        }
        ?>
    </div>
</section>
<?php require 'footer.php'; ?>