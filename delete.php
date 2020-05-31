<?php
include("chef.php");
// sql to delete a record
$id= $_GET['id'];
$conn = mysqli_connect("localhost","root","","crud");
  if($conn->connect_error){
    die('connection is failed:'.$conn->connect_error);
  }
$sql = "DELETE FROM recipes WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Record Deleted')</script>";
  ?>
<META HTTP-EQUIV= "Refresh" CONTENT="0; URL=chef.php">
<?php
}
else {
  echo "Error deleting record: " .$conn->error;
}

$conn->close();
?>
