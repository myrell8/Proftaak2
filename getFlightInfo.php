<?php

// Get the flightname out of the url, this is send in the original ajax call to this file
$flightName = $_GET['flight'];

// The url of the api with the specific paramaters
$link = "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&flightname=" . $flightName . "&includedelays=false&page=0&sort=%2Bscheduletime";

// Initialise curl (the same way you would start a session)
$curl = curl_init();

curl_setopt_array($curl, array(
  // Url of the api
  CURLOPT_URL => $link,
  // Configure the Curl call to return the raw output when returnstransfer is used
  CURLOPT_RETURNTRANSFER => true,
  // If the call isn't executed after 30 seconds it will fail and return a error
  CURLOPT_TIMEOUT => 30,
  // The version of HTTP Curl should use
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  // What type of request we are making GET or POST
  CURLOPT_CUSTOMREQUEST => "GET",
  // Custom headers that are necessary for the api to send data
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "Accept: application/json",
    "ResourceVersion: v3",
  ),
));

// Execute the curl request and put the response in a variable
$response = curl_exec($curl);
// If the curl request fails the response will be put in a variable which can be used for error-handling
$err = curl_error($curl);

// Close the curl the same way you would destroy or terminate a session
curl_close($curl);
// Tell php that this is a json array
header('Content-Type: application/json');
// Print the array on the php file so it can be read
echo json_encode($response);