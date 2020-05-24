<?php

$cities = array("Taraz"=>"08", "Astana"=>"01", "New-York"=>"58", "Almaty" => "02");
$cars = array("Volvo", "BMW", "Toyota", "Tesla");



$myJson = json_encode($cities);
$myJson2 = json_encode($cars);
echo "Dimensional  Array"."<br>";
echo "json-1: ";
echo $myJson2. "<br>";
echo "<br>";


echo "Associative Array <br>";
echo "json-2: ";
echo $myJson;
