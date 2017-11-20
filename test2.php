<!-- <!DOCTYPE html>
<html>
<head>
	<title>abcd</title>
</head>
<body>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
$numbers = array(10,3,5,72,8,2);
rsort($numbers);
for($i=0;$i<count($numbers);$i++){
	echo $numbers[$i]."<br>";
}
?>
</body>
</html> -->
<!DOCTYPE html>
<html>
<body>

<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>