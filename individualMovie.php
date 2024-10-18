<?php
    include 'components\dbconnect.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM `movie` WHERE m_id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
        }
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

<body>
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
						<a class="nav-link" style="color: #828282;" href="userProfile.php">Profile</a>
					</li>
					
                </ul>
            </div>
        </div>
		<div class="ml-auto">
          <a href="signout.php" class="text-decoration-none"><button class="btn btn-outline-danger me-2" name="signout" id="signout" type="button" style="margin-left: -60%;"> Sign Out </button></a>
          
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo $row ['m_banner'] ?>" class="img-fluid rounded" alt="Movie Banner" style="width: 18rem;">
            </div>
            <div class="col-sm-8 text-light">
                <h4><?php echo $row ['m_name'] ?></h4>
                <p class="fw-bold">IMDb Rating: <?php echo $row ['m_rating'] ?>/10</p>
                <p>Duration: <?php echo $row ['m_duration']." min" ?></p>
                <p>Release Year: <?php echo $row ['m_year'] ?></p>
                <p>Genre: <?php echo $row ['m_genre'] ?></p>
                <p>Description: <?php echo $row ['m_description'] ?></p>

                <p class="fw-bold fs-4 text mt-3 text-warning">Price: <?php echo $row ['m_price']." Taka" ?></p>
                <a class="btn btn-danger btn-lg" href="payment.php?id=<?php echo $row['m_id'] ?>" style="background-color: #ED0A0A;">Buy Now</a>
            </div>
        </div>
        <div class="container ratio ratio-16x9 mt-3">
            <iframe src="<?php echo $row ['m_trailer'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

    <div class="foot mt-2">
    
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