<?php

include("dbconn.php");
$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM USERS WHERE id = '$id' ");
if ($result) { ?>
    <script>
    alert("Delete Successfully..!")
    window.location.href="usersList.php";
    </script>
    <?php 
} else { ?>
    <script>
    alert("Error While Delete..!")
    window.location.href="usersList.php";
    </script>
    <?php 
}


?>