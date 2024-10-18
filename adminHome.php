<?php
    include 'components\dbconnect.php';
    $query = "SELECT movie.m_name, Count(payment.p_id) AS movie_count, SUM(payment.amount) AS sum_amount
                FROM payment
                INNER JOIN movie 
                ON movie.m_id=payment.m_id Group by movie.m_id;"; //joint AND AGGREGRATE
    $result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Admin Home</title>
</head>
<body class="bg-dark">
    <div class="container">
        <h4><span class="text-light">Behold, my gracious presence. I am THE ADMIN. </span><br> <br></h4>
        <a href="upload.php" class="btn btn-outline-success" tabindex="-1" role="button" aria-disabled="true">Upload a Movie</a>
        
        <a href="video_list.php" class="btn btn-outline-warning" tabindex="-1" role="button" aria-disabled="true">Uploaded  Movies</a>
       
        <a href="signout.php" class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true">Sign Out</a>
        
          
    </div>
    <div class="container mt-5">
        
        <table class="table table-dark table-striped border rounded">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Movie Name </th>
                <th scope="col">Buy count</th>
                <th scope="col">Total income</th>
                </tr>
            </thead>
            <?php
            $i = 0;
            
            while ($row = mysqli_fetch_assoc($result)) {
                // echo "<li><a href='view.php?id={$row['m_id']}'>{$row['m_name']}</a></li>";
                $i = $i+1;
            ?>
            <tbody>
                <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $row['m_name'] ?></td>
                <td><?php echo $row['movie_count'] ?></td>
                <td>
                    <?php echo $row['sum_amount'] ?>
                </td>
                </tr>
            
            <?php } ?>
        </table>
        
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>