<?php

$url="localhost";
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"msrclinic");
if(!$conn){

 die('Could not Connect My Sql:' .mysql_error());
} 
try {


	$sql = "SELECT 'file' FROM booknow WHERE file='" . $_GET['file'] . "'";
 $myfiles = $_GET['file'];
  
if (mysqli_query($conn, $sql)) {
  
    $myfile = fopen("uploads/$myfiles", "r") or die("Unable to open file!");
 while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);


	
}


catch (Exception $e) {
	echo $e;
}


?>
 