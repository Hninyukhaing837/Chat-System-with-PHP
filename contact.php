
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
    
      background-color:#00ccff; 
      background-size: 100%;  
     
      margin: auto;
        padding: 0;


    }

   
    
  </style>
  
  

</head>
<body>
  
  <center><h2>TU(Hmawbi) English Language Class</h2></center>
  
  

</body>
</html>

 


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/theme_black.css">
<link rel="stylesheet" href="css/font_awesome.min.css">
 
<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
   
    
 
</head>
<body>



<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">

    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p></p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>TU(Hmawbi) English Language Class</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  tuhmawbielc@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="contact.php" method="post" >
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="ab_name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="ab_email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="ab_address" required>
      </div>  
     
      <button type="submit" name="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>power by<a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a>  ELC</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>


</body>
</html>
<?php 
include ('conn.php');
if(isset($_POST['submit'])){
  $ab_name=$_POST['ab_name'];
  $ab_email=$_POST['ab_email'];
  $ab_address=$_POST['ab_address'];
  $sql="INSERT INTO about ('ab_name','ab_email','ab_address')   VALUES('$ab_name','$ab_email','$ab_address')";
    $sql1=mysqli_query($conn,$sql);
   

     $count=$conn->affected_rows;
      if ($count>0) {
        echo "<script>alert('Successfully added!')</script>";
        echo "<script>window.location='about.php'</script>";
       }
        # code...
       else {
        echo "<script>alert('Fail!')</script>";
       } 
}

 ?>