<?php
    session_start();
    if($_POST){

        $itemname = $_POST["itemname"];
        $addedstock = $_POST["addedstock"];

        $reader = fopen("inventory.txt", "r");
        $writer = fopen("inventorytemp.txt", "w");


        $added = false;
        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $itemname)){
                list($fitemname, $fitemprice,$fitemstock) = explode(",", $line);

                $newStock = $addedstock + $fitemstock;

                $line = $fitemname.",".$fitemprice.",".$newStock.PHP_EOL;

                $added = true;
            }
            fputs($writer, $line);
        }

        fclose($reader);
        fclose($writer);

        if($added){
            rename('inventory.txt','oldinventory.txt');
            rename('inventorytemp.txt','inventory.txt');

            unlink('oldinventory.txt');

            echo "added success";

        }else{
            echo "could not find product error";
        }
    }else{
        echo "post error";
    }

?>
