<?php
    function sort_array(array $tab) {
        $size = sizeof($tab);
                
        for($i = 0; $i < $size; $i ++) {
            for($j = 0; $j < $size-1; $j ++) {
                if(is_integer($tab[$j]) && is_integer($tab[$j+1])) {
                    if($tab[$j] > $tab[$j+1]) {
                        $temp = $tab[$j+1];
                        $tab[$j+1]=$tab[$j];
                        $tab[$j]=$temp;
                    } 
                } else {
                    echo "The array must have only integar values.\n";
                    exit;
                }
            }
        }

        return $tab;
    }
?>