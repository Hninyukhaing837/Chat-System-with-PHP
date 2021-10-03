<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="assets/images/logotu-208x243.png" type="image/x-icon">
  <meta name="description" content="">
  <title></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
 <link rel="stylesheet" type="text/css" href="css/styles.css">
  
  <style type="text/css">
    #logo{
      background-image:"images/tulogo.png";
      background-color:#3399FF;
    
      height: 350px;
      font-size: 20px;
      margin: auto;
        padding: 0;

    }
   
  </style>
  
  
</head>
<body>
  
   <div class="header">
        <div id="logo"><img src="images/tulogo.png"></a><h2>TU(Hmawbi) English Language Class</h2></div>
             <div class="header-right">
                    
                    <a href="index.php"><i class="fa fa-home"></i>Group Chatting</a>
                    <a title="Student List" href="list.php">Student List</a>
                    <a title="Activities of HTU" href="activity1.php">Activities</a>
                    <a title="Student List" href="about.php">About</a>
                    <a title="Student List" href="contact.php">Contact Us</a>

             </div>
  </div>


</body>
</html>
<!DOCTYPE html>
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