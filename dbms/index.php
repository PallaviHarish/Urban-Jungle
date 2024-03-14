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

    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
     <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>

<?php

    include('./includes/navbar_nav.php'); ?>
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
    <img src="bg-pic.png" alt="" class="bg-pic" data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'/>

    <div class="" style="text-align:center;font-size:19px; font-weight:bold;"  data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>
       Plants:
        <div class="" style="display:flex;justify-content:center;">
        <?php
            getBrands();
 ?>
    </div>
    </div>
    <div class="" style="text-align:center;font-size:19px; font-weight:bold;"  data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>
        Aritificial Plants:
        <div class="" style="display:flex;justify-content:center;">
        <?php
            getCategories();
            ?>
    </div>
    </div>
    <div class="" style="text-align:center; font-weight:bold; font-size:30px; margin-top:50px;"  data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>
        Our Products
    </div>
            
            <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                    Categories
                </a>
            </li>
            
        </ul>
    </div> -->

    <!-- <div class="container">
        <div class="text-center">Welcome to Urban Jungle</div>
        <p class="text-center"> From elegant succulents to towering palms, our curated collection offers something for every green thumb and plant enthusiast alike. Whether you're a seasoned gardener or just beginning your plant journey, our mission is to provide you with the highest quality greenery, expert advice, and exceptional customer service. Join us in cultivating a greener, more vibrant world—one plant at a time.
</p>
    </div> -->
    <div class="" style="display: flex;
    flex-wrap: wrap;
    padding:30px;
    justify-content: space-between;">
            <!-- products -->
                <?php
                cart();
                getProducts();
                get_unique_cat();
                get_unique_brand();
                $ip = getIPAddress();
                // echo 'User Real IP Address - ' . $ip;
                ?>
    </div>
    

  
    <?php
    include('./includes/footer.php');
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>