<?php
$con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
$name=$_POST['border'];
$tk=$_POST['tk'];

$e=$_POST['date'];
$res= explode("/", $e);
$data=$res[2]."-".$res[0]."-".$res[1];
$sql="insert into amount(name,tk,dat)values('$name','$tk','$data')";
$result=mysqli_query($con,$sql);
echo '<script language="javascript">';
      echo 'alert("Successfully added");';
        echo 'window.location.href="add.php";';
        echo '</script>';



?>