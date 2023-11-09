<?php
    $data = array_slice($argv, 1);

    function compaireStrSize($str1, $str2) {
        if (strlen($str1) == strlen($str2)) {
            return 0;
        }

        return (strlen($str1) < strlen($str2)) ? -1 : 1;
    }

    function compaireStr($str1, $str2) {
        if (strtolower($str1) == strtolower($str2)) {
            return 0;
        }

        return (strtolower($str1) < strtolower($str2)) ? -1 : 1;
    }

    usort($data, "compaireStr");
    usort($data, "compaireStrSize");

    foreach ($data as $key => $value) {
        echo "$value\n";
    }
?>