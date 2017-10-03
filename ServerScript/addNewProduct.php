<?php
    if($_POST){

        $inventoryFile = fopen("inventory.txt", "a") or die("Unable to open file!");

        $itemname = $_POST["txt_itemname"];
        $itemprice = $_POST["txt_itemprice"];
        $itemstock = $_POST["txt_itemstock"];

        $itemData = $itemname.",".$itemprice.",".$itemstock;

        fwrite($inventoryFile, $itemData . PHP_EOL);
        //fwrite($userFile, $password . PHP_EOL);

        fclose($inventoryFile);

        echo "success";
        header("Location: ../InventoryPage.php");
    }else{
        echo "post failure";
    }
?>
