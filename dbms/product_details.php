<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanJungle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', Courier, monospace;
        }

        .nav-buttons {
            margin-left: 50%;
        }

        /* .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: contain;
        } */
    </style>
</head>

<body>

<?php

    include('./includes/navbar_nav.php'); 
    
   ?>

<nav class="navbar navbar-expand-lg" >
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <?php 
            if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'>
                <a href='' class='nav-link'></a>
            </li>";
            }else{
                echo "<li class='nav-item'>
                <a href='#' class='nav-link'>Welcome ".$_SESSION['username']."</a>
            </li>";
            }
            if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'>
                <a href='./users_area/user_login.php' id='Login_link' class='nav-link'>Login</a>
            </li>";
            }else{
                echo "<li class='nav-item'>
                <a href='./users_area/logout.php' class='nav-link'>Logout</a>
            </li>";
            }
            ?>
            
        </ul>
    </nav>

    <div class="row" style="margin-top:50px;">
        <div class="col-md-10">
            <!-- products -->
            <div class="row">

                <?php
                cart();
                view_details();
                get_unique_cat();
                get_unique_brand();
                
                ?>
            </div>
        </div>
    </div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>