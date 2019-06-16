<?php require("lib_soap/nusoap.php");

$client = new nusoap_client("http://localhost/tugas_ksk/service.php?wsdl");

$response = $client->call("getTb", array()); //calling the registered method of the web service from client

if ($client->fault) {
  echo "Fault:" . $client->faultcode . " " . $client->faultstring;
} else {
  print_r($response);
}

exit;
