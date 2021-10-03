
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/theme_black.css">
<link rel="stylesheet" href="css/font_awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
</head>
<body>
   
   	 		<form action="contact1.php" method="post">
   	 			<div class="form-group">
   	 			<label for="">Name</label>
                   <input type="text" class="form-control" name="ab_name"  >
               </div>
               <div class="form-group">
                 <label for="">Email</label>
                   <input type="text" class="form-control" name="ab_email"  >
               </div>
               <div class="form-group">
                 <label for="">Address</label>
                   <input type="text" class="form-control" name="ab_address"  >
               </div>
               <div class="form-group">
                   <input type="submit" name="submit" class="btn btn-primary">
               </div>
   	 		</form>



   	 	</div>
   	 </div>
    	
   </div>
</body>
</html>
<?php 
include('conn.php');
if(isset($_POST['submit'])){
  $ab_name=$_POST['ab_name'];
  $ab_email=$_POST['ab_email'];
  $ab_address=$_POST['ab_address'];
  $sql="INSERT INTO about (id,'ab_name','ab_email','ab_address')   VALUES('$ab_name','$ab_email','$ab_address')";
    $sql1=mysqli_query($conn,$sql);
   

   
}
 ?>