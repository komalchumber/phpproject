<?php

include("./dbconn.php");

if( isset($_POST['submit']) ) {
    $id = $_POST['id'];
    $content = $_POST['webContent'];
    $sql = "UPDATE `content` SET `content`='$content' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ( $result ) {
        ?>
        <script>
            alert("Update Successfully..!");
            window.location.href = "about.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Something went wrong..!");
            window.location.href="aboutContent.php";
        </script>
        <?php
    }
}

if ( isset($_POST['delete']) ) {
    $id = $_POST['id'];
    $content = "";
    $sql = "UPDATE `content` SET `content`='$content' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ( $result ) {
        ?>
        <script>
            alert("Deleted..!");
            window.location.href = "about.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Something went wrong..!");
            window.location.href="aboutContent.php";
        </script>
        <?php
    }
}

?>