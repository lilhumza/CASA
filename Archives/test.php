<?php
$servername = "localhost";
$username = "id5480653_humzasqldatabase";
$password = "humzarocks";
$dbname = "id5480653_sqlmaps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT lat, lng FROM casalatlng";
$result = $conn->query($sql);

$lati = Array();
$lngi = Array();
$length;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $lati[] = $row["lat"];
     $length = sizeof($lati);
     $lngi[] = $row["lng"];
    }
} else {
    echo "0 results";
}
for ($i = 0; $i < count($lati); $i++)
{
   echo $lati[$i] , $lngi[$i]. "\n";
   //echo $lngi[$i] . "\n";
   echo "\n";
}
$conn->close();
?>