<?php
    $path = $argv[1];

    if(file_exists($path)) {
        if(!is_dir($path)) {
            if (is_readable($path)) {
                $fileData = file_get_contents($path);
                $string = str_replace(' ', '-', $fileData); // Replaces all spaces with hyphens.
                $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                $string = preg_replace('/-+/', '-', $string);

                $fileDataArray = explode(" ", str_replace("-"," ",$fileData));
                $size = sizeof($fileDataArray);
                
                for($i = 0; $i < $size; $i ++) {
                    for($j = 0; $j < $size-1; $j ++) {
                        if($fileDataArray[$j] > $fileDataArray[$j+1]) {
                            $temp = $fileDataArray[$j+1];
                            $fileDataArray[$j+1]=$fileDataArray[$j];
                            $fileDataArray[$j]=$temp;
                        }       
                    }
                }
                
                $displayData = [];
                $i = 0;

                while($i < $size) {
                    $count = 0;
                    $item = $fileDataArray[$i];
                
                    for ($j = 0; $j < $size; $j++) {
                        if($item == $fileDataArray[$j]) {
                            $count++;
                        }
                    }

                    $traker = false;

                    for ($j = 0; $j < sizeof($displayData); $j++) {
                        if($item == $fileDataArray[$j]) {
                            $traker = true;
                        }
                    }
                    
                    if(!$traker) {
                        array_push($displayData, $item);
                        echo $item . " => " . $count . "\n";
                    }
                    
                    $i++;
                }
            } else {
                echo "count_word_sort.php: FILE: Permission denied";
            }
        } else {
            echo "count_word_sort.php: FILE: Is a directory";
        }
    } else {
        echo "count_word_sort.php: FILE: No such file or directory";
    }
?>