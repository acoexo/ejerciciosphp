<?php
    $array=[1,3,4,5,12,3,4,5,32,12,4,32,4,5,23,4,6,6,67,44,];
    $lideres=[];
    for($i=0;$i<count($array);$i++){
        $suma=0;
        for ($j=$i+1; $j < count($array); $j++) {
            $suma+=$array[$j];
        }    
        if($array[$i]>$suma){
            $lideres[]=$array[$i];
        }
    }
    echo implode(',', $lideres);
?>