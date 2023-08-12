<!-- header Code -->
<div class="row">
    <!-- in div -->
    <div class="col-12 border rounded p-3 d-flex justify-content-between">
        <!-- Logo Code -->
        <img src="./img/logo_mini.png" alt="logo" height="50px" width="50px">
        <!-- Login Hyper Link -->
        <?php 
            if ( isset($_SESSION['id']) ){
                ?>
                <a class="text-decoration-none" href="login-web-logout.php">Logout</a> </span>
                <?php
            } else {
                ?>
                <a class="text-decoration-none" href="login-web.php">Login</a> </span>
                <?php
            }
            ?>
    </div>
</div>
<div class="row" style="margin-top:0%">
    <!-- Navigation Hyper Link -->
    <div class="col-12 shadow border rounded p-2 d-flex justify-content-between">
        <div class="d-flex ">
            <div id="btn1" onclick="home()" class="p-2 border rounded bt" style="margin-right: 5px;">Home</div>
            <div id="btn2" onclick="about()" class="p-2 border rounded bt" style="margin-right: 5px;">About</div>
            <?php 
            if ( isset($_SESSION['id']) ){
                ?>
                <div id="btn3" onclick="usersList()" class="p-2 border rounded bt" style="margin-right: 5px;">Users List</div>
                <div id="btn3" onclick="aboutContent()" class="p-2 border rounded bt" style="margin-right: 5px;">Website Content</div>
                <?php
            } else {
                ?>
                <div id="btn3" onclick="register()" class="p-2 border rounded bt" style="margin-right: 5px;">Register</div>
                <?php
            }
            ?>
        </div>
    </div>
</div>