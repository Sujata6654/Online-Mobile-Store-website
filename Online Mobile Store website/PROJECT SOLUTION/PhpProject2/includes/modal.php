
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include './includes/links.php'; ?>
        <title>Welcome | Mobile Shoppee</title>
    </head>
    <body>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-center">
                            Login
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <form class="form" action="login_script.php" method="POST">
                            <div class="form-group">
                                <p>Don't have an Account? <a href="signup.php">Register</a></p>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <?php
                                if (isset($_GET['m1'])) {
                                    echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-primary" >Login</button>

                            </div>
                            <div class="form-group">
                                <p><a href="forgot.php">Forgot Password?</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>