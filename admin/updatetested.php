<?php
$servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$con = mysqli_connect ($servername,$username,  $password, $dbname);
  
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Updatenow'])) {
    
  $Email = $_REQUEST['email']; 
 $result = $_POST['result'];
  $query =mysqli_query($con,"UPDATE  booknow SET result='$result' WHERE email='$Email'" );
 

  if ($query) {
             echo '<script> alert("Result Added Successfully.") </script>';
}
 
}



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Result Update</title>
	<link rel="stylesheet" type="text/css" href="navbar.css">



          <style>
                                     .containershin
                                                      {
                                                           padding: 100px;
                           }
               
 input[type=text], input[type=email]
 {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
  
 
   
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
} 
.space
{
      height: 100px;
      width : 100px;
}

 
</style>
</head>

<body>
	    <div class="menu-area">
      <h1>MSR Covid Clinic</h1>
    </div>
<div class="menu-area">
  <ul>
    <li><a href="indexAdmin.php">Admin Home</a></li>
    <li><a href="booknowAdmin.php">Labarotry Testing Records</a></li>
    <li><a href="gtAdmin.php">Group Testing Records</a></li>
    <li><a href="phy.php">Physicians</a></li>
    <li><a href="updatetested.php">Update Covid Result</a></li>
    <li><a href="logout.php">Log out</a></li>
    
</li>
</div>

                 <form class="containershin" method="post" action="updatetested.php">
  Email: <input type="email" name="email" placeholder="Email" required>
  Result: <input type="text" name="result" placeholder="Covid-19 Result of the Patient" required>
  <input  class="registerbtn" type="submit" name="Updatenow">
</form>
 
</body>
</html>
