<?php 
$clima = new SoapClient("http://www.webservicex.net/globalweather.asmx?wsdl", array('trace' =>
TRUE));
echo '<p/>';
echo '<h3>$clima->__getFunctions():</h3>';
$arFuncs=$clima->__getFunctions();
echo("<pre>"); //to format it legibly on your screen
var_dump($arFuncs);
echo("</pre>");
echo '<p/>';
echo '<h3>$clima->__getTypes():</h3>';
$arTypes=$clima->__getTypes();
echo '<p/>';
echo("<pre>");
var_dump($arTypes);
echo("</pre>");
echo '<h3>Construccion de los parametros:</h3>';
echo '<pre>';
echo "
\$params = new stdClass;
\$params->CityName= 'neuquen';
\$params->CountryName= 'arg';
";
echo("</pre>");
$params = new stdClass;
$params->CityName= 'neuquen';
$params->CountryName= 'arg';
echo '<h3>Objeto $Params:</h3>';
echo '<pre>';
var_dump($params);
echo '</pre>';
echo '<h3>Consulta al WebService: $climaNeuquen =
$climaNeuquen = $clima->GetWeather($params)';
echo '<pre>';
$climaNeuquen = $clima->GetWeather($params);
var_dump($climaNeuquen);
echo '</pre>';
$clima->GetWeather($params);
echo '<h3>$request= $clima->__getLastRequest():</h3>';
$request= $clima->__getLastRequest();
echo '<pre>';
var_dump($request);
echo '</pre>';
echo '<h3>$clima->__getLastRequestHeaders():</h3>';
echo '<pre>';
var_dump($clima->__getLastRequestHeaders()); //the headers of your last request
echo '</pre>';
echo '<h3>$clima->__getLastRequest():</h3>';
echo '<pre>';
var_dump($clima->__getLastRequest()); //the headers of your last request
echo '</pre>';
echo '<h3>$$clima->__getLastResponseHeaders():</h3>';
echo '<pre>';
var_dump($clima->__getLastResponseHeaders()); //the headers of your last request
echo '</pre>';
echo '<h3>$clima->__getLastResponse():</h3>';
echo '<pre>';
var_dump($clima->__getLastResponse()); //the headers of your last request
echo '</pre>';
