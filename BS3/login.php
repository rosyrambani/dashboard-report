<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Fluid Brands Inc.</title>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <label for="username">User Name</label>
            <input class="form-control" id="username" name="username" type="text" placeholder="Enter Your User Name">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Enter Your Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-block"/>
          <!-- <a class="btn btn-primary btn-block" href="homepage.html">Login</a> -->
        </form>
        <?php

        $host="localhost";
        $user="root";
        $password="";
        $db="demo";

        $con= mysqli_connect($host,$user,$password);
        //check connection

        if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySql:" .mysqli_connect_errno();
        }

        mysqli_select_db($con,"demo");

        if(isset($_POST['username'])){
          $uname=$_POST['username'];
          $password=$_POST['password'];

          $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";

          $result=mysqli_query($con,$sql);

          if(mysqli_num_rows($result)==1){
            echo " You Have Successfully Logged in";
            exit();
          }
          else{
            echo "You Have Entered Incorrect Password";
            exit();
          }
        }

        ?>
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
