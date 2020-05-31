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
            <h5 class="card-title text-center">Sign Up</h5>
            <form action="signup.php" method="post" class="form-signin">
               <div class="form-label-group">
                <input type="text" id="inputText" class="form-control" name="name" placeholder="Enter Username" required autofocus>
                <label for="inputText">Name</label>
              </div>
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <div class="form-check form-check-inline">
                <div class="mx-auto">
                    <input class="form-check-input " type="radio" name="role" id="exampleRadios4" value="User" required>&nbsp;User

                   <input class="form-check-input ml-2 ml-md-3 " type="radio" name="role" id="exampleRadios5" value="Chef" required>&nbsp;Chef
                   <input class="form-check-input ml-1 ml-md-3" type="radio" name="role" id="exampleRadios6" value="Admin" required>&nbsp;Admin
                </div>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
             <a href="#" class="btncolr"> <button class="btn btn-lg btn-color mb-2 btn-block text-uppercase " type="submit" name="submit" value="submit" >Sign up</button></a>
                <a  class="text-dark ml-2 font-weight-bold" href="index.php">Login</a>
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
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];
 $conn = mysqli_connect("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "n9vogak9ayip1yr2",
  "x7vbydainteyeo9o","vu7f0ed5g13cgqee");
  if($conn->connect_error){
    die('connection is failed:'.$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into login(name, email, password, role) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $role);
    $execval = $stmt->execute();
    echo "Registration successfully...";

    $_SESSION['id']= $stmt->insert_id;
    $_SESSION['role']=$_POST['role'];
    $_SESSION['email']=$_POST['email'];
    $stmt->close();
    $conn->close();
    if( $_SESSION['role']=="Admin"){
    header('location:chef.php');
  }
    if( $_SESSION['role']=="User"){
    header('location:chef.php');
  }
  if( $_SESSION['role']=="Chef"){
    header('location:chefdashboard.php');
  }
  }
}
?>






