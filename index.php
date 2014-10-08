<?php
	include 'header.php';
?>
    <nav class="navbar navbar-defaut" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="text-uppercase navbar-brand" href="#"><?=APP_NAME?></a>
            </div>
            <ul class="text-uppercase nav navbar-nav navbar-right">
                <li><a href="./login.php">Login</a></li>
                <li><a href="./register.php">Register</a></li>
<!--                 <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
				$user <span class="caret"></span>
			</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Profiles</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Log out</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </nav>
<?php include 'footer.php';?>
