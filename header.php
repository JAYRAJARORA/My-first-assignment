<?php ob_start();  ?>
<h1>this is the page</h1>
<p>this is the para</p>

<?php 
$redirect_page = "http://google.co.in";
$redirect = true;
if($redirect==true){
	header('Location: '.$redirect_page);
}

ob_end_flush();

 ?>