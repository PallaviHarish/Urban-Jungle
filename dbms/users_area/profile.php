
<?php 
include ('../includes/connect.php');
include('../functions/common_function.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
            </a> -->
            <a class="navbar-brand" href="#"> <span class="navbar-brand mb-0 h1"><i class="fas fa-tree"></i> Navbar</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../display_all.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                    
                </ul>
                <form class="d-flex" action="search_product.php" method="get">
                    <input class="form-control me-2" type="search" name="search_data" placeholder="" aria-label="Search">
                    <!-- <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button> -->
                    <input type="submit" name="search_data_product" value="Search">
                </form>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav me-auto">
        <?php 
            if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'>
                <a href='#' class='nav-link'>Welcome Guest</a>
            </li>";
            }else{
                echo "<li class='nav-item'>
                <a href='#' class='nav-link'>Welcome ".$_SESSION['username']."</a>
            </li>";
            }
            if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'>
                <a href='user_login.php' class='nav-link'>Login</a>
            </li>";
            }else{
                echo "<li class='nav-item'>
                <a href='logout.php' class='nav-link'>Logout</a>
            </li>";
            }
            ?>
        </ul>
    </nav>

    <div class="container">
        <div class="text-center">Hidden Store</div>
        <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore delectus, voluptatum consequatur nam excepturi veniam dolores labore repellat reprehenderit sapiente rem laudantium iste itaque vel expedita iusto id quaerat illum.</p>
    </div>
    
    <div class="row">
        <div class="col-md-2">
            <ul class="navbar-nav" style="height:100vh">
            <li class="nav-item">
                <a href="" class="nav-link">
                    <h4>Your profile</h4>
                </a>
            </li>
            <?php 
                $username=$_SESSION['username'];
                $user_image="select * from `user_table` where username='$username'";
                $result_image=mysqli_query($conn,$user_image);
                $row_image=mysqli_fetch_array($result_image);
                $user_image=$row_image['user_image'];
                echo "<li class='nav-item'>
                <img src='./user_images/$user_image' >
            </li>";
            ?>
            
            <li class="nav-item">
                <a href="profile.php" class="nav-link">Pending Orders</a>
            </li>
            <li class="nav-item">
                <a href="profile.php?edit_account" class="nav-link">Edit Account</a>
            </li>
            <li class="nav-item">
                <a href="profile.php?my_orders" class="nav-link">My 
                orders</a>
            </li>
            <li class="nav-item">
                <a href="profile.php?delete_account" class="nav-link">Delete Account</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
        </div>
        <div class="col-md-10">
            <?php get_user_order_details();?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>