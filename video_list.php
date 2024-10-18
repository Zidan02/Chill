<?php

include 'components/dbconnect.php'; // Include your database connection

$sql = "SELECT * FROM movie ORDER BY m_id DESC";
$result = mysqli_query($conn, $sql);

if (isset($_POST['delete'])) {
    include('components/dbConnect.php');
    $del_id = $_POST['idToDelete'];
    $sql2 = "DELETE FROM `movie` WHERE m_id = $del_id";
    if (mysqli_query($conn, $sql2)) {
      header('Location: video_list.php');
    } else {
      echo "Error!" . mysqli_error($conn);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Video List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        
    <table class="table table-dark table-striped border rounded">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Video List</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            // echo "<li><a href='view.php?id={$row['m_id']}'>{$row['m_name']}</a></li>";
        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $row['m_id'] ?></th>
            <td><a class="text-decoration-none text-light" href="adminView.php?id=<?php echo $row['m_id'] ?>"><?php echo $row['m_name'] ?></a></td>
            <td><a href="update.php?id=<?php echo $row['m_id'] ?>" class="text-decoration-none text-light btn btn-dark btn-sm">Update</a></td>
            <td>
                <form action="video_list.php" method="POST"> 
                    <input type="hidden" name="idToDelete" value="<?php echo $row['m_id'] ?>">
                    <button type="submit" name="delete" class="btn btn-dark btn-sm">Delete</a></td>
                </form>
            </tr>
          
        <?php } ?>
    </table>
    
    
        
    
    
    <a href="adminHome.php" class="btn btn-outline-warning" tabindex="-1" role="button" aria-disabled="true">Admin Home</a>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
