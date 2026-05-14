<?php
    $usuario= "admin";
    $password = "1234";

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if ($user == $usuario && $pass == $password) {
        header("location: https://edu.potrerodigital.org/");
    } else {
        header("location: error.html");
    }
    
?>
