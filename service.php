<?php
//incluir Libreria NuSoap
include_once 'lib/nusoap.php';

//Crear server
$service = new soap_server();

//Namespaces
$ns ="https://www.placetopay.com/soap/pse/";

//Configurar WSDL
$service->configureWSDL("PlacetoPay_PSEService",$ns);
$service->wsdl->schemaTargetNamespace=$ns;

//Método Crear Transación
$service->register("createTransaction", array('auth' => 'tns:Authentication"', 'transaction' => 'tns:PSETransactionRequest'), array('return' => 'xsd:boolean'), $ns );

function createTransaction($auth,$transaction){
    if(auth_exist && transaction_exist){
       return true;
}else{
    return false;
}
}

//Método para listar Bancos
$service->register("bank", array('bankCode' => 'xsd:string','bankName' => 'xsd:string'), array('return' => 'ArrayOfBank'), $ns );
function bank($bankCode,$bankName){
    if(Authentication==true){
       getBankList();
    return ArrayOfBank();
}
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicie->service($HTTP_RAW_POST_DATA);
?>