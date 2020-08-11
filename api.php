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

$query = mysqli_query($conn, "SELECT * FROM tablename")
   or die (mysqli_error($conn));

$return = [];

foreach ($query as $row) {
    $return[] = [ 
        'id' => $row['id'],
		'date' => $row['date'],
		'name' => $row['name'],
		'address' => $row['address'],
		'city' => $row['city'],
		'state' => $row['state'],
		'zip' => $row['zip'],
		'phone1' => $row['phone1'],
		'phone2' => $row['phone2'],
		'email' => $row['email'],
		'address2' => $row['address2'],
		'taxExempt' => $row['taxExempt'],
		'gauge' => $row['gauge'],
		'width' => $row['width'],
		'custWidthBox' => $row['custWidthBox'],
		'custWidth' => $row['custWidth'],
		'length' => $row['length'],
		'custLengthBox' => $row['custLengthBox'],
		'custLength' => $row['custLength'],
		'doubleLength' => $row['doubleLength'],
		'legHeight' => $row['legHeight'],
		'roof' => $row['roof'],
		'sides' => $row['sides'],
		'oneSide' => $row['oneSide'],
		'sideLength' => $row['sideLength'],
		'verticalSides' => $row['verticalSides'],
		'ends' => $row['ends'],
		'oneEnd' => $row['oneEnd'],
		'verticalEnds' => $row['verticalEnds'],
		'gables' => $row['gables'],
		'verticalGables' => $row['verticalGables'],
		'door32' => $row['door32'],
		'door36' => $row['door36'],
		'window24' => $row['window24'],
		'window30' => $row['window30'],
		'door6x6' => $row['door6x6'],
		'door8x7' => $row['door8x7'],
		'door9x7' => $row['door9x7'],
		'door10x8' => $row['door10x8'],
		'door10x10' => $row['door10x10'],
		'side10x10' => $row['side10x10'],
		'sideLarge' => $row['sideLarge'],
		'braces' => $row['braces'],
		'insulation' => $row['insulation'],
		'standardA' => $row['standardA'],
		'mobileHomea' => $row['mobileHomea'],
		'asphalta' => $row['asphalta'],
		'concretea' => $row['concretea'],
		'supportsa' => $row['supportsa'],
		'extraJ' => $row['extraJ'],
		'extraPieces' => $row['extraPieces'],
		'taxAddD1' => $row['taxAddD1'],
		'taxAddP1' => $row['taxAddP1'],
		'taxAddD2' => $row['taxAddD2'],
		'taxAddP2' => $row['taxAddP2'],
		'taxAddD3' => $row['taxAddD3'],
		'taxAddP3' => $row['taxAddP3'],
		'onSiteCut' => $row['onSiteCut'],
		'buildOverWater' => $row['buildOverWater'],
		'buildOver' => $row['buildOver'],
		'extraHeight' => $row['extraHeight'],
		'nonTaxAddD1' => $row['nonTaxAddD1'],
		'nonTaxAddP1' => $row['nonTaxAddP1'],
		'nonTaxAddD2' => $row['nonTaxAddD2'],
		'nonTaxAddP2' => $row['nonTaxAddP2'],
		'roofColor' => $row['roofColor'],
		'sideColor' => $row['sideColor'],
		'endColor' => $row['endColor'],
        'trimColor' => $row['trimColor']
    ];
}
    http_response_code(200);
    echo json_encode($return, JSON_NUMERIC_CHECK);
}
else {
   echo "failed";
}

?>
