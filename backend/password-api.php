<?php
    $password = $_POST["a"];

    if (preg_match("/[A-Z]/", $password) && preg_match("/[a-z]/", $password)
    && preg_match("/\d/", $password) && preg_match("/\W/", $password)
    && (strlen($password) > 12)) {
            echo "Strong Password";
        } else {
            echo "Weak Password";
        };
?>