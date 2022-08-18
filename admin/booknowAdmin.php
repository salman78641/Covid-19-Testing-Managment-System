<?php


 $servername = "localhost";
 $username='root';
$password = "";
$dbname = "msrclinic";
$con = mysqli_connect ($servername,$username,  $password, $dbname);



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<title>Labratory Testing Results </title>

	<style type="text/css">

 .iamgen
 {
	 display:flex;
	 flex-direction: column;
	 justifiy-content:center;
 }
		form
		{
			padding: 100px;
		}

		                                     .containershin
	                                                      {
	                                                           padding: 100px;
	                           }

	 input[type=text], input[type=email],input[type=option], textarea , select
	 {
	  width: 100%;
	  padding: 15px;
	  margin: 5px 0 22px 0;
	  display: inline-block;
	  border: none;
	  background: #f1f1f1;
	}

	select
	{
		background-color: lightblue;
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
	   .contain
     {
        display: flex;

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
table
{
    border-collapse: separate;
}
th,td,tr
{
    border: 1px solid black;
}
td
{
     background-color: none;
}
th
{
    background-color: yellow;
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




  <form action="" method="post" name="loginuser">
		<h2 align="center"> Search Data </h2>

		<div class="iamgen"
		<div>
			<select name="date"> Select Time Span
				<option name="all" value=""> All Records </option>
				<option name="30" value="30"> 30 Days </option>
				<option name ="7" value="7"> 7 Days </option>
			</select>
		</div>
<div>
<select name="testtype"> Select a test type
<option value="RT-PCR Testing"> RT-PCR Testing </option>
<option value="Rapid Antigen Testing"> Rapid Antigen Testing </option>
<option value="Flu A/B"> Flu A/B </option>
</select>
</div>
<div>
<button class="registerbtn" type="submit" name="search" id="search" >
	Search
</button>
</div>
</div>
</body>
</html>


<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $Type = $_REQUEST['testtype'];
  $Days= $_REQUEST['date'];


  

    $resultfor7days=mysqli_query($con,"SELECT * FROM  booknow where testtype='$Type' AND  timestampp BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()");
         $resultfor30days=mysqli_query($con,"SELECT * FROM  booknow where testtype='$Type' AND  timestampp BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()");
             $resultforalldays=mysqli_query($con,"SELECT * FROM  booknow where testtype='$Type' ");
    ?>
                         <h2><?php    echo $Type ?> </h2>
                     
    <br>
    <br>

        <div class="contain">

<table>

              <tr>

                  <th> First Name</th>

                  <th> Midle Name</th>

                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Identity Card</th>
                  <th>Address 1</th>
                  <th>Address 2</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Postal Code</th>
                  <th>Phone</th>
                  <th>Extra Phone</th>
                  <th>Email</th>
                  <th>File</th>
                  <th> Card type </th>
                  <th> Card Owner Name </th>
                  <th>Card Number</th>
                  <th>Expiration Date</th>
                  <th>Delete Data</th>

              </tr>

              <?php

 $i=0;
 if($Days==7)
 $myquery= $resultfor7days;
 if ($Days==30)
 $myquery= $resultfor30days;
 if($Days=='')
 $myquery= $resultforalldays;
               while($rows = mysqli_fetch_array($myquery)) {

                 ?>

         <tr>

                      <td><?php echo $rows['fname'];?></td>

                      <td><?php echo $rows['mname'];?></td>

                      <td><?php echo $rows['lname'];?></td>

                      <td><?php echo $rows['Gender'];?></td>

                      <td><?php echo $rows['dob'];?></td>


                      <td><?php echo $rows['id'];?></td>

                      <td><?php echo $rows['add1'];?></td>

                      <td><?php echo $rows['add2'];?></td>

                      <td><?php echo $rows['city'];?></td>

                      <td><?php echo $rows['state'];?></td>

                      <td><?php echo $rows['ZIP'];?></td>

                      <td><?php echo $rows['phone'];?></td>

                      <td><?php echo $rows['Exphone'];?></td>

                      <td><?php echo $rows['email'];?></td>

                      <td><a href="files.php?file=<?php echo $rows['file'];?>"><?php echo $rows['file']; ?></a></td>

                      <td><?php echo $rows['card'];?></td>

                      <td><?php echo $rows['CardOwnName'];?></td>

                      <td><?php echo $rows['cardnum'];?></td>

                      <td><?php echo $rows['expdate'];?></td>

                      <td><a href="delete.php?email=<?php echo $rows['email']; ?>  ">Delete</a></td>
<?php

}
$i++;

}
 ?>

</table>


</div>

            



  


