<!DOCTYPE html>
<html>
<body>

<?php
function value($type = "4")
{
    return "The value entered was: $type\n";
}
echo value();
$arg = 4;
   echo "The square root of " . $arg . ":" . sqrt($arg) . "\n";
   
  
   $num = 4;  
$factorial = 1;
$square =1;
for ($x=$num; $x>=1; $x--)  
{  
  $factorial = $factorial * $x;
  $square = $num * $num;
 
}  
echo "The square of $num : $square \nThe factorial of $num : $factorial";

?>

</body>
</html>