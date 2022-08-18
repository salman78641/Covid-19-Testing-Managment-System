<?php



$servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$db = mysqli_connect($servername,$username,  $password, $dbname);
$upload = 1;
 

if (isset($_POST['regadmin']))
{
      $id = mysqli_real_escape_string($db, $_POST['id']);

 $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
 $pass = mysqli_real_escape_string($db, $_POST['pass']);
 $conpass = mysqli_real_escape_string($db, $_POST['conpass']);
 
 $sql=mysqli_query($db,"SELECT * FROM admins where id='$id'");
$rowses = mysqli_num_rows($sql);
if(mysqli_num_rows($sql)>0)
{
   $upload =0;
  ?> 
     <script type="text/javascript">
             
        alert("ID already exists.");       
    
   
         </script> 
    
    <?php
}
   

 $query=mysqli_query($db, "INSERT INTO admins(id, fullname , pass , conpass) VALUES ( '$id',  '$fullname',    '$pass',        '$conpass'  )");
  
if ($upload ==0) {
   header("Location: AdminReg.php");
}
  

if($sql && $upload==1)
{
   header("Location: index.php");
}

 


   

 }


?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="navbar.css">
   <title>Admin Panel</title>


   <style>
      form
      {
         padding: 100px 100px;
      }
      label
      {
         font-weight: bold;
      }
      input[type=text]
      {
         width: 100%;
         padding: 15px;

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
</head>
<body>
         <div class="menu-area">
      <h1>MSR Covid Clinic</h1>
    </div>
 



<form method="post" , action=" ">


   <h2 align="center"> New Admin Verification Page </h2>

   
   <label>Identity Number(Alloted to you by clinic authority)</label>
    <input type="text" name="id">
    <label>Full Name</label>
    <input type="text" name="fullname">
    <label>Password</label>
    <input type="text" name="pass">
    <label>Confirm Password</label>
    <input type="text" name="conpass">
    <button  class="registerbtn" type="submit" name="regadmin">
      Let's Go
    </button >
    <p>Already signed up Log in <a href="index.php">  here</a>.</p>
</body>
</html>

