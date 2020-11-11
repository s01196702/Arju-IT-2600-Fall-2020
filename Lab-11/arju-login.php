<?php 


$db = mysqli_connect('localhost', 'root', '', 'ap');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
  $username = mysqli_real_escape_string($db, $_POST['username']);
 $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($password)) { array_push($errors, "password is required"); }
  
$query = "select username,password from passwords";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result)) {
if(hash("sha224", $password) == $row['password'] && $username == $row['username']){
	
echo '<script> alert("Logged In Successfully"); </script>';
echo "Welcome ".$username;
} else{
  echo '<script> alert ("Wrong creadiantial"); </script>';
  header("Location: arju-index.html");
exit();
}
}
mysqli_close($db);


 ?>