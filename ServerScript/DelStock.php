<?php
    session_start();
    if($_POST){

        $itemname = $_POST["itemname"];
        $deletedstock = $_POST["deletedstock"];

        $reader = fopen("inventory.txt", "r");
        $writer = fopen("inventorytemp.txt", "w");

        $deleted = false;
        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $itemname)){
                list($fitemname, $fitemprice,$fitemstock) = explode(",", $line);

                $newStock = $fitemstock - $deletedstock;

                $line = $fitemname.",".$fitemprice.",".$newStock.PHP_EOL;

                $deleted = true;
            }
            fputs($writer, $line);
        }

        fclose($reader);
        fclose($writer);

        if($deleted){
            rename('inventory.txt','oldinventory.txt');
            rename('inventorytemp.txt','inventory.txt');

            unlink('oldinventory.txt');

            echo "deleted success";

        }else{
            echo "could not find product error";
        }
    }else{
        echo "post error";
    }

?>
