<?php

session_start();
include("dbconn.php");

if ( !isset($_SESSION['id']) ) {
    ?>
    <script>
        alert("Please Signin..!");
        window.location.href="login-web.php";
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- CSS only -->
    <!-- CSS only -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet" />
    <script src="css/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_website.css">
    <title>Mini Website</title>
</head>

<body>
    <div class="container">
        <?php
        include("includes/header.php");
        ?>
        <div class="row mb-4 pb-4">
            <div id="data" class="col-12 col-md-8 p-md-5 shadow-lg rounded ">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                    <?php
                    
                    $result = mysqli_query($conn, "SELECT * FROM USERS");
                    while ( $rows = mysqli_fetch_array($result) ) {
                      ?>
                      <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><img src="uploads/<?php echo $rows['img']; ?>" alt="Image" height="50px" width="50px"></td>
                        <td><a href="usersUpdate.php?id=<?php echo $rows['id']; ?>">Update</a> | <a href="userDelete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
                      </tr>
                      <?php
                    } 
                    ?>
                </table>

            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include("includes/footer.php");
    ?>
</body>
<script src="js/index.js"></script>
</html>