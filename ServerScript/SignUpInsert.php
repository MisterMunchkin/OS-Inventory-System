<?php
    if($_POST){

        $userFile = fopen("users.txt", "a") or die("Unable to open file!");

        $email = $_POST["signUpEmail"];
        $password = $_POST["signUpPassword"];
        $firstname = $_POST["signUpFirstName"];
        $lastname = $_POST["signUpLastName"];

        $userData = $email.",".$password.",".$firstname.",".$lastname;

        fwrite($userFile, $userData . PHP_EOL);
        //fwrite($userFile, $password . PHP_EOL);

        fclose($userFile);

        echo "success";
    }else{
        echo "post failure";
    }
?>
