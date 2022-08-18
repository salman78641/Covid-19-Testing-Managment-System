 <?php 
$url="localhost";
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"msrclinic");
if(!$conn){

 die('Could not Connect My Sql:' .mysql_error());
}


$sql = "DELETE FROM gt WHERE email='" . $_GET["email"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location: gtAdmin.php"); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>