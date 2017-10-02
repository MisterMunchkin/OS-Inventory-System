<?php
    session_start();
    //if($_POST){


        $reader = fopen("users.txt", "r");
        $writer = fopen("users.tmp", "w");

        $replaced = false;

        $firstname = $_POST["firstnameInput"];
        $lastname = $_POST["lastnameInput"];
        $email = $_POST["emailInput"];
        $password = $_POST["passwordInput"];

        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $_SESSION["email"])){
                $line = $email.",".$password.",".$firstname.",".$lastname.PHP_EOL;
                $replaced = true;

                $_SESSION["firstname"] = $firstname;
                $_SESSION["lastname"] = $lastname;
                $_SESSION["email"] = $email;
            }
            fputs($writer,$line);
        }

        fclose($reader);
        fclose($writer);

        if($replaced){
            rename('users.tmp', 'users.txt');
            echo "edit success";
        }else{
            echo "edit fail";
        }

        unlink('users.tmp');
    /*}else{
        echo "post error";
    }*/

?>
