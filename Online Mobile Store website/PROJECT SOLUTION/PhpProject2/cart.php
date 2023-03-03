<?php
include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include './includes/links.php'; ?>
        <title>Cart | Mobile Shoppee</title>
    </head>
    <body style="margin-top: 10%;">

        <?php
        require './includes/header.php';
        ?>


        <div class="content">
            <div class="container">        
                <div class="row">
                    <div class="col-md-3">
                        <img src="./img/mobile-in-cart.jpg" class="img-responsive " alt="Image" >
                    </div>
                    </br> 
                    <div class="col-md-8 col-md-offset-1"> 
                        <form action="discount.php" class="form-inline" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code Here">                
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                        </br></br>
                        <table class="table table-striped table-responsive">
                            <?php
                            if (isset($_GET['m1'])) {
                                $disc = $_GET['m1'];
                            }
                            $sum = 0;
                            $user_id = $_SESSION['user_id'];
                            $query = "SELECT products.price AS price, products.id, products.name AS"
                                    . " name FROM users_products JOIN products ON users_products.product_id = products.id "
                                    . "WHERE users_products.user_id='$user_id' and status='Added To Cart'";
                            $result = mysqli_query($con, $query)or die(mysqli_error($con));
                            if (mysqli_num_rows($result) >= 1) {
                                ?>
                                <thead>
                                    <tr>
                                        <th>Item Number</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        $sum += $row["price"];
                                        $id = $row["id"];
                                        echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                                    }
                                    if (isset($disc)) {
                                        $sum = $sum - $sum * (0.2);
                                    }
                                    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                                    ?>
                                </tbody>
                                <?php
                            } else {
                                echo "Add items to the cart first!";
                            }
                            ?>
                            <?php
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            </br>
            <div style="margin-top: 10%;">
                <?php
                require './includes/footer.php';
                ?>  
            </div>
    </body>
</html>

