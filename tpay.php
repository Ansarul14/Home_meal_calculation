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
         <form action="psave.php" method="POST">
         
          Amount<input type="text" name="tk" placeholder="Amount"/ class="op">
          </br></br>
          
                       
          <div class="col-75">
         <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
  Date:<input type="text" id="datepicker" name="date" class="op" style="margin-left: 20px">
      </div>
</br>
     <input type="submit" value="Submit" style="font-size: 25px">
          </br></br> 
          <a href="viewamount.php" style="color: yellow">View-the amount-paid</a> </br> </br> 
         <a href="index.php" style="color: yellow">Home</a>
         </form>
     </div>
  </body>

<html>