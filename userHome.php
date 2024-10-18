<?php
    $key = "";
    if(isset($_GET['search'])) 
    {
        $key = $_GET['key'];
       
      header("Location: filterMovies.php?key=".$key);


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            }
        .bg{
            
            
            height: 100%;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.90), rgba(0, 0, 0, 0.70)), url("image/userhome.jpg");

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .dropdown-menu {
        --bs-dropdown-link-active-bg: #ED0A0A;
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

        <div class="bg">
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
						<a class="nav-link active" style="color: #ED0A0A;" aria-current="page" href="userHome.php">Home</a>
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

            <br><br><br>

            <div class="text-center text-white">
                    <h1>Watch movies & tv shows online </h1>
                    
                    <div class="container form-outline d-flex justify-content-center">
                        <form class="d-flex col-md-5"  role="search" action="userHome.php" method="GET">
                            <input class="form-control me-2 text-white" name="key" type="search" placeholder="Search" aria-label="Search" style="background-color: transparent; border: #ED0A0A solid;">
                            <button class="btn btn-danger" name="search" style="background-color: #ED0A0A;" type="submit">Search</button>
                        </form>
                    </div>
            </div>
        </div>
        
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>