<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- CSS only -->
    <!-- CSS only -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Only -->
    <script src="css/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/style_website.css">
    <title>Mini Website</title>
</head>
<body>
    <div class="container">
        <?php
        // Session Starts From Here
        session_start();
        // Header Include
        include("includes/header.php");
        ?>
        <div class="row mb-4 pb-4">
            <div id="data" class="col-12 col-md-8 p-md-5 shadow-lg rounded ">
              <h1 center>Welcome To Mini Website</h1>
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