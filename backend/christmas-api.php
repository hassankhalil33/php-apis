<?php
    $request = $_GET["time"]; //dummy GET request
    $xmasDate = mktime(0, 0, 0, 12, 25, 2022);
    $currentDate = time();
    $diff = $xmasDate - $currentDate;

    echo floor($diff/60/60/24). " days left";
?>