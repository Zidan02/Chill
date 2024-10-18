<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body{
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
          .bttn:hover{
            background-color: #ed0a0ae0; 
            color: white;

        }
        .bg{
                    
                    
          height: 44rem;
          width: 100%;
          background: linear-gradient(rgba(0, 0, 0, 0.90), rgba(0, 0, 0, 0.5)), url("image/Wecome.jpg");

          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        footer{
            
            background-color: #666666;
        }
    </style>

</head>
<body class="bg-dark">
    <div class="container-fluid bg">
            <nav class="navbar navbar-expand-sm bg-light mx-auto ml-2 navbarcustom">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="image\LOGO-01.png" alt="Logo" width="200" height="auto">
                  </a>
                  <div class="ml-auto">
                  <a href="signin.php" class="text-decoration-none"><button class="btn bttn btn-outline-danger me-2" id="signin" type="button" style="margin-left: -80%;"> Sign In </button></a>
                    <!-- <button class="btn btn-outline-danger" id="signout" type="button">Sign Up</button> -->
                  </div>
                </div>
              </nav>

              <div class="container-fluid mt-5 text">
                  <p class="text-center text-white fw-bold fs-1">Unlimited movies, TV shows, and more</p>
                  <p class="text-center text-white fw-bold fs-4">Watch Now <a class="btn bttn fs-4 btn-danger" href="signup.php" name="start" style="background-color: #ED0A0A;" type="submit">Get Started ></a></p>
                  
              </div>
            
                
    </div>   

    
   <div class="container-fluid mt-3 bg-black p-5">
        <div class="row">
            <div class="col-sm-6">
              <p class="fs-1 fw-bold text-white text-center">Enjoy on your TV</p>
              <p class="fs-3 text-white text p-3">Watch on Smart TVs, Phone, Desktop, Apple TV, Blu-ray player, and more.</p>
            </div>
            <div class="col-sm-6 text-center ">
                <img src="image\insidious.jpg" class="img-fluid rounded" alt="Movie Banner" style="width: 18rem;">
            </div>
        </div>
   </div>

    <div class="container-fluid mt-3 bg-black p-5"> 
        <p class="col-sm-12 d-inline-flex gap-1 btn btn-dark fs-2">
          What is Chill?
          <button class="btn btn-dark fs-2" style="margin-left: auto;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            >
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body bg-dark text-white">
            CHILL is a entertainment & streaming service that offers to watchTV shows, movies, anime, and more on thousands <br>
            of internet-connected devices. <br>
            You can watch as much as you want, whenever you want to watch. There's always something new to discover and new <br>
            TV shows and movies are added every week!
          </div>
      </div>
      <p class="col-sm-12 d-inline-flex gap-1 btn btn-dark fs-2 mt-2">
         Where can I watch?
        <button class="btn btn-dark fs-2" style="margin-left: auto;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
          >
        </button>
      </p>
      <div class="collapse" id="collapseExample1">
        <div class="card card-body bg-dark text-white">
          Watch anywhere, anytime. Sign in with your account to watch instantly on the CHILL from your computer or any <br>
          internet-connected device and streaming media player
        </div>
      
      </div>
      <p class="col-sm-12 d-inline-flex gap-1 btn btn-dark fs-2 mt-2">
        What can I watch on Chill?
        <button class="btn btn-dark fs-2" style="margin-left: auto;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
          >
        </button>
      </p>
      <div class="collapse" id="collapseExample2">
        <div class="card card-body bg-dark text-white">
          Chill has an extensive library of feature-top films, documentaries, TV shows, anime, and more. Watch as much as you <br>
            want, anytime you want.

        </div>
      
      </div>

    </div>

<!-- Remove the container if you want to extend the Footer to full width. -->
  <div class="foot mt-3">
    
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
                Movies Online. You can watch movies online anytime, on 
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