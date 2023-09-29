<?php
$array = [2, 5, 3, 2, 1, 0];  
$resultArray = []; 
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j <$array[$i]-1; $j++) {
        $i++;            
        $resultArray[] = "_"; 
    }
    if ($array[$i] == 0) {
        break;
    }else{
        $resultArray[] = $array[$i];
    }
}

echo implode(",", $resultArray);
?>