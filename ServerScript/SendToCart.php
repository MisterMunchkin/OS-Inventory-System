<?php
  if($_POST){

    $CartFile = fopen("cart.txt","a") or die("Unable to open file!");
    $InventReader = fopen("inventory.txt", "r");
    $InventWriter = fopen("inventorytemp.txt", "w");

    $itemname = $_POST["txt_itemname"];
    $itemqty = $_POST["txt_itemqty"];

    $updates = false;
    while(!feof($InventReader)){
      $lineInventory = fgets($InventReader);

      if(stristr($lineInventory,$itemname)){
        list($fitemname,$fitemprice,$fitemstock) = explode(",", $lineInventory);

        $newStock = $fitemstock - $itemqty;

        $lineCart = $fitemname.",".$fitemprice.",".$itemqty.PHP_EOL;
        $lineInventory = $fitemname.",".$fitemprice.",".$newStock.PHP_EOL;

        $updates = true;

        //add an include here for cart update
        fputs($CartFile, $lineCart);
      }
      fputs($InventWriter, $lineInventory);
    }

    fclose($CartFile);
    fclose($InventReader);
    fclose($InventWriter);

    if($updates){
      rename('inventory.txt', 'oldinventory.txt');
      rename('inventorytemp.txt', 'inventory.txt');

      unlink('oldinventory.txt');

      header("Location: ../POSPage.php");
    }else{
      echo "could not find product error";
    }
  }else{
    echo "post error";
  }

 ?>
