<?php
    $myString = $_GET["word"];
    $reverseString = strrev($myString);
    
    if ($myString == $reverseString) {
        $result = "Is a Palindrome";
    } else {
        $result = "Not a Palindrome";
    };

    $sendObject = json_encode($result);
    echo $sendObject;
?>