


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
     background-image:url("images/edu.jpg");
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
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/datatables.css"/>
  <script type="text/javascript" src="js/datatables.min.js"></script>
   <script type="text/javascript" src="js/datatables.js"></script>
  <script type="text/javascript">
     $(document).ready( function () {
    $('#mytable').DataTable();
} );

  </script>
</head>
<body>
     <table  id="mytable" class="table table-striped table-bordered table-hover" >
     <thead>
      <tr>
        <th>userid</th>
        <th>username</th>
        <th>password</th>
        <th>uname</th>
        <th>photo</th>
        <th>access</th>
       
      </tr>
     </thead>
     <tbody>
     





<?php
$db=mysqli_connect('localhost','root','')or die("Unable to connect to MySQL");
mysqli_select_db($db,"chat_system")or die("Could not select example");

$data1=$db->query("SELECT * from user");
//$data2=mysqli_fetch_array($data1);

    


while ($row = mysqli_fetch_assoc($data1))
 {
    echo '<tr>';
    foreach($row as $value)
    {
      echo'<td>'.$value.'</td>';
    }
    
echo'</tr>';
}



?>
</tbody>
</table> 
</body>
</html>