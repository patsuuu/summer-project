
<a href="user123_page.php" class="btn"><input type="submit" value="Back"></a>
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM clone_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_pg.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user2_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   
</head>
<body>
<script>
    window.history.forward();
    function noBack() { window.history.forward(); }
</script>
   
   <center>
      <h2>User 2 Log-In</a></h2>
</center><center><br><br> <br><br> <br><br> <br>
<div class="form-container">

   <form action="" method="post">
      <h3>Log-In</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <center>
      <input type="email" name="email" required placeholder="enter your email">
      <center><br>
      <center>
      <input type="password" name="password" required placeholder="enter your password">
      <center><br>
      <center>
      <input type="submit" name="submit" value="login now" class="form-btn">
      <center>
      <center>
      
      <center>
   </form>

</div>
   </center>
</body>
</html>