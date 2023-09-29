<?php
    $int=1;
    $boolean=true;
    $float=3.05;
    $stringsimple='HolaSimple';
    $stringdoble="HolaDoble";
    echo $stringsimple.$int;
    print $stringsimple.$stringdoble;
    define("varconst","Esto no es un entero",true);
    const constantedoble=2;
    echo constantedoble;
    var_dump($int.$boolean.$float.$stringdoble.$stringsimple.constantedoble);
    $otrastring =(string) $int;
    $otramas =& $otrastring;

?>