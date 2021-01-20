<?php

ob_start();

if ( session_id() === "" ) { session_start(); }

include 'startDB.php';

//comfirm message here.
$_SESSION['msgOKGreen'] = "RECORD SUBMITED SUCCESSFULLY.";


//$_SESSION['rowsToPrint'] = $_SESSION['rowsToPrint'] + 1;



//retreive values from main page.
$dep_code = $_POST["dep_code"];
$dep_city = $_POST["dep_city"];
$dep_country = $_POST["dep_country"];

$des_code = $_POST["des_code"];
$des_city = $_POST["des_city"];
$des_country = $_POST["des_country"];

$airline_code = $_POST["airline_code"];
$airline_name = $_POST["airline_name"];
$airline_country = $_POST["airline_country"];

$flight = $_POST["flight"];

//make var $flight uppercase.
$flight = strtoupper($flight);


$route = $_POST["route"];
$frequency = $_POST["frequency"];

$aircraft_code = $_POST["aircraft_code"];
$aircraft_name = $_POST["aircraft_name"];

$type = $_POST["type"];
$remarks = $_POST["remarks"];

//end 

//add slaches to every field.
$dep_code = addslashes($dep_code);
$dep_city = addslashes($dep_city);
$dep_country = addslashes($dep_country);

$des_code = addslashes($des_code);
$des_city = addslashes($des_city);
$des_country = addslashes($des_country);

$airline_code = addslashes($airline_code);
$airline_name = addslashes($airline_name);
$airline_country = addslashes($airline_country);

$flight = addslashes($flight);

$route = addslashes($route);
$frequency = addslashes($frequency);

$aircraft_code = addslashes($aircraft_code);
$aircraft_name = addslashes($aircraft_name);

$type = addslashes($type);
$remarks = addslashes($remarks);



 
$sql = "INSERT INTO plane (p_dep_code, p_dep_city, p_dep_country, p_des_code, p_des_city, p_des_country, p_airline_code, p_airline_name, p_airline_country, p_flight, p_route, p_frequency, p_aircraft_code, p_aircraft_name, p_type, p_remarks)
VALUES ('$dep_code','$dep_city', '$dep_country', '$des_code', '$des_city', '$des_country', '$airline_code', '$airline_name', '$airline_country', '$flight', '$route', '$frequency', '$aircraft_code', '$aircraft_name', '$type','$remarks' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


 include 'endDB.php';


 header("Location: index.php");


 ?>