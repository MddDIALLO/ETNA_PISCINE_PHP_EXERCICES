<?php
    function is_negative($n) {
        if(is_long($n) || is_float($n)) {
            if($n < 0) {
                echo "True\n";
            } else {
                echo "False\n";
            }
        } else {
            echo "Le parametre n'est pas un Int\n";
        }
    }
?>