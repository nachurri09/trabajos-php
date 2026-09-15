<?php

$fecha_1="2021/11/29";
$fecha_2="2021/11/30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("/",$fecha_1);

echo $array_fecha[0];

$array_fecha=explode(" ",$numeros,4);

echo $array_fecha[0];