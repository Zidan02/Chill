<?php

    include 'components\dbconnect.php';

    $showAlret = false;
    $showError = false;


    if(isset($_POST['signup'])){
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];

      

      $existSql = "SELECT * FROM `user_profile` WHERE u_name = '$username' OR email = '$email' ";
      $result = mysqli_query($conn, $existSql);
      $existRows = mysqli_num_rows($result);
      if($existRows > 0){
        $showError = "Username or email or both already exists";
      }

      else
        {if (($password == $cpassword && $username !="" && $email !="")) {
          $sql = "INSERT INTO `user_profile` (`u_name`, `password`, `email`) VALUES ('$username','$password','$email')";
          $result = mysqli_query($conn, $sql);
          if ($result){
            $showAlret = true;
          }
        }
        else {
          $showError = 'Password do not match or fillup all the boxes';
        }
      }
    }
 
?>
<?php 
  include 'components\dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <style>
      body{
        background: black;
      }
        .gradient-custom {

        background: #000000;


}
.custom{
    background-color: rgb(0, 0, 0);
    border: 0.5px solid;
    border-color: #424040;
}
.navbarcustom {
    background-color: transparent !important;
}

    </style>

</head>
<body>

    <div class="header">
      <?php
        if ($showAlret) {
          echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Successfully Created Your Account </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ';
          header("Location: signin.php");
        }
        if ($showError) {
          echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> ' . $showError . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
      ?>
    </div>
    <div class="container-fluid">
              <nav class="navbar navbar-expand-sm bg-light mx-auto ml-2 navbarcustom">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="welcome.php">
                      <img src="components\LOGO-01.png" alt="Logo" width="250" height="auto">
                    </a>
                    
                  </div>
                </nav>
          
          
  </div>  

    <section class="vh-100 gradient-custom">
      <form action="signup.php" method="post">
        <div class="container py-5 h-100 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
              <div class="card custom text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 ">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h3 class="fw-bold mb-2 text-uppercase">Sign up</h3>
                    <p class="text-white-50 mb-5">Please enter your username, email and password!</p>

                    <div class="form-outline form-white mb-4">
                        <label class="form-label ml-3" for="username">Username</label>
                        <input type="text" name="username" class="form-control form-control-md" placeholder="Enter your username here" required>
                      
                    </div>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label ml-3" for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-md" placeholder="Enter your email here" required>
                      
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" name="password" class="form-control form-control-md" placeholder="Enter your password here"required>
                      
                    </div>

                    <div class="form-outline form-white mb-4">
                      <label class="form-label" for="cpassword">Confirm Password</label>
                      <input type="password" name="cpassword" class="form-control form-control-md" placeholder="Enter your password again"required>
                      
                    </div>
      
                    
      
                    <button class="btn btn-outline-danger btn-md px-5 col-sm-12" type="submit" name="signup">Sign Up</button>
    
      
                  </div>
      
                  <div>
                    <p class="mb-0">Already have an account! <a href="signin.php" class="text-50 fw-bold text-decoration-none" style="color: #ED0A0A;">Sign in</a>
                    </p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>