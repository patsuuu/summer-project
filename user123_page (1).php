<a href="index.php" class="btn"><input type="submit" value="Back"></a>
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
      <h2>User Page</a></h2>
</center>
   <center>
<div class="form-container">
  <br><br>  <br><br>  <br><br>  <br><br>  
   
      <h3>Log-In</h3>
      <?php
     
      ?>
     <a href="login_formmm.php" class="btn"><input type="submit" value="User 1"></a><br><br>
     <a href="user2_form.php" class="btn"><input type="submit" value="User 2"></a><br><br>
     <a href="lgg.php" class="btn"><input type="submit" value="User 3"></a>
      
   
 
</div><br><br><br><br><br><br>

</body>
</html>