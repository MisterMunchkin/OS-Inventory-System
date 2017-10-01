<?php
    if($_POST){

        $userFile = fopen("users.txt", "a") or die("Unable to open file!");
        $email = $_POST["signUpEmail"];
        $password = $_POST["signUpPassword"];

        $userData = $email.",".$password;

        fwrite($userFile, $userData . PHP_EOL);
        //fwrite($userFile, $password . PHP_EOL);

        fclose($userFile);

        echo "success";
    }else{
        echo "post failure";
    }
?>
