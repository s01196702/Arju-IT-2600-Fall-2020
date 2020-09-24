<html>
<body>

<?php
$str = $_POST["text"];
$charcount = strlen(trim($str));
echo "Number of Characters = ".$charcount."<br>";
$arr = (explode(" ",$str));
echo "Number of Words = " .sizeof($arr)."<br>";
$random = rand(0,sizeof($arr)-1);
echo "Random Words ".$random."<br>";
echo "Words at ".$random."Position is ".$arr[$random]."<br>";
echo "All Caps : ".strtoupper($str)."<br>";
echo "Substring of 10 Characters : ".$str[10]."<br>";
echo "Replace and : ".str_replace("and", "&", $str)."<br>";

$index = array_search("REDSTART", $arr);
$index1 = array_search("REDEND", $arr);
if($index+2 == $index1){
	$newstr = str_replace("REDSTART", "", $str);
	$newstr1 = str_replace("REDEND", "", $newstr);
	
}
$str1 = (explode(" ",$newstr1));
for ($i=0; $i < sizeof($str1); $i++) {
	if($i == $index+1) {
		echo "<font color='red',style='bold'>" .$str1[$i]." "."</font>";
	}
	else{
	echo $str1[$i]." ";}
	
}
echo "<br>";

?>
<form action="Arju-lab5.html">
		<button type="submit">Back to form page</button>
	</form>
</body>
</html>