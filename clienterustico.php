<?php
//me conecto con el servidor rústico y obtengo el html
$handle = fopen ($_SERVER['HTTP_REFERER'] . "servidorrustico.php",'r');
$string=  fgets($handle);

echo 'Dato en bruto <pre>'.  htmlentities($string).'</pre><br/>';


//busco el dato dentro del html
$ini=stripos( $string,'<dato>')+6;
$fin=stripos( $string,'</dato>');
$length=$fin-$ini;
$dato=substr($string, $ini, $length);

echo 'Dato buscado -----'.$dato.'-----<br/>';

//realizo una operación sobre el dato
echo 'Operacion sobre dato 2*dato= '. 2*$dato;

