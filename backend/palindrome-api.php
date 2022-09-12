<?php
    $myString = $_GET["word"];
    $reverseString = strrev($myString);
    
    if ($myString == $reverseString) {
        echo "Is a Palindrome";
    } else {
        echo "Not a Palindrome";
    };
?>