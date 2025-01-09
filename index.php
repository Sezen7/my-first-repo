<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fakestoreapi.com/products',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
var_dump(json_decode($response));


?> 

</body>
</html>

