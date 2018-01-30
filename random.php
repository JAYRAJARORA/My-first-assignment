<?php
// $random = rand();
// $max = getrandmax();
// echo "$random/$max <br>";
// $time = time();
// $actual_time = date('D M Y  H:i:s',strtotime('+1 year 3 months'));


// echo "$actual_time";
if(isset($_POST['roll'])){
	$rand = rand(1,6)
	echo "You rolled the number $rand";
}


?>

<form method="POST" action="random.php">	
	<input type="submit" name="roll" value="Roll Dice">
</form>