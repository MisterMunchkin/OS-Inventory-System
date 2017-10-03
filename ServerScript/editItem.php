<?php
    session_start();
    if($_POST){


        $reader = fopen("inventory.txt", "r");
        $writer = fopen("inventorytemp.txt", "w");

        $replaced = false;

        $itemname = $_POST["itemname"];
        $itemprice = $_POST["itemprice"];
        $itemstock = $_POST["itemstock"];
        $olditemname = $_POST["olditemname"];

        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $olditemname)){
                $line = $itemname.",".$itemprice.",".$itemstock.PHP_EOL;
                $replaced = true;


            }
            fputs($writer,$line);
        }

        fclose($reader);
        fclose($writer);

        if($replaced){
            rename('inventory.txt','oldinventory.txt');
            rename('inventorytemp.txt', 'inventory.txt');

            unlink('oldinventory.txt');


            echo "edit success";
        }else{
            echo "edit fail";
        }


    }else{
        echo "post error";
    }

?>
