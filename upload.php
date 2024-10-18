<?php
    include 'components\dbconnect.php';
    $showAlret = false;
    $showError = false;
    if(isset($_POST['upload'])){
        $targetDirection = "uploads/";
        $title = $_POST["title"];
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDirection . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        
        $rating = $_POST["rating"];
        $year = $_POST["year"];
        $duration = $_POST["duration"];
        $genre = $_POST["genre"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $trailer = $_POST["trailer"];

        $b_targetDirection = "banners/";
        $b_title = $_POST["b_title"];
        $b_fileName = basename($_FILES["b_file"]["name"]);
        $b_targetFilePath = $b_targetDirection . $b_fileName;
        $b_fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        
        //m-path e targetFilepath ta e include koira dibo

        $allowedTypes = array("mp4", "avi", "mov", "mkv");
        $ballowedTypes = array("jpg", "jpeg", "png");

        if (in_array($fileType,$allowedTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                move_uploaded_file($_FILES["b_file"]["tmp_name"], $b_targetFilePath);
                $sql = "INSERT INTO `movie`(`m_name`,`m_rating`, `m_year`, `m_duration`, `m_genre`, `m_price`, `m_description`, `m_trailer`, `m_path`, `m_file`, `m_banner`) VALUES ('$title','$rating','$year','$duration','$genre','$price','$description','$trailer','$targetFilePath','$fileName', '$b_targetFilePath')";
                $result = mysqli_query($conn,$sql);
                if($result) {

                    $showAlret = true;
                }

            }
            else {
                $showError = 'Something went wrong';
              }
        }
        else {
            $showError = 'Invalid file format';
        }
     }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Upload</title>
</head>
<body class="bg-black">
    <div class="header">
        <?php
            if ($showAlret) {
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Video Uploaded Successfully </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
            }
            if ($showError) {
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> ' . $showError . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        ?>
        </div>

        <a href="adminHome.php" class="btn btn-outline-warning" tabindex="-1" role="button" aria-disabled="true">Admin Home</a>
    
    <div class="container col-sm-12 col-md-7 col-lg-9 bg-dark text-light mt-3">
		
        <h2 class="text-center mb-5">Upload Movies and their informations</h2>
        <div class="col-sm-12 col-md-7 col-lg-6 m-auto">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">

                    <label for="title">Title:</label>
                     <input class="form-control form-control-sm" type="text" name="title" required><br>

                    <label for="file" class="form-label">Upload the file here:</label>
                    <input class="form-control form-control-sm" name="file" type="file" accept="video/*" required> <br> 

                    <label for="banner">Banner:</label>
                     <input class="form-control form-control-sm" type="text" name="b_title" required><br>

                    <label for="file" class="form-label">Upload the banner file here ("jpg", "jpeg", "png"):</label>
                    <input class="form-control form-control-sm" name="b_file" type="file" accept="image/*" required> <br> 
                    
                    <label for="rating">IMDb Rating:</label>
                    <input class="form-control form-control-sm" type="text" name="rating" required><br>
                    
                    <label for="year">Released year:</label>
                    <input class="form-control form-control-sm" type="number" name="year" required><br>

                    <label for="duration">Duration:</label>
                    <input class="form-control form-control-sm" type="text" name="duration" required><br>

                    <label for="genre">Genre:</label>
                    <input class="form-control form-control-sm" type="text" name="genre" required><br> 
                    
                    <label for="price">Price:</label>
                    <input class="form-control form-control-sm" type="number" name="price" required><br> 

                    <label for="description">Description:</label>
                    <input class="form-control form-control-sm" type="text" name="description" required><br>

                    <label for="trailer">Trailer (embed):</label>
                    <input class="form-control form-control-sm" type="text" name="trailer" required><br>
                    <br>


                    <input type="submit" name="upload" value="Upload" class="btn btn-secondary ml-3">
                </div>

            </form>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>