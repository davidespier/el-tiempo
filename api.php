<?php

if(isset($_GET['ciudad'])){
  $ciudad = $_GET['ciudad'];
}else{
  $ciudad = 0;
}

if($ciudad == 0){
    $urlcity = '1200'; //Barcelona
  }else if($ciudad == 1){
    $urlcity = '3776'; //lleida
  }else if($ciudad == 2){
    $urlcity = '313'; //madrid
  }else if($ciudad == 3){
    $urlcity = '5662'; //sevilla
  }else if($ciudad == 4){
    $urlcity = '8095'; //zaragoza
  }


$day = [];
$dayWeather = [];
$dayWeatherDesc = [];
$dayTempmin = [];
$dayTempmax = [];
$dayWind = [];
$dayWindSymbol = [];
$localinfo = [];

$hour = [];
$hourTemp = [];
$hourSymnbol = [];
$hourWind = [];
$hourWindSymbol = [];
$hourSymnbolDesc = [];

$url = "http://api.tiempo.com/index.php?api_lang=es&localidad=".$urlcity."&affiliate_id=zh7hawv169fw&v=2.0&h=1";

$xml=simplexml_load_file($url) or die("Error: Cannot create object");

$lugar = $xml->location->attributes();
$city = explode('[', $lugar);

//INFO 5 DAYS
for($i = 0; $i < 5; $i++){
  $day[$i] = htmlentities($xml->location->day[$i]->attributes()->name,ENT_COMPAT,'UTF-8');
  $dayWeather[$i] = htmlentities($xml->location->day[$i]->symbol->attributes()->value,ENT_COMPAT,'UTF-8');
  $dayWeatherDesc[$i] = htmlentities($xml->location->day[$i]->symbol->attributes()->desc,ENT_COMPAT,'UTF-8');
  $dayTempmin[$i] = htmlentities($xml->location->day[$i]->tempmin->attributes()->value,ENT_COMPAT,'UTF-8');
  $dayTempmax[$i] = htmlentities($xml->location->day[$i]->tempmax->attributes()->value,ENT_COMPAT,'UTF-8');
  $dayWind[$i] = htmlentities($xml->location->day[$i]->wind->attributes()->value,ENT_COMPAT,'UTF-8');
  $dayWindSymbol[$i] = htmlentities($xml->location->day[$i]->wind->attributes()->symbol,ENT_COMPAT,'UTF-8');
  $localinfo[$i] = htmlentities($xml->location->day[$i]->local_info->attributes()->local_time,ENT_COMPAT,'UTF-8');
}

//INFO 24HOURS - SAME DAY
for($k = 0; $k < 24; $k++){
  $hour[$k] = htmlentities($xml->location->day->hour[$k]->attributes()->value,ENT_COMPAT,'UTF-8');
  $hourTemp[$k] = htmlentities($xml->location->day->hour[$k]->temp->attributes()->value,ENT_COMPAT,'UTF-8');
  $hourSymnbol[$k] = htmlentities($xml->location->day->hour[$k]->symbol->attributes()->value,ENT_COMPAT,'UTF-8');
  $hourSymnbolDesc[$k] = htmlentities($xml->location->day->hour[$k]->symbol->attributes()->desc,ENT_COMPAT,'UTF-8');
  $hourWind[$k] = htmlentities($xml->location->day->hour[$k]->wind->attributes()->value,ENT_COMPAT,'UTF-8');
  $hourWindSymbol[$k] = htmlentities($xml->location->day->hour[$k]->wind->attributes()->symbol,ENT_COMPAT,'UTF-8');
}



?>