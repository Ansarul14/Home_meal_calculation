<html>
  <head>
     <style type="text/css">
      body{
      
      	
      	
      }
      .point{
      	text-align: center;
      	font-style: sans-serif;
      	margin-top: 100px;
      	padding: 45px;
      	font-size: 25px;
      }
      .point a{
      	
      	margin-top:200px;
      	color:red;
      }
      #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
    margin-left: 250px;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
.profile{
	text-align: center;
}
.profile h2{
	color:green;
}
 </style>
  </head>
<?php
$con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
$name=$_POST['profile'];
if($name=="ansar"){
	?>
	<div class="profile">
	<h2>Total meal-so-far</h2>
	<table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Day</th>
    <th>Night</th>
    <th>Bil</th>
  </tr>
  <?php
     $cost=0;
     $name="Ansarul";
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from meal where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr><td>" . $row['dat'] . "</td>
            <td>" . $row['day'] . "</td><td>" . $row['night'] . "</td>
            <td>" . $row['bil'] . "</td></tr>";
            $cost=$cost+$row['bil'];
   }

  ?></table>
  <h2> Total cost so-far</h2>
  <?php 
   echo $cost;?>
   <h2> Total amount given</h2><?php
   $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select sum(tk)as count from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     $row=mysqli_fetch_assoc($res);
     echo $row['count'];
     ?>
     <table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Bil</th>
    
  </tr>
<?php
     $cost=0;
    
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr> <td>" . $row['dat'] . "</td>
            <td>" . $row['tk'] . "</td>
            </tr>";
            $cost=$cost+$row['tk'];
   }

  ?></table>
  <?php
  }

if($name=="bakar"){
	?>
	<div class="profile">
	<h2>Total meal-so-far</h2>
	<table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Day</th>
    <th>Night</th>
    <th>Bil</th>
  </tr>
  <?php
     $cost=0;
     $name="Bakar";
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from meal where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr><td>" . $row['dat'] . "</td>
            <td>" . $row['day'] . "</td><td>" . $row['night'] . "</td>
            <td>" . $row['bil'] . "</td></tr>";
            $cost=$cost+$row['bil'];
   }

  ?></table>
  <h2> Total cost so-far</h2>
  <?php 
   echo $cost;?>
   <h2> Total amount given</h2><?php
   $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select sum(tk)as count from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     $row=mysqli_fetch_assoc($res);
     echo $row['count'];?>
      <table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Bil</th>
    
  </tr>
<?php
     $cost=0;
    
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr> <td>" . $row['dat'] . "</td>
            <td>" . $row['tk'] . "</td>
            </tr>";
            $cost=$cost+$row['tk'];
   }

  ?></table>
  <?php
  }
  if($name=="tohid"){
	?>
	<div class="profile">
	<h2>Total meal-so-far</h2>
	<table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Day</th>
    <th>Night</th>
    <th>Bil</th>
  </tr>
  <?php
     $cost=0;
     $name="Tohid";
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from meal where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr><td>" . $row['dat'] . "</td>
            <td>" . $row['day'] . "</td><td>" . $row['night'] . "</td>
            <td>" . $row['bil'] . "</td></tr>";
            $cost=$cost+$row['bil'];
   }

  ?></table>
  <h2> Total cost so-far</h2>
  <?php 
   echo $cost;?>
   <h2> Total amount given</h2><?php
   $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select sum(tk)as count from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     $row=mysqli_fetch_assoc($res);
     echo $row['count'];?>
      <table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Bil</th>
    
  </tr>
<?php
     $cost=0;
    
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr> <td>" . $row['dat'] . "</td>
            <td>" . $row['tk'] . "</td>
            </tr>";
            $cost=$cost+$row['tk'];
   }

  ?></table>
  <?php
  }
  if($name=="shahriar"){
	?>
	<div class="profile">
	<h2>Total meal-so-far</h2>
	<table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Day</th>
    <th>Night</th>
    <th>Bil</th>
  </tr>
  <?php
     $cost=0;
     $name="Shahriar";
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from meal where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr><td>" . $row['dat'] . "</td>
            <td>" . $row['day'] . "</td><td>" . $row['night'] . "</td>
            <td>" . $row['bil'] . "</td></tr>";
            $cost=$cost+$row['bil'];
   }

  ?></table>
  <h2> Total cost so-far</h2>
  <?php 
   echo $cost;?>
   <h2> Total amount given</h2><?php
   $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select sum(tk)as count from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     $row=mysqli_fetch_assoc($res);
     echo $row['count'];?>
      <table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Bil</th>
    
  </tr>
<?php
     $cost=0;
    
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr> <td>" . $row['dat'] . "</td>
            <td>" . $row['tk'] . "</td>
            </tr>";
            $cost=$cost+$row['tk'];
   }

  ?></table>
  <?php
  }
  if($name=="karim"){
	?>
	<div class="profile">
	<h2>Total meal-so-far</h2>
	<table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Day</th>
    <th>Night</th>
    <th>Bil</th>
  </tr>
  <?php
     $cost=0;
     $name="Karim";
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from meal where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr><td>" . $row['dat'] . "</td>
            <td>" . $row['day'] . "</td><td>" . $row['night'] . "</td>
            <td>" . $row['bil'] . "</td></tr>";
            $cost=$cost+$row['bil'];
   }

  ?></table>
  <h2> Total cost so-far</h2>
  <?php 
   echo $cost;?>
   <h2> Total amount given</h2><?php
   $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select sum(tk)as count from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     $row=mysqli_fetch_assoc($res);
     echo $row['count'];?>
      <table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Bil</th>
    
  </tr>
<?php
     $cost=0;
    
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr> <td>" . $row['dat'] . "</td>
            <td>" . $row['tk'] . "</td>
            </tr>";
            $cost=$cost+$row['tk'];
   }

  ?></table>
  <?php
  }
  if($name=="joy"){
	?>
	<div class="profile">
	<h2>Total meal-so-far</h2>
	<table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Day</th>
    <th>Night</th>
    <th>Bil</th>
  </tr>
  <?php
     $cost=0;
     $name="Joy";
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from meal where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr><td>" . $row['dat'] . "</td>
            <td>" . $row['day'] . "</td><td>" . $row['night'] . "</td>
            <td>" . $row['bil'] . "</td></tr>";
            $cost=$cost+$row['bil'];
   }

  ?></table>
  <h2> Total cost so-far</h2>
  <?php 
   echo $cost;?>
   <h2> Total amount given</h2><?php
   $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select sum(tk)as count from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     $row=mysqli_fetch_assoc($res);
     echo $row['count'];?>
      <table id="customers">
  <tr>
    <th>Date</th>
    
    <th>Bil</th>
    
  </tr>
<?php
     $cost=0;
    
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from amount where name='$name'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr> <td>" . $row['dat'] . "</td>
            <td>" . $row['tk'] . "</td>
            </tr>";
            $cost=$cost+$row['tk'];
   }

  ?></table>
  <?php
  }
  ?>
