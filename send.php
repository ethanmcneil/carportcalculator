<?php

$apikey = "unique";
$headers = apache_request_headers();
$valuePlease = array_values($headers);
$key =  array_search($apikey, $valuePlease);
$token = $valuePlease[$key];
$validation = ($apikey === $token);
if ($validation) {

  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}

$json = file_get_contents('php://input');
$j = json_decode($json);
$values = get_object_vars($j);
$imploded = implode("', '", $values);

$query = mysqli_query($conn, "INSERT INTO tablename VALUES (' $imploded ')")
   or die (mysqli_error($conn));
    http_response_code(200);
}
else {
    echo "connection failed";
}
?>
