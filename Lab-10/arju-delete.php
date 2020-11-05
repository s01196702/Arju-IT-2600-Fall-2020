<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if( isset($_GET['del']) )
{
$id = $_GET['del'];
}


$sql = "delete from vendors where vendor_name = '$id' ";

if ($conn->query($sql) === TRUE) {
  
	header("Refresh:0; url=arju.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>