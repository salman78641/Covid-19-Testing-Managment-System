<?php 

<?php
$servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$conn = mysqli_connect ($servername,$username,  $password, $dbname);

 

 
 if (isset($_POST['register']))
  {
          $testtype = $_POST['testtype'];
 }


  $newdata = "insert into booknow (testtype) values ('$testtype')";
   mysqli_query($conn , $newdata);


 ?>