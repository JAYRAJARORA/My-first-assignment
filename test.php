<!DOCTYPE html>
<html>
<head>
	<title>my php page</title>
</head>
<body>
<h1>My php page</h1>
<!-- <?php
// echo "hello world <br/>";
// $string1 = "this is a string .";
// $word_count = str_word_count($string1,1,".");
// echo $word_count."<br/>";
// print_r($word_count);
// $txt = "Learn PHP";
// $txt2 = "W3";
// $x = 4;
// $y = 5;
// echo "<h2>".$txt."</h2>";
// echo "Study php at".$txt2."<br>";
// echo $x + $y;

// class Car {
//     function Car() {
//         $this->model = "VW";
//     }
// }
// // create an object
// $herbie = new Car();
// echo $herbie->model;
?> -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>