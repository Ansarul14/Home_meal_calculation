<html>
  <head>
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
      	margin-top: 100px;
      	padding: 45px;
      	font-size: 25px;
      }
      .point a{
      	
      	margin-top:00px;
      	color:red;
      }
      .point h2{
        color:red;
      }
      .op{
        width:150px;
        font-size: 25px;
        padding: 10px;
      }
      #btn{
        padding: 10px;
        background: green;
        color:white;
        margin-top: 25px;
        width:130px;
      }
 </style>
  </head>
  <body>
  	 <div class="point">
          <form action="profile.php"method="POST">
            <h2>Please select any name:</h2>
             <select name="profile" class="op">
              <option value="ansar">Ansarul</option>
              <option value="bakar">Bakar</option>
              <option value="tohid">Tohid</option>
              <option value="shahriar">Shahriar</option>
              <option value="joy">joy</option>
              <option value="karim">karim</option>

             </select>
           </br>
             <input type="submit" value="Submit"/ id="btn">
              <a href="index.php" style="color: yellow">Home</a>
          </form>
  	 </div>
  </body>

<html>