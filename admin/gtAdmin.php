  
 <?php 
    $url="localhost";
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"msrclinic");
if(!$conn){

 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM gt");
   


    
?> 
 
<!DOCTYPE html> 

<html lang="en"> 

  
<head> 

    <meta charset="UTF-8"> 

    <title>GFG User Details</title> 
<link rel="stylesheet" type="text/css" href="navbar.css">
    

    <style> 
        h1
        {
            text-align: center;
            font-size: 29px;
            background-color: gainsboro;
            padding: 34px;
        }

 td ,th
 {
    border: 1px solid black;
    height: 10px;
    width: 10px;
 }
 table
 {
   width: 100%;
    height: 100%;
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
</div>

    <section> 

        <h1>Group Testing</h1> 

    <br>
      <br>

        <table> 

            <tr> 

                 
                <th>Full Name</th>
                <th>Email</th>
                <th>Mobile Number</th> 

                <th> Message</th> 
                <th> Delete</th>
 
            </tr> 
         

            
   <?php
    $i=0;
    while($rows = mysqli_fetch_array($result)) {
    ?>

            <tr> 
              
                <td><?php echo $rows['fullname'];?></td> 

                <td><?php echo $rows['email'];?></td> 

                <td><?php echo $rows['mobilenumber'];?></td> 

                <td><?php echo $rows['message'];?></td> 

                 <td><a href="delete2.php?email=<?php echo $rows['email']; ?>  ">Delete</a></td>

           
            </tr> 

                          
 
            <?php
    $i++;
    }
    ?>

        </table> 

    </section> 





</body> 

  
</html> 
