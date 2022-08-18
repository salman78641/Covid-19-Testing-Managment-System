<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Log-in</title>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>

<style type="text/css">
	form
	{
		padding: 100px 100px;
	}
	input[type=text] , [type=password]
	{
		width: 100%;
		padding: 18px;
		border: 1px solid black;
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
</style>

<body>



<body>
         <div class="menu-area">
      <h1>MSR Covid Clinic</h1>
 
</div>



  <form action="index.php" method="post" name="loginadmin">
<h2 align="center"> Admin Login </h2>
<label>Identity Number </label>
<input type="text" name="id">
<label>Full Name</label>
<input type="text" name="fullname">
<label>Password</label>
<input type="password" name="pass">
<button class="registerbtn" type="submit"  name="loginadmin" value="loginadmin">
	Log in
</button>


<p> If you are new or forgot your password  Go <a href="AdminReg.php">here</a>.</p>
</body>
</html>

 <?php

 

 
$servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$con = mysqli_connect($servername,$username,  $password, $dbname);
 
  
 if(isset($_POST['loginadmin'])){

    $id = mysqli_real_escape_string($con,$_POST['id']);
  
  $pass = mysqli_real_escape_string($con,$_POST['pass']);
    if ($id != "" and $pass !="" )
    {

        $sql_query = "select count(*) as cntUser from admins where id='".$id."' AND pass='".$pass."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
      

        if($count > 0)
        {
             
          header("Location: indexAdmin.php");
        }else{
            echo "Invalid username and password";
        }

     }
    
}
?>
 