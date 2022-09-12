<?php
    $request = $_POST["time"]; //dummy POST request
    $xmasDate = mktime(0, 0, 0, 12, 25, 2022);
    $currentDate = time();
    $diff = $xmasDate - $currentDate;

    echo floor($diff/60/60/24);
?>