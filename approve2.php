<?php 
$a=$_POST['tk'];
$b=$_POST['pass'];
if($a=='ourhome' and $b=='01571754700')
	header('location: tpay.php');
else
	header('location: index.php');

?>