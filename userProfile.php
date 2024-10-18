<?php
    include 'components\dbconnect.php';
    session_start();
    $id = $_SESSION['id'] ?? 'NULL';
    
    $query = "SELECT * FROM movie WHERE m_id IN ( SELECT m_id FROM payment WHERE u_id = $id)"; //subquery
    $result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
       .navbarcustom {
	   background-color: transparent !important;
	   /* height: 20%; */
	   /* position: fixed; */
	   /*width: 90%; */
   

	   }
	   .text{
		 color: white;
	   }
	 .btn:hover{
		 background-color: #ed0a0ae0; 
		 color: white;
	 }
     .dropdown-menu {
        --bs-dropdown-link-active-bg: #ED0A0A;
     }

   </style>
</head>
<body style="background-color: black;">
    
        
        <?php
            include 'components\dbconnect.php';
            $userSql = "SELECT `u_id`, `u_name`, `password`, `email` FROM `user_profile` WHERE `u_id`= $id; ";
            $userResult = mysqli_query($conn, $userSql);
            while ($row = mysqli_fetch_assoc($userResult)) {

        ?>

<nav class="navbar navbar-expand-sm navbarcustom">
        <div class="container-fluid">
            <a class="navbar-brand" href="welcome.php">
                <img src="image\LOGO-01.png" alt="Logo" width="200" height="auto">
            </a>
        </div>
        <div class="container-fluid text-decoration-none" style="margin-left: -30%;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav justify-content-end fs-5">
					<li class="nav-item">
						<a class="nav-link active" style="color: #828282;" aria-current="page" href="userHome.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: #828282;" href="userNewMovies.php">New Movies</a>
					</li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #828282;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=Action">Action</a></li>
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=Animation">Animation</a></li>
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=Adventure">Adventure</a></li>
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=Drama">Drama</a></li>
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=Mystery">Mystery</a></li>
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=Fantasy">Fantasy</a></li>
                        </ul>
                    </li>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #828282;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Year
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=2023">2023</a></li>
                            <li><a class="dropdown-item" style="color: #828282;" href="filterMovies.php?key=2022">2022</a></li>
                            
                        </ul>
                    </li>
					<li class="nav-item">
						<a class="nav-link" style="color: #ED0A0A;" href="userProfile.php">Profile</a>
					</li>
					
                </ul>
            </div>
        </div>
		<div class="ml-auto">
          <a href="signout.php" class="text-decoration-none"><button class="btn btn-outline-danger me-2" name="signout" id="signout" type="button" style="margin-left: -60%;"> Sign Out </button></a>
          
        </div>
    </nav>

        
            <div class="container emp-profile text-light">
                <form method="post">
                    
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5 class="text-uppercase">
                                            <?php echo $row['u_name'] ?>
                                        </h5>                                 
                                
                            </div>
                        </div>
                        
                    
                    
                        <div class="container-fluid col-md-8 text-light">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <h3>About</h3>
                                <hr class="my-3">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>User Id</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['u_id'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['u_name'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['email'] ?></p>
                                                </div>
                                            </div>
                                            
        <?php } ?>
                                </div>
                                <hr class="my-3">
                            </div>
                        </div>
                                
                </form>           
            </div>

            <div class="container">
            
                <h3 class="text-light">Your Movies</h3>

                    <div class="row">
                        <?php
                            
                                while ($row = mysqli_fetch_assoc($result)) {                    

                        ?>
                        <div class="col-md-6 col-lg-4 my-2">
                            <div class="card" style="width: 18rem; height: 31rem;">
                                <img src="<?php echo $row ['m_banner'] ?>" class="card-img-top" alt="..." style="height: 300px;">
                                <div class="card-body bg-dark text-light">
                                    <h5 class="card-title fw-bold"><a class="text-decoration-none text-light" href="userView.php?id=<?php echo $row['m_id'] ?>"><?php echo $row['m_name'] ?></a></h5>
                                    <p class="card-text-"><?php echo substr($row['m_description'], 0, 50) . '...'; ?></p>
                                </div>
                                <div class="card-footer bg-secondary">
                                    <small class="fs-6 text text-warning fw-bold"><?php echo $row['m_price']." Taka" ?></small>
                                </div>

                            </div>
                        </div>
                        <?php }
                        ?>
                    </div>
            </div>
            <div class="foot">
    
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #9e0909;"
            
            >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
    
        <!--Grid row-->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
                Chill
            </h6>
            <p>
                Watch Movies, HD Movies, Watch Movies and TVshow - Watch
                Movies Online. You can watch free movies online anytime, on 
                any device
            </p>
            </div>
        

            
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
            <p>
                Chill Home 
            </p>
            <p>
                Devices
            </p>
            <p>
                Blog
            </p>
            <p>
                Contact
            </p>
            </div>
        

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
                Useful links
            </h6>
            <p>
                Movies
            </p>
            <p>
                TV Shows
            </p>
            <p>
                Horror
            </p>
            <p>
                Other
            </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            
            <p><i class="fas fa-envelope mr-3"></i> chill@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 0123456789</p>
            <p><i class="fas fa-print mr-3"></i> + 9876543210</p>
            </div>
            
        </div>
    
    

        <hr class="my-3">

        <!-- Section: Copyright -->
        <div class="text-center p-3">
    © 2023 Chill . All rights reserved. Privacy Policy | Online Movie Streaming
    </div>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>
<!-- End of .container -->

            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
