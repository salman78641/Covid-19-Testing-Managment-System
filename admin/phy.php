<?php



$servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$db = mysqli_connect($servername,$username,  $password, $dbname);

 

if (isset($_POST['regphy']))
{
      $fullname = $_POST['fullname'];
 $email =  $_POST['email'];
 $address =  $_POST['address'];
 $qualification =  $_POST['qualification'];

 $query=mysqli_query($db, "INSERT INTO  covidphy ( fullname  ,email, address , qualification  ) VALUES (  '$fullname',    '$email',        '$address' , '$qualification' )");
     
    if ($query)
     {
            echo '<script> alert("New Physicians data Added Successfully.") </script>';
    }
   
 


   

 }


?>

 <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
 
   <link rel="stylesheet" type="text/css" href="navbar.css">
   <title>Physists</title>


   <style>
      body
      {
         
      }
      form
      {
         padding: 100px 100px;
      }
      label
      {
         font-weight: bold;
      }
      input[type=text] , [type=email]
      {
         width: 100%;
         padding: 15px;

      }
      h2
      {

         background-color: skyblue;
         padding: 25px;
      }
          .registerbtn
           {  
  background-color: #4CAF50;  
  color: blue;  
  padding: 16px 20px;  
  margin: 19px 0;  
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
        <ul>
    <li><a href="indexAdmin.php">Admin Home</a></li>
    <li><a href="booknowAdmin.php">Labarotry Testing Records</a></li>
    <li><a href="gtAdmin.php">Group Testing Records</a></li>
    <li><a href="phy.php">Physicians</a></li>
    <li><a href="updatetested.php">Update Covid Result</a></li>
    <li><a href="logout.php">Log out</a></li>
    
</li>
    </div>
 



<form method="post" , action="phy.php">


   <h2 align="center">  New Physician </h2>

   
   
    <label>Full Name</label>
    <input type="text" name="fullname">
    <label> Email</label>
    <input type="email" name="email">
    <label>Address</label>
    <input type="text" name="address">
    <label>Qualification</label>
    <input type="text" name="qualification">
    <button  class="registerbtn" type="submit" name="regphy">
      Add 
    </button> 
</body>
</html>