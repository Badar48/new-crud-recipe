<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://kit.fontawesome.com/27bbfc67d4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="chef.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light ">
     <a href="chef.php" class="navbar-brand  text-white ml-3"> <img class= " logotop" width="150" src="img/just.png"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav w-100">
      <li class="nav-item active ml-auto">
        <a class="nav-link  font-weight-bold" href="logout.php">Sign Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>

  </div>
</nav>
<?php
include("slider.php");
?>
  <?php

if( $_SESSION['role']==" Chef ")
 echo" <a href='chefdashboard.php'><button>Create Recipe</button></a>"

?>

    <div class="row justify-content-center w-100 mt-4 mb-0 no-gutters">
      <h1 class="hots font-weight-bold">Top Deals For You!</h1>
    </div>

 <!-- <div class="row no-gutter mt-md-5  pb-5">
    <div class="col-md-3 text-center mt-5 mt-md-0">
      <div class="pb-3 mx-4 border roundborder">
        <img class=" mb-3 w-268" src="img/deal8.jpg">
        <h5>Special Taster</h5>
         <img  src="img/star.png">
        <p class="text-muted zoomer mt-2">$2.35-$5.23</p>
      </div>
    </div>
 </div> -->


<?php
$conn = mysqli_connect("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","n9vogak9ayip1yr2  ","x7vbydainteyeo9o","crud");
  if($conn->connect_error){
    die('connection is failed:'.$conn->connect_error);
  }
    $sql = "select * from recipes";
    $recipes = $conn-> query($sql);
    if ($recipes-> num_rows > 0) {
      echo"<div class='row no-gutters mt-md-0 '>";
      while ($recipe = $recipes -> fetch_assoc()) {
        echo"<div class='col-md-3 mb-2 text-center mt-5 mt-md-5'>";
          echo "<div class='pb-3 mx-4 border roundborder'>";
            echo"<img class=' mb-3 w-268' src='img/deal8.jpg'>";
            echo "<h5>".$recipe["name"]."</h5>";
            echo"<img  src='img/star.png'>";
            echo "<p class='text-muted zoomer mt-2'>".$recipe["price"]."</p>";

if( $_SESSION['role']!=="User"){
            echo "<div class=' d-flex justify-content-around'>";
            echo"<a  class='mr-5' href='update.php?id=$recipe[id] &rn=$recipe[name] &rp=$recipe[price]'>Edit</a>";
            echo"<a href='delete.php?id=$recipe[id]'onclick=' return checkdelete()'>Delete</a>";
            echo "</div>";
          }
           echo " </div>";
        echo " </div>";
         // echo "<h5>".$recipe["name"]."</h5><p>".$recipe["price"]."</p>";
      }
      echo "</table>";
    }
    else{
      echo "o result";
    }
    $conn->close();
include("footer.php");

?>

<script>
function checkdelete(){
  return confirm('Are you sure you want to delete it??');
}
</script>


</body>
</html>
