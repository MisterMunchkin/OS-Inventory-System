<?php
    if($_POST){
        file_put_contents("cart.txt", "");

        header("Location: ../POSPage.php");
    }else{
        echo "post error";
    }
?>
