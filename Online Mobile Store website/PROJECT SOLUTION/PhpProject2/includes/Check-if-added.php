<?php
    function check_if_added_to_cart($item_id){
        
        require './includes/common.php';
        
        $user_id = $_SESSION['user_id'];
        
        $query = "SELECT * FROM users_products WHERE product_id='$item_id' AND "
                . "user_id ='$user_id' and status='Added To Cart'";

        $result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($result) >= 1){
            return 1;
        }else{
            return 0;
        }
    }
?>

