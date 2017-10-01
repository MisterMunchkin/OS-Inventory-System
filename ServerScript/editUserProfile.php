<?php
    if($_POST){
        session_start();
        //$userFile = fopen("users.txt", "r") or die("Unable to open file!");
        $userFile = file("users.txt");
        $accessData = array();

        $email = $_POST["userEmail"];
        $password = $_POST["userPassword"];

        foreach($userFile as $line){
            list($fileemail,$filepassword,$filefirstname,$filelastname) = explode(',', $line);
            //$accessData[trim($fileemail)] = trim($filepassword);

            $accessData[trim($fileemail)] = array(
                "firstname" => trim($filefirstname),
                "lastname" => trim($filelastname),
                "password" => trim($filepassword)
            );
        }

        if(array_key_exists($email, $accessData) && $password == $accessData[$email]["password"]){
            $_SESSION["firstname"] = $accessData[$email]["firstname"];
            $_SESSION["lastname"] = $accessData[$email]["lastname"];
            $_SESSION["email"] = $email;
            echo "login success";
        }else{
            echo "login fail";
        }


    }else{
        echo "post error";
    }

?>
