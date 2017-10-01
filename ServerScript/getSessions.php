<?php

    session_start();

    $data = array(
        "firstname" => $_SESSION["firstname"],
        "lastname" => $_SESSION["lastname"],
        "email" => $_SESSION["email"]
    );

    $json = json_encode($data);
    echo $json;

?>
