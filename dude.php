<?php

$curl = curl_init();

$class = '$class';
curl_setopt_array($curl, array(
  CURLOPT_PORT => "3000",
  CURLOPT_URL => "http://ec2-18-130-176-221.eu-west-2.compute.amazonaws.com:3000/api/BuildingInception",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n    \"$class\": \"org.acme.building.BuildingInception\",\r\n    \"BuildingUId\": \"1msasss2.\",\r\n    \"building\": {\r\n      \"$class\": \"org.acme.building.Building\",\r\n      \"instrumentId\": [\r\n        \"Aliqua in consequat.\"\r\n      ],\r\n      \"exchangeId\": [\r\n        \"Duis eiusmod.\"\r\n      ],\r\n      \"AddressCO\": [],\r\n      \"maturity\": \"2019-06-09T01:57:11.506Z\",\r\n      \"client\": \"resource:org.acme.building.Client#9858\",\r\n      \"Assistant\": \"resource:org.acme.building.Assistant#4907\"\r\n    }\r\n   }",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>