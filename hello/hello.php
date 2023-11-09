<?php
    function hello($optional_x = NULL) {
        $message = $optional_x ? "Hello " . $optional_x . " !\n" : "Hello world !\n";

        echo $message;
    }
?>