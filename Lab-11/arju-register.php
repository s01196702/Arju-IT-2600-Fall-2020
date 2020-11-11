<?php
$username = $_POST['uname'];
$pass = $_POST['pword'];
$password = hash("sha224",$pass);
$db = mysqli_connect('localhost', 'root', '', 'ap');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

  if (empty($username)) { array_push($errors, "Last Name is required"); }
  if (empty($pass)) { array_push($errors, "Email is required"); }
  
$query = "Insert into passwords (username,password) values ('$username','$password')";
if(mysqli_query($db, $query)){
	echo  '<script>
   alert("Registeration Succesfull");
	</script>' ;
    header("Location: arju-index.html");
}
 else{
    echo "ERROR: Unable to execute Query :";
}

mysqli_close($db);
?>