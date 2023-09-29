<?php
    $array=[];
    for($i=0;$i<5;$i++){
        $random=rand(20,30);
        $array[]=$random;
    }
    echo implode(", ", $array);
?>