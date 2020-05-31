<?php
include("chef.php");
// sql to delete a record
$id= $_GET['id'];
$conn = mysqli_connect("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","n9vogak9ayip1yr2  ","x7vbydainteyeo9o","crud");
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
