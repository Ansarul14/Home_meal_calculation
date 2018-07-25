<?php
$con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');

;
$e=$_POST['date'];
$tk=$_POST['tk'];
$res= explode("/", $e);
$data=$res[2]."-".$res[0]."-".$res[1];
$sql="insert into payment(dat,tk)values('$data','$tk')";
$result=mysqli_query($con,$sql);
echo '<script language="javascript">';
      echo 'alert("Successfully added");';
        echo 'window.location.href="tpay.php";';
        echo '</script>';



?>