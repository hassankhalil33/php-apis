<?php
    $password = $_POST["a"];

    if (preg_match("/[A-Z]/", $password) && preg_match("/[a-z]/", $password)) {
        if (preg_match("/\d/", $password) && preg_match("/\W/", $password)) {
            if (strlen($password) > 12) {
                echo "Strong Password";
            };
        } else {
            echo "Weak Password";
        };
    } else {
        echo "Weak Password";
    };
?>