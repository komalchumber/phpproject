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
    <link rel="stylesheet" href="./css/style_website.css">
    <title>Mini Website</title>
</head>

<body>
    <div class="container">
        <?php
        session_start();
        include("includes/header.php");
        include("dbconn.php");
        ?>
        <div class="row mb-4 pb-4">
            <div id="data" class="col-12 col-md-12 p-md-5 shadow-lg rounded ">
              <div class="mb-4 border border-primary">
                    <div class="col-12 col-md-6 p-md-5 shadow rounded">
                        <h3 class="font-weight-bolder mt-5 mt-md-0">Content</h3>
                        <form action="aboutContentAction.php" method="POST">
                            <div class="col-auto">
                                <div class="form-group">
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM content");
                                    $rows = mysqli_fetch_array($result);
                                    $id = $rows['id'];
                                    $content = $rows['content'];
                                    ?>
                                  <label for="WebContent">Website Content</label>
                                  <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                                  <textarea class="form-control" id="webContent" name="webContent" rows="5" cols="10"><?php echo $content; ?></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mt-3 mb-5 mb-md-2">Update</button>
                            <button type="submit" name="delete" class="btn btn-danger mt-3 mb-5 mb-md-2">Delete</button>
                        </form>
                    </div>
                </div>
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