<?php
// echo getcwd(); // directory check function
$entries = scandir(getcwd());
// print_r($entries);
foreach($entries as $entry){
    if("."!=$entry && ".."!=$entry ){
        if(is_dir($entry)){
            echo "[d] {$entry} \n<br>";
        }else {
            echo "[f] {$entry} \n<br>";

        }
    }
}

function countDir($dir){
    $count = 0;
    $entries = scandir($dir);
    foreach($entries as $entry){
        if("."!=$entry && ".."!=$entry ){
            if(is_dir($entry)){
                $count++;
            }
        }
    }

    return $count;
}

echo countDir(getcwd());