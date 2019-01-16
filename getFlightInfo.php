<?php

$flightName = $_GET['flight'];

$link = "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&flightname=" . $flightName . "&includedelays=false&page=0&sort=%2Bscheduletime";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $link,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "Accept: application/json",
    "ResourceVersion: v3",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
header('Content-Type: application/json');
echo json_encode($response);  
