<?php
    function is_negative_ternary($n) {

        $message = (is_long($n) || is_float($n))
                                                ? ($n < 0
                                                            ? "True\n"
                                                            : "False\n")
                                                : "Le parametre n'est pas un Int\n";

        echo $message;
    }
?>