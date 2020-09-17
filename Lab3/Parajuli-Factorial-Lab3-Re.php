<?php
function ArjuFunction($number) {
	$sqrt = sqrt($number);
	$square = $number*$number;
	$factorial = 1;
	for ($i=1; $i <= $number; $i++) {
		$factorial *= $i;
	}
	return array('square' =>$square, 'sqrt' =>$sqrt, 'factorial' =>$factorial);
}
if (isset($_POST['Num'])) {
	$number = $_POST['Num'];
	if (!($number > 0)) {
		echo "Number should be greater than 0";
		echo "</br><a href = 'return.php'> Go Back</a>";
		exit(0);
		
	}
	$result = array();
	$result = ArjuFunction($number);
}

?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "Arju's View" content="width=device-width, initial-scale=2.0">
	<title>My Result</title>
</head>
<body>
<h4>The Value Entered was : <?php echo $number; ?> </h4>
<h4>The Square Root : <?php echo $result['sqrt']; ?></h4>
<h4>The Square :<?php echo $result['square']; ?></h4>
<h4>The Factorial : <?php echo $result['factorial'] ?></h4>
<a href="return.php">Click Here to Return to the Input Form</a>
</body>
</html>