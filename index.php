
 <?php include "nav.php"; ?>

<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link rel="shortcut icon" href="assets/images/logotu-208x243.png" type="image/x-icon">
  <meta name="description" content="">
  <title></title> 
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">  
 <link rel="stylesheet" type="text/css" href="css/styles.css">
 <link rel="stylesheet" type="text/css" href="css/w3.css">
 
  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style type="text/css">
  
    body{
     background-image:url("images/chat2.jpg");
      background-color:#00ccff; 
      background-size: 100%;  
     
      margin: auto;
        padding: 0;


    }

   
    
  </style>
  
  

</head>
<body>
  
  <center><h2>TU(HMAWBI) English Language Class</h2></center>
  
  

</body>
</html>

 



<html>
<head>
  <title>PHP Simple Chat System using AJAX</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  #login_form{
    width:350px;
    height:350px;
    position:relative;
    top:50px;
    margin: auto;
    padding: auto;
    background-color: #33FFFF;
  }
</style>

</head>
<body>
  
<div class="container">
  
  <div id="login_form" class="well">
    <h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
    <hr>
    <form method="POST" action="login.php">
    Username: <input type="text" name="username" class="form-control" required>
    <div style="height: 10px;"></div>   
    Password: <input type="password" name="password" class="form-control" required> 
    <div style="height: 10px;"></div>
    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button> No account? <a href="signup.php"> Sign up</a>
    </form>
    <div style="height: 15px;"></div>
    <div style="color: red; font-size: 15px;">
      <center>
      <?php
        session_start();
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
      ?>
      </center>
    </div>
  </div>
</div>
</body>
</html>