 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="navbar.css">
 	<title>Check Out</title>
  <style type="text/css">
    .wow7
    {
   
        align-items: center;
        text-align: center;

    }
    .myclass
    {
      margin-top: 60px;
      text-align: center;
      font-weight: bold;
      font-size: 23px;
    }
  </style>
 </head>
 <body>
    <div class="menu-area">
      <h1>MSR Covid Clinic</h1>
    </div>
<div class="menu-area">
  <ul>
    <li><a href="index.html">Home</a></li>
 
    <li><a href="gt.html">Group Testing</a>
   
    <li><a href="booknow.html">Book Now</a></li>

    <li><a href="logoutuser.php">Log out</a></li>
  </ul>
</div>

<?php
 $servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$conn = mysqli_connect ($servername,$username,  $password, $dbname);


session_start();

$email= $_SESSION['email'];
echo $_SESSION['email'];
 $result=mysqli_query($conn,"SELECT * FROM booknow where email=$_SESSION['email']");
  
 
    $i=0;
    while($rows = mysqli_fetch_array($result)) {

      ?>
               
              
                <div class="wow7">

                <b ><?php echo $rows['testtype'];?></b> <br>

                <b><?php echo $rows['fname'];?></b> <br>

                <b><?php echo $rows['mname'];?></b> <br>

                <b><?php echo $rows['lname'];?></b> <br>

                <b><?php echo $rows['Gender'];?></b> <br>
 

                
                <b><?php echo $rows['id'];?></b> <br>
 
                <b><?php echo $rows['email'];?></b> <br>
  
               </div>
                 
              
 
            <?php
        }

    $i++;
    ?>

 
</div>
 </body>
 </html>