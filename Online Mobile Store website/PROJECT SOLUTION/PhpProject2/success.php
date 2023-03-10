<?php
include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include './includes/links.php'; ?>
        <title>Success | Mobile Shoppee</title>
    </head>
    <body>

        <?php
        require './includes/header.php';

        require 'confirm.php';
        ?>

        <div class="content">
            <div class="container">
                <div class="col-xs-12">
                    <div class="jumbotron">
                        <h3 class="text-center">Thank You for Ordering from Mobile Shoppee!</h3>
                        <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                        <hr>
                        <h5 class="text-center">To Continue Shopping , Click <a href="home.php">here</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require './includes/footer.php';
        ?>  

    </body>
</html>

