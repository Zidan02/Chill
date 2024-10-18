<?php
    include 'components\dbconnect.php';
    $showAlret = false;
    $showError = false;
    $id = $_GET['id'];
    $query = "SELECT * FROM `movie` WHERE m_id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['update'])){
        
        $title = $_POST["title"];
       
        
        
        
        $rating = $_POST["rating"];
        $year = $_POST["year"];
        $duration = $_POST["duration"];
        $genre = $_POST["genre"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $trailer = $_POST["trailer"];

        
        
       
      
      
        
        //m-path e targetFilepath ta e include koira dibo

                // $sql = "INSERT INTO `movie`(`m_name`,`m_rating`, `m_year`, `m_duration`, `m_genre`, `m_price`, `m_description`, `m_trailer`, `m_path`, `m_file`, `m_banner`) VALUES ('$title','$rating','$year','$duration','$genre','$price','$description','$trailer','$targetFilePath','$fileName', '$b_targetFilePath')";
                $sql = "UPDATE `movie` SET `m_name`='$title',`m_rating`='$rating',`m_year`='$year',`m_duration`='$duration',`m_genre`='$genre',`m_price`='$price',`m_description`='$description',`m_trailer`='$trailer' WHERE m_id = '$id'";
                $result = mysqli_query($conn,$sql);
                
                if($result) {

                    $showAlret = true;
                }

            
                else {
                    $showError = 'Something went wrong';
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
            <strong>Updated Successfully </strong>
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
		
        <h2 class="text-center mb-5">Update Movie id: <?php echo $row ['m_id'] ?> informations</h2>
        <div class="col-sm-12 col-md-7 col-lg-6 m-auto">
            <form action="update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">

                    <label for="title">Title:</label>
                     <input class="form-control form-control-sm" value="<?php echo $row ['m_name'] ?>" type="text" name="title" value=""><br>

                    
                    

                    
                    
                    <label for="rating">IMDb Rating:</label>
                    <input class="form-control form-control-sm" value="<?php echo $row ['m_rating'] ?>" type="text" name="rating" required><br>
                    
                    <label for="year">Released year:</label>
                    <input class="form-control form-control-sm" value="<?php echo $row ['m_year'] ?>" type="number" name="year" required><br>

                    <label for="duration">Duration:</label>
                    <input class="form-control form-control-sm" value="<?php echo $row ['m_duration'] ?>" type="text" name="duration" required><br>

                    <label for="genre">Genre:</label>
                    <input class="form-control form-control-sm" value="<?php echo $row ['m_genre'] ?>" type="text" name="genre" required><br> 
                    
                    <label for="price">Price:</label>
                    <input class="form-control form-control-sm" value="<?php echo $row ['m_price'] ?>" type="number" name="price" required><br> 

                    <label for="description">Description:</label>
                    <input class="form-control form-control-sm" value="<?php echo $row ['m_description'] ?>" type="text" name="description" required><br>

                    <label for="trailer">Trailer (embed):</label>
                    <input class="form-control form-control-sm" value="<?php echo $row ['m_trailer'] ?>" type="text" name="trailer" required><br>
                    <br>


                    <input type="submit" name="update" value="Update" class="btn btn-secondary ml-3">
                </div>

            </form>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>