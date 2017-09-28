<?php
require_once 'lib/nusoap.php';

$cliente= new nusoap_clien("http://localhost:8080/ws/service.php",false);
$auth= "6dd490faf9cb87a9862245da41170ff2";
$transaction= "transaccional 024h1IlD";
$parametros= array ('auth'=>auth,'transaction'=>transaction);
print_r(ArrayOfBank)
?>