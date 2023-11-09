<?php
    function increment_array(array $tab, $incrementer) {
        if(is_integer($incrementer)) {
            for ($i = 0; $i < sizeof($tab); $i++) {
                if(is_integer($tab[$i])) {
                    $tab[$i] += $incrementer;
                } else {
                    echo "L'index INDEX DE LA CASE n'est pas un Int\n";
                    exit;
                }
            }
        } else {
            echo "L'increment n'est pas un Int\n";
            exit;
        }

        return $tab;
    }
?>