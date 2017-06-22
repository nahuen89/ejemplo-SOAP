<?php
$urlservidor='http://localhost/fi/WebService/misws/servidorphppuro.php';

echo 'servidor:'.$urlservidor.'<br>';
/*se crea el objeto cliente*/
$client = new SoapClient(null, array(
      'location' => $urlservidor,
      'uri'      => $urlservidor,
      'trace'    => 1 ));

/*se llama al método hola del servidor*/
$mensaje = $client->__soapCall("hola",array("Pepe"));

echo 'respuesta '.$mensaje.'<br>';


$idProducto='Pepsi';
$valorProducto=$client->__soapCall('buscarPrecio', array($idProducto));
echo 'El precio del producto es de '.$valorProducto;

