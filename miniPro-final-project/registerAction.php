<?php
error_reporting(E_ALL ^ E_NOTICE);  
include "./dbconn.php";

if (isset($_POST["submit"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $pass = trim($_POST["password"]);
    $image = $_POST["image"];
    $hashPass = md5($pass);

    $result = mysqli_query($conn, "SELECT * FROM USERS WHERE email = '$email'");
    $count = mysqli_num_rows($result);
    if ( $count == 0 ) {
        //Upload Image
        $image=$_FILES['image']['name'];
        //Explode Image Name 
        $imageArr=explode('.',$image);
        //Image Name Random Number Generation
        $randImageName=rand(10000,99999);
        $newImageName=$imageArr[0].$randImageName.'.'.$imageArr[1];
        $uploadPath="uploads/".$newImageName;
        $isUploaded=move_uploaded_file($_FILES["image"]["tmp_name"],$uploadPath);
        if($isUploaded) {
           $query = "INSERT INTO `users`(`name`, `email`, `password`, `img`) VALUES ('$name','$email','$hashPass', '$newImageName')";
               $result = mysqli_query($conn, $query);
               if ($result) { ?>
               <script>
               alert("Signup Successfully..!")
               window.location.href="login-web.php";
               </script>
               <?php } else { ?>
               <script>
               alert("DB Error..!")
               window.location.href="signup.php";
               </script>
               <?php }
        }
        else {
          echo 'something went wrong'; 
        }
    } else {
        ?>
        <script>
            alert("Email Already Exist, Try with Another..!");
            window.location.href = "registerPage.php";
        </script>
        <?php
    }

    
}
?>
