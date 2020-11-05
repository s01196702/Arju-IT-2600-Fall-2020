<?php
$vendor_id = $_POST['vid'];
$vendor_name = $_POST['vname'];
$vendor_Address1 = $_POST['vadd1'];
$vendor_Address2 = $_POST['vadd2'];
$vendor_city = $_POST['vcity'];
$vendor_state = $_POST['vstate'];
$vendor_Contact_Last_Name = $_POST['vcln'];
$vendor_Contact_First_Name = $_POST['vcfn'];
$vendor_zip = $_POST['vzip'];
$vendor_phone = $_POST['vphone'];
$vendor_termid = $_POST['termid'];
$vendor_acno = $_POST['acno'];





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vendors (vendor_id, vendor_name, vendor_address1,vendor_address2,vendor_city,vendor_state,vendor_zip_code,vendor_phone,vendor_contact_last_name,vendor_contact_first_name,default_terms_id,default_account_number)
VALUES ('$vendor_id','$vendor_name' ,'$vendor_Address1','$vendor_Address2','$vendor_city','$vendor_state','$vendor_zip','$vendor_phone','$vendor_Contact_Last_Name',
'$vendor_Contact_First_Name','$vendor_termid','$vendor_acno')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>