<?php include 'header.php'; ?>
<?php $page_title="Home" ; $APP_NAME=$maya_site->site_name; ?>

<title>
    <?=$APP_NAME ?>-
        <?=$page_title ?>
</title>
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="text-uppercase navbar-brand" href="#">
                    <span class="glyphicon glyphicon-home"></span>
                    <?=$APP_NAME ?>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sign-in-popup"><span class="glyphicon glyphicon-log-in"></span> Sign in
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sign-up-popup"><span class="glyphicon glyphicon-user"></span> Sign up
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div id="sign-in-popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="login-popup-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" tabindex="1">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <h2 class="text-uppercase">Sign in</h2>
                </div>
                <div class="modal-body">
                    <form action="signin.php" role="form" method="post">
                        <div class="form-group">
                            <label for="username">Username*</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" tabindex="2">
                                <span id="username-tooltip" style="display: none;">Username is not valid or existed.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" tabindex="3">
                                <span id="password-tooltip" style="display: none;">Password is not valid.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember-me" id="remember-me" value="forever" tabindex="4">
                                        Remember Me
                                    </label>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <a href="user.php?action=forgotpass" title="Forgot your password?" class="pull-right forgot-pass" tabindex="6">
                                Forgot your password?
                                </a>
                            </div>
                        </div>
                        <button type="submit" name="si-btn-submit" class="btn btn-primary" tabindex="5">
                            <span class="glyphicon glyphicon-log-in"></span> Sign in
                        </button>
                        <div class="row">
                            <div class="col-md-12" id="validity_label"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div id="sign-up-popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="login-popup-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" tabindex="1">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <h2 class="text-uppercase">Sign up</h2>
                </div>
                <div class="modal-body">
                    <form action="signup.php" role="form" method="post">
                        <div class="form-group">
                            <label class="control-label" for="email">Email address *</label>

                            <div class="input-group">
                                <span class="input-group-addon" data-toggle="tooltip" data-placement="left" title="Please enter a valid email address, it will be used to contact you."><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" required class="form-control" id="email" name="email" placeholder="Enter your email address" tabindex="1">
                                <span style="display: none;"></span>
                                <span id="email-tooltip" style="display: none;"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="username">Username *</label>

                            <div class="input-group">
                                <span class="input-group-addon" data-toggle="tooltip" data-placement="left" title="Between 3 and 50 alphanumeric characters (from A to Z, with or without accents, from 0 to 9) and _, - or @."><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" required class="form-control" id="username" name="username" placeholder="Enter your username" tabindex="2">
                                <span style="display: none;"></span>
                                <span id="text-tooltip" style="display: none;"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password *</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" required class="form-control" id="password" name="" placeholder="Enter your password" tabindex="3">
                                <span style="display: none;"></span>
                                <span id="password-tooltip" style="display: none;"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="confirm-password">Confirm password *</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" required class="form-control" id="confirm-password" name="" placeholder="Retype your password" tabindex="4">
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
                        <button type="submit" name="su-btn-submit" class="btn btn-primary" tabindex="5">
                            <span class="glyphicon glyphicon-user"></span> Sign up
                        </button>
                        <div class="row">
                          <div class="col-md-5" id="validity_label"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <?php include 'footer.php'; ?>
