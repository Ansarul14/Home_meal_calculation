<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <style type="text/css">
     


      body{
        background-image:url("hello.jpg"); 
        -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
        
      }
      .point{
        text-align: center;
        font-style: sans-serif;
        margin-top: 50px;
        padding: 10px;
        font-size: 25px;
      }
      element {

    font-size: 25px;

}
      .point form{
        
        
        color:red;
      }
      .point option{
        font-size:25px;
      }
      .op{
        width:150px;
        font-size: 20px;
        padding: 5px;
      }
 </style>
  </head>
  <body>
     <div class="point">
         <form action="save.php" method="POST">
         Name:                
          <select name="border" class="op">
            <option value="Ansarul">Ansarul </option>
            <option value="Bakar">Bakar</option>
            <option value="Tohid">Tohid</option>
            <option value="Shahriar">Shahriar</option>
            <option value="joy">Joy</option>
            <option value="karim">karim</option>
          </select>
        </br></br>
          Day:::  <select name="day"class="op">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
             <option value="4">4</option>
          </select>
          </br></br>
          Night:  <select name="night" class="op">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
             <option value="4">4</option>
          </select>

          </br></br>
          Bill:<input type="text" name="tk"class="op" style="margin-left: 20px">
             </br></br>          
          <div class="col-75">
         <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
  Date:<input type="text" id="datepicker" name="date" class="op">
      </div>
</br>
     <input type="submit" value="Submit" style="font-size: 25px">
            
         
         </form>
         <a href="index.php" style="color: yellow">Home</a>
     </div>
  </body>

<html>