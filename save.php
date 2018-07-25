<?php
$con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
$name=$_POST['border'];
$day=$_POST['day'];
$night=$_POST['night'];
$e=$_POST['date'];
$tk=$_POST['tk'];
$res= explode("/", $e);
$data=$res[2]."-".$res[0]."-".$res[1];
$sql="insert into meal(name,day,night,dat,bil)values('$name','$day','$night','$data','$tk')";
$result=mysqli_query($con,$sql);
echo '<script language="javascript">';
      echo 'alert("Successfully added");';
        echo 'window.location.href="daily.php";';
        echo '</script>';



?>