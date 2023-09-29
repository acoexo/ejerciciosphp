<?php 
    function dados(){
        $caras =['<img src="./img/dado1.png" width=100rem>','<img src="./img/dado2.png" width=100rem>','<img src="./img/dado3.png" width=100rem>','<img src="./img/dado4.png" width=100rem>','<img src="./img/dado5.png" width=100rem>','<img src="./img/dado6.png" width=100rem>'];
        for($i=0;$i<10;$i++){
            $random= rand(0,5);
            echo $caras[$random];
        }
    }
dados();
?>