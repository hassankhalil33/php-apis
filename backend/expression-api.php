<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $d = ($a**3) + ($b*$c) - ($a/$b);
    echo $d;
?>