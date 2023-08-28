<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
      form {
        border-style: solid;
  border-width: medium;
  position: relative;
  height: 270px;
  width: 25%;
  bottom: 0px;
  padding:  30px  ;
  font-size: 17px;
  line-height: 1.3;
  background-color: lightblue;
  margin-left: auto; 
  margin-right: 190px;
  margin-bottom: 200px;
}
* {
  box-sizing: border-box;
}
body {
  background-color: #f79256;
}
body {
  margin: 0;
  font-family: Timesnewroman;
  font-size: 20px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  width: 100%;
  
  
}


#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}
body {
  background: url("https://cdn.discordapp.com/attachments/810160301978550322/1141725455624450168/image.png") no-repeat top left;
  background-logo: 50px;
  background-size:190px;
  position: relative;
  clear: both;
  padding: 10px;
  margin: 0px;
  padding:  30px;
  background-repeat: no-repeat, repeat;
}
body {
  background-color: #f79256;
}
.logo {
  background: url("../graphics/dhaka logo.png");
  padding: 0px;
  margin: 0px;
  width: 150px;
  height: 0px;
  
}
#myBtn:hover {
  background: #ddd;
  color: black;
}
      </style>
   
   <title>login form</title>

   <!-- custom css file link  -->
   

</head>
<body>
<script>
    window.history.forward();
    function noBack() { window.history.forward(); }
</script>
<center>
      <h2>MUNICIPALITY OF NAIC</a></h2>
</center>
   <center>
<div class="form-container">
  <br><br>  <br><br>  <br><br>  <br><br>  
   
      <h3>Log-In</h3>
      <?php
     
      ?>
     <a href="spadmin_page.php" class="btn"><input type="submit" value="Super Admin"></a><br><br>
     <a href="admin123_page.php" class="btn"><input type="submit" value="Admin"></a><br><br>
     <a href="user123_page.php" class="btn"><input type="submit" value="User"></a>
      
   
 
</div>
   
</body>
</html>