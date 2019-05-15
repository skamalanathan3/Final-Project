<?php

//setting header to json
header('Content-Type: application/json');
    $servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "cellmate";
	$port = 8889;

  
	  $connect = mysqli_connect($servername, $username, $password, $dbname, $port);

//database
define('DB_HOST', 'localhost:8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'cellmate');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT * FROM dailysale  
           WHERE dateEntered BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
 