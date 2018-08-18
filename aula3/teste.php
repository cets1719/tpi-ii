<?php
    $x = 5;
    $y = 10;

    function doSomething (){
        $total = $GLOBALS["x"] + $GLOBALS["y"];
        print "<p> doSomething: $total</p>";
    }
    ?>