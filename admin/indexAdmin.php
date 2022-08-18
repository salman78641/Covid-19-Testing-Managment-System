<?php 


  $url="localhost";
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"msrclinic");


$result = mysqli_query($conn,"SELECT * FROM booknow");
$rows = mysqli_num_rows($result);


$pos = mysqli_query($conn,"SELECT * FROM booknow where result='positive'");
$positive = mysqli_num_rows($pos);


$neg = mysqli_query($conn,"SELECT * FROM booknow where result='negative'");
$negative = mysqli_num_rows($neg);


$gt = mysqli_query($conn,"SELECT * FROM gt");
$group = mysqli_num_rows($gt);


$ph = mysqli_query($conn,"SELECT * FROM covidphy");
$phy = mysqli_num_rows($ph);


?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
  
<html lang="en">
<link rel="stylesheet" type="text/css" href="navbar.css">
<style type="text/css">
  .briefcase
{
   

  padding: 150px 100px;

        background-image: url('testcovid.jpg');
         background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: lightcyan;
}
 
.briefcase h1
{
   text-align: center; 
     color: lightcoral;
     font-size: 34px;


}
 
.briefcase p
{
     text-align: center;
     color: lightsalmon;
     font-size: 19px;


}
  body
  {
    
  }
  .satmain
  {
    padding: 130px; 
    display: flex;
  flex-direction: column;
  background-color:  ;

  }
  .satmain h1
  {
    text-align: center;
    font-weight: bold;
    font-size: 45px;
    background-color: darkgoldenrod;
    padding: 36px;

  }
   .statelab
   {
    padding: 36px;
    background-color: lavender ;
    font-size: 23px;

   }
   .statesgt
   {
    padding: 36px;
    background-color: gainsboro;
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
    <li><a href="indexAdmin.php">Admin Home</a></li>
    <li><a href="booknowAdmin.php">Labarotry Testing Records</a></li>
    <li><a href="gtAdmin.php">Group Testing Records</a></li>
    <li><a href="phy.php">Physicians</a></li>
    <li><a href="updatetested.php">Update Covid Result</a></li>
    <li><a href="logout.php">Log out</a></li>
    
</li>
</div>
 
<div class="briefcase">

<h1>Covid-19 testing in Multan and Lahore </h1>

<p> Visit our office in Multan and Lahore for Covid-19 testing or we will serve you at your location for group testing of 5 or more. </p>
<p>MSR Covid Clinic </p>
<P>MON-FRI 7AM-7PM</P>
<p>SAT-SUN 8AM-4PM</p>
<p>Located on the corner of jinnah Park, near the behria town Planning parking lot.</p>
<p>This is a walk-up site. Patients will need to park and walk-up to the site.</p>

</div>

<div class="satmain">
<h1> Statistics </h1>
 
<div class="statelab">
  <p> Total number of patients applied for Laboratory Testing : <?php echo " $rows";  ?> </p>
</div>
 <div class="statelab">
  <p> Total number of patients Tested POSITIVE for Covid-19 in Laboratory Testing : <?php echo " $positive";  ?> </p>
</div>
 <div class="statelab">
  <p> Total number of patients Tested NEGATIVE for Covid-19 in Laboratory Testing : <?php echo " $negative";  ?> </p>
</div>
  <div class="statesgt">
  <p> Total number of patients applied for Covid-19 in Group Testing :         <?php echo " $group";  ?> </p>
</div>
  <div class="statesgt">
  <p> Total number of  Physicists :         <?php echo " $phy";  ?> </p>
</div>
 <div>
</body>
</html>


