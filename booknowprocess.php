

<?php
$servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$conn = mysqli_connect($servername,$username,  $password, $dbname);






 if (isset($_POST['register']))
  {


 $testtype = $_POST['testtype'];

  $fname = $_POST['fname'];
    $mname = $_POST['mname'];
      $lname = $_POST['lname'];
        $Gender = $_POST['Gender'];
          $dob = $_POST['dob'];
            $id = $_POST['id'];
              $add1 = $_POST['add1'];
                $add2 = $_POST['add2'];
                  $city = $_POST['city'];
                    $state = $_POST['state'];
                      $ZIP = $_POST['ZIP'];
                        $phone = $_POST['phone'];
                          $Exphone = $_POST['Exphone'];
                            $email = $_POST['email'];

                                 $card = $_POST['card'];
                                     $CardOwnName = $_POST['CardOwnName'];
                                         $cardnum = $_POST['cardnum'];
                                           $expdate = $_POST['expdate'];



 
 


$sql=mysqli_query($conn,"SELECT * FROM booknow where email='$email'");


if(mysqli_num_rows($sql)>0)
{
  ?>
     <script type="text/javascript">

        alert("Email already exists.");


         </script>

    <?php
}



$filename = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $size = $_FILES['file']['size'];


$imageFileType =  strtolower(pathinfo($filename,PATHINFO_EXTENSION));


 $folder="admin/uploads/";
 $new_file_name = strtolower($filename);

 $finalfile=   $new_file_name;
$upload= 1;



       if($size>=100000)
         {
          $upload=0;

         ?> <script type="text/javascript">
             alert ("Sorry, your file is too large.");
         </script>
         <?php
          
        }


  if($imageFileType!= "txt" )

  {
     $upload=0;
 
      
      
  }

   if($upload==1)
   {
    move_uploaded_file($file_loc,$folder.$finalfile);


   }
$ydate= date("Y-m-d");

if($upload==1)
{
   $query  =   mysqli_query($conn, "INSERT INTO booknow (timestampp, testtype , fname ,mname ,lname ,Gender , dob , id ,add1 ,add2 ,city ,state ,ZIP , phone , Exphone , email ,file  , card ,CardOwnName , cardnum , expdate)  VALUES ('$ydate', '$testtype' , '$fname' ,  '$mname', '$lname', '$Gender',  '$dob', '$id',  '$add1',     '$add2'  , '$city' ,   '$state', '$ZIP'  ,'$phone' , '$Exphone' ,  '$email','$finalfile' ,'$card', '$CardOwnName'  ,'$cardnum' ,'$expdate')");

}
else
{
  die("Sorry. Your file is not supported.");
}


    if ($query)
     {

         header("Location: loginuser.html");

    }

}

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">
  <title>Book Now</title>

<link rel="stylesheet" type="text/css" href="navbar.css">










<style>
  body{

  }
form
{
  padding: 100px 100px;
}

 .booknowornnever
{
     padding: 100px;
     align-items: "center";
}
 input[type=text] , input[type=email] ,input[type=country] ,input[type=date]
{


      width: 100%;
   border: solid black 0.1cm;
  padding: 18px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;

}
select
{
  width : 100%;
  padding : 15px;
  margin : 5px;
  color: blue;
  font-size: medium;



}
 option{
   color: aqua;
   font-weight: 400;
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
.pi
{
  background-color: grey;
  padding: 19px;
  text-align: center;
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


<script>


function AvoidSpace(event) {

    var k = event ? event.which : window.event.keyCode;

    if (k == 32) return false;

}

</script>




                   <div class="pi">
                 <h1>  Patient Information </h1>
               </div>
 <div class="space">
          </div>



          <div class="booknowornever">
          <form action="" method="post" enctype="multipart/form-data" name="getbooknow">



        <label>Select a covid test type</label>
<select name="testtype" required>
   <option value="" disabled selected hidden> Select an option</option>
  <option>Rapid Antigen Testing</option>
  <option> RT-PCR Testing</option>
  <option>Flu A/B</option>
</select>



          <lablel> First Name </label>
          <input type="text" name="fname" placeholder="First Name" id="txtEmpName" onkeypress="return AvoidSpace(event)" required>
          <p id="fname"> </p>



          <lablel> Middle Name </label>
          <input type="text" name="mname"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="Middle Name">

 <lablel> Last Name</label>
          <input type="text" name="lname"  id="txtEmpName" onkeypress="return AvoidSpace(event)" placeholder="Last Name">

          <lablel> Gender </label>
          <select for="gender" name="Gender" required>
            <option value="" disabled selected hidden> Select an option</option>
          <option>Male</option>
          <option>Female</option>
          <option>Rather Not Say</option>
        </select>

 <lablel> Date of birth </label>
          <input type="date" name="dob" required>

 <lablel> ID Card </label>
          <input type="text" name="id"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="National Identity Card">


   <lablel> Address Line 1</label>
          <input type="text" name="add1"  required placeholder="Address line 1">

 <lablel> Address Line 2</label>
          <input type="text" name="add2" required placeholder="Address line 2">

 <lablel> City </label>
          <input type="text" name="city" required placeholder="City">

 <lablel> State </label>
          <input type="country" name="state"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="State">

 <lablel> Postal Address</label>
          <input type="text" name="ZIP"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="Postal Address">

 <lablel> Mobile Number </label>
          <input type="text" name="phone"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="Mobile Phone Number">


 <lablel> Secondray Mobile Number </label>
          <input type="text" name="Exphone"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="Secondray Mobile Number">



 <lablel> Email</label>
          <input type="email" name="email"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="Email">





<br>
<br>



<label>Upload a file completely describing your medical conditions.</label>
<br>
<input type="file" name="file" value="file" required>


<h3 align="center" > Payment</h3>

<label>Select Card Type</label>
<select name="card" required>
  <option value="Union Pay"> Union Pay</option>
  <option value="Master Card"> Master Card </option>
  <option value="Visa"> Visa</option>
</select>


<label>Card Owner Name</label>
<input type="text" name="CardOwnName"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="Card Owner Name">

<label> Card Number</label>
<input type="text" name="cardnum"  id="txtEmpName" onkeypress="return AvoidSpace(event)" required placeholder="Card Number">

<label>Expiration Date</label>
<input type="date" name="expdate"  required placeholder="Card Expiration Date">


 <button type="submit"  class="registerbtn" name="register">Register</button>

          </form>
      </div>
</body>
</html>
