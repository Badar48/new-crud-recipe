<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://kit.fontawesome.com/27bbfc67d4.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

 <div class="formbg min-vh-100">
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5 mb-5">
        <div class="card card-signin my-5">
          <div class="card-body pt-4 pb-5">
            <h5 class="card-title text-center">Sign In</h5>
            <form action="index.php" method="post" class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
             <a href="#" class="btncolr"> <button class="btn btn-lg btn-color btn-block text-uppercase mb-2 " type="submit" name="submit" value="submit" >Sign in</button></a>
             <a  class="text-dark ml-2 font-weight-bold" href="signup.php">sign up</a>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php

$conn = mysqli_connect("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "n9vogak9ayip1yr2",
  "x7vbydainteyeo9o","vu7f0ed5g13cgqee");


if (isset($_POST['submit'])) {
	$query=mysqli_query($conn, "select * from login where email='".$_POST['email']."' and password='".$_POST['password']."'");
	if (mysqli_num_rows($query)>0) {
		$_SESSION['email']=$_POST['email'];
    $_SESSION['id']= $query->id;
    $_SESSION['role']= $query->role;
		header('location:chef.php');
	}
	else{
		echo "<script>alert('Wrong Username And Password')</script>";
	}

}

?>
