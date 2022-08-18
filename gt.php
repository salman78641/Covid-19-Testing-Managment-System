<?php



$servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$conn = mysqli_connect($servername,$username,  $password, $dbname);

if ($conn -> connect_error)
{
    die("connetion failed");
}

 
if(isset($_POST['submit']))
{

    $email =$_POST['email'];
    $fullname= $_POST['fullname'];
    $mobilenumber=$_POST['mobilenumber'];
    $message = $_POST['message'];

 
$sql=mysqli_query($conn,"SELECT * FROM gt where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
    exit;
}
else
{
   
  
    
        $query="INSERT INTO gt (fullname, email, mobilenumber, message ) VALUES ('$fullname',  '$email', '$mobilenumber', '$message')";

        echo("succesfull");
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
         if ($sql)
{
         header("Location: gtresult.php");
}    
     
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
           <link rel="stylesheet" type="text/css" href="navbar.css">
	<title>Group Testing</title>



          <style>
                                     .containershin
                                                      {
                                                           padding: 100px;
                           }
               
 input[type=text], input[type=email],input[type=option], textarea
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
    
    <li><a href="index.php">Home</a></li>
    <li><a href="About.html">About</a></li>
    <li><a href="gt.php">Group Testing</a>
  
    <li><a href="FAQs.html">FAQs</a></li>
      
    <li><a href="booknowprocess.php">Book Now</a></li>
  </ul>
</div>
 

 
<div>

          <div class="space">
           </div>


          <h2 align="center" style="color:red; font-type:bold;">Request a Test at Your Location in the Cantt Area </h2>
          <hr>
          <p align="center">For group rates (minimum 10 tests) or general inquiries please enter your name, email, and phone number.</p><p align="center"> Any other details about your appointment request, including address, date, and time should be in the message section.</p><p align="center"> Once we receive your request, we’ll reach out with details for COVID-19 testing at your location.</p>



          </div>
          <div class="containershin">
          <form action="gt.php" method="post" enctype="multipart/form-data" name="regForm">
          	 
          		 
          	<label>Full Name </label>
          	<input type="text" placeholder="Full Name" name="fullname">
           

          	 <label>Email</label>
          	<input type="email" placeholder="Email" name="email"> 

          	 	<label>Mobile Number</label>
          	<select for="mesnum">+92
        <option>+92</option>
                 <input type="text" size="10" placeholder="Mobile Number" name="mobilenumber"> 
</select>

            <label>Message</label>
          	<textarea name="message"></textarea> 

                 

          	<input class="registerbtn" type="submit" value="Submit" name="submit">
                      
          </form>
      </div>



</body>
</html>



