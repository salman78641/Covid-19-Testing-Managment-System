 <?php 
$url="localhost";
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"msrclinic");
if(!$conn){

 die('Could not Connect My Sql:' .mysql_error());
}


$sql = "DELETE FROM booknow WHERE email='" . $_GET["email"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location: booknowAdmin.php"); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>