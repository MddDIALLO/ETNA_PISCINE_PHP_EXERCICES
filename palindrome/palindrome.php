<?php
    function palindrome(String $str) {
        $normalStr = strtolower(str_replace(" ","",$str));
        $revrsedStr = strrev($normalStr);

        $message = $normalStr == $revrsedStr ? "True\n" : "False\n";

        echo $message;
    }
?>