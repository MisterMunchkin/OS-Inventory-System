<?php
    if($_POST){

        //$userFile = fopen("users.txt", "r") or die("Unable to open file!");
        $userFile = file("users.txt");
        $accessData = array();

        $email = $_POST["userEmail"];
        $password = $_POST["userPassword"];

        foreach($userFile as $line){
            list($fileemail,$filepassword) = explode(',', $line);
            $accessData[trim($fileemail)] = trim($filepassword);
        }

        if(array_key_exists($email, $accessData) && $password == $accessData[$email]){
            echo "login success";
        }else{
            echo "login fail";
        }


    }else{
        echo "post error";
    }

?>
