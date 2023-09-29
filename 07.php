<?php
    $array=[];
    for($i=2;$i<=100;$i+=2){
        $array[]=$i;
    }
    echo implode(", ", $array);
?>