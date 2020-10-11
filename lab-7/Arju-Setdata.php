<?php
$email = $_POST['email'];
$fav = $_POST['fav'];
$year = $_POST['year'];

setcookie("email", $email, time() + 900,"/");

setcookie("Favourite_food", $fav, time() + 900,"/");

setcookie("Year_born", $year, time() + 900,"/");

header("Location:Arju-Parajuli-Lab7.html");

?>