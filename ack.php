<?php 

   
 $servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$con = mysqli_connect ($servername,$username,  $password, $dbname);

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $Email = $_REQUEST['email']; 
}
 ?>
 











<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acknowledment Paper</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
 <style type="text/css">
     .contain
     {
        display: flex;
        background-color: dodgerblue;
        flex-direction: column;
     }
     .contain div {
  background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
}
h2
{
    text-align: center;
    background-color: dodgerblue;
    padding: 68px;
}

 </style>











</head>











<body>




    <div class="menu-area">
      <h1>MSR Covid Clinic</h1>
    </div>
<div class="menu-area">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="About.html">About</a></li>
    <li><a href="gt.php">Group Testing</a>
         
    <li><a href="FAQs.html">FAQs</a></li>
    <li><a href="booknowprocess.php">Book Now</a></li>
  </ul>
</div>
<?php
 
 if (!empty($Email))
   
  {
    $result=mysqli_query($con,"SELECT * FROM  booknow where email='$Email'");
     
 $rows = mysqli_fetch_array($result) 
     
    ?> 
                         <h2>Patient Acknowlegment Paper</h2>
    <br>
    <br>

        <div class="contain">
              
                
                <div> Covid-19 Result:  <?php echo $rows['result'];?></div> 

                
                <div>Test Type: <?php echo $rows['testtype'];?></div> 
                <div> Email:   <?php echo $rows['email'];?></div> 
                
                <div>Identity Card:<?php echo $rows['id'];?></div> 
                <div>First Name:<?php echo $rows['fname'];?></div> 

                <div>Last Name:<?php echo $rows['lname'];?></div> 
             


</div>

          <?php
       
   
  
}
else
{
    ?>
      <script type="text/javascript">
             
        alert("Sorry, Something went wrong.");       
    
   
         </script> 
         <?php
}

 ?>



 </body>
</html>