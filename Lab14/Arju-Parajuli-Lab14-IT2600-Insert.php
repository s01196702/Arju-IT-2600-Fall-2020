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




class Course 
{  
      
    Public $vid; 
    Public $v_name; 
    public $v_address1;
    public $v_address2;
Public $v_city;
Public $v_state;
Public $v_contactlastname;
Public $v_contactfirstname;
Public $v_zip;
Public $v_phone;
Public $v_termid;
Public $v_acno;
  
    function __construct($vid,$v_name,$v_address1,$v_address2,$v_city,$v_state,$v_contactlastname,$v_contactfirstname,$v_zip,$v_phone,$v_termid,$v_acno) 
  
    { 
        // This is initializing the class properties 
        $this->vid=$vid; 
        $this->v_name=$v_name;
        $this->v_address1=$v_address1;
        $this->v_address2=$v_address2; 
        $this->v_city=$v_city;
        $this->v_state=$v_state;
        $this->v_contactlastname=$v_contactlastname;
        $this->v_contactfirstname=$v_contactfirstname;
        $this->v_zip=$v_zip;
        $this->v_phone=$v_phone;
        $this->v_termid=$v_termid;
        $this->v_acno=$v_acno;

  
  
    }      
    function insert_records() 
    { 
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vendors (vendor_id, vendor_name, vendor_address1,vendor_address2,vendor_city,vendor_state,vendor_zip_code,vendor_phone,vendor_contact_last_name,vendor_contact_first_name,default_terms_id,default_account_number)
VALUES ('$this->vid','$this->v_name' ,'$this->v_address1','$this->v_address2','$this->v_city','$this->v_state','$this->v_zip','$this->v_phone','$this->v_contactlastname','$this->v_contactfirstname','$this->v_termid','$this->v_acno')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    } 
} 
      
$course= new Course($vendor_id,$vendor_name,$vendor_Address1,$vendor_Address2,$vendor_city,$vendor_state,$vendor_Contact_Last_Name,$vendor_Contact_First_Name,$vendor_zip,$vendor_phone,$vendor_termid,$vendor_acno); 
$course->insert_records(); 

?>