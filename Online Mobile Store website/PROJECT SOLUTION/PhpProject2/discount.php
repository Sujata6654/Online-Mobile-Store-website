<?php
    $code = $_POST['code'];
    $CODE = "OFF";

    if($code!=$CODE){
        $m=0;
        header("location:cart.php?m1=".$m);
    }else{
        $m=1;
        header("location:cart.php?m1=".$m);
    }
?>
