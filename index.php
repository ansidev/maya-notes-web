<?php
include 'header.php';
?>
<nav class="navbar navbar-defaut" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="text-uppercase navbar-brand" href="#">
                <span class="glyphicon glyphicon-home"></span> <?= APP_NAME ?>
            </a>
        </div>
        <ul class="text-uppercase nav navbar-nav navbar-right">
            <!--                <li><a href="./login.php">Login</a></li>-->
            <!--                <li><a href="./register.php">Register</a></li>-->
            <!--                <li class="dropdown">-->
            <!--                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
            <!--				$user <span class="caret"></span>-->
            <!--			</a>-->
            <!--                    <ul class="dropdown-menu" role="menu">-->
            <!--                        <li><a href="#">Profiles</a>-->
            <!--                        </li>-->
            <!--                        <li class="divider"></li>-->
            <!--                        <li><a href="#">Log out</a>-->
            <!--                        </li>-->
            <!--                    </ul>-->
            <!--                </li>-->
            <li>
                <div class="navbar-btn">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sign-in-popup">Sign
                        in
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sign-up-popup"> Sign
                        up
                    </button>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div id="sign-in-popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="login-popup-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" tabindex="1">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
                <h2 class="text-uppercase">Sign in</h2>
            </div>
            <div class="modal-body">
                <form action="signin.php" role="form" method="post" onsubmit="validateForm()">
                    <div class="form-group">
                        <label for="username">Username*</label>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="Enter your username" tabindex="2">
                            <span id="username-tooltip" style="display: none;">Username is not valid or existed.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password*</label>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Enter your password" tabindex="3">
                            <span id="password-tooltip" style="display: none;">Password is not valid.</span>
                        </div>
                    </div>
                    <span class="checkbox">
                        <label>
                            <input type="checkbox" name="remember-me" id="remember-me" value="forever" tabindex="4">
                            Remember Me
                        </label>
                        <a href="user.php?action=forgotpass" title="Forgot your password?" class="pull-right"
                           tabindex="6">
                            Forgot your password?
                        </a>
                    </span>
                    <button type="submit" class="btn btn-primary" tabindex="5">
                        <span class="glyphicon glyphicon-log-in"></span> Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="sign-up-popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="login-popup-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" tabindex="1">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
                <h2 class="text-uppercase">Sign up</h2>
            </div>
            <div class="modal-body">
                <form action="signup.php" role="form" method="post" onsubmit="validateForm()">
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
        </div>
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include 'footer.php'; ?>
