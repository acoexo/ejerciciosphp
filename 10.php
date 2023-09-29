<?php

$cadena = "1,2,3,2,4,1,5";
$valores = explode(',', $cadena);
$valoresUnicos = array_unique($valores);
$cadenaSinDuplicados = implode(',', $valoresUnicos);

echo "<h1>Cadena original: $cadena</h1><br>" ;
echo "<h1>Cadena sin duplicados: $cadenaSinDuplicados</h1><br>";
?>