
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
 </style>
  </head>
  <body>
  	 <table id="customers">
  <tr>
    <th>Date</th>
    <th>Name</th>
    <th>Day</th>
    <th>Night</th>
    <th>Bil</th>
  </tr>
  <?php
     $con=mysqli_connect('localhost','id6606462_ansarul','01767175689','id6606462_home');
     $sql="select * from meal";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res)){
          echo "<tr><td>" . $row['dat'] . "</td><td> " . $row['name'] . "</td>
            <td>" . $row['day'] . "</td><td>" . $row['night'] . "</td>
            <td>" . $row['bil'] . "</td></tr>";
   }
  ?>
</table>
  </body>

<html>