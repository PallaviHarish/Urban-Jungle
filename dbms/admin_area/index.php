<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .admin-img {
            width: 100px;
            object-fit: contain;
        }

        .footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
            </a> -->
            <a class="navbar-brand" href="#"> <span class="navbar-brand mb-0 h1"><i class="fas fa-tree"></i> Navbar</span>
            </a>
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav ">
                    <li class="nav-item"> <a href="#" class="nav-link">Welcome Pals</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

    <div class="bg-">
        <h3 class="text-center p-2">Manage Deets</h3>
        <div class="row">
            <div class="col-md-12 bg-secondary d-flex align-items-center">
                <div class="">
                    <a href="#"><img src="../assets/imgs/plant.jpg" alt="" class="admin-img"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button><a href="insert_product.php" class="nav-link  bg info my-1">Insert Products</a></button><button>
                        <a href="" class="nav-link  bg info my-1">View products</a></button><button><a href="index.php?insert_category" class="nav-link  bg info my-1">Insert Categories</a></button><button><a href="" class="nav-link  bg info my-1">View Categories</a></button><button><a href="index.php?insert_brands" class="nav-link  bg info my-1">Insert brands</a></button><button><a href="" class="nav-link  bg info my-1">View Brands</a></button><button><a href="" class="nav-link  bg info my-1">All orders</a></button><button><a href="" class="nav-link  bg info my-1">All Payments</a></button><button><a href="" class="nav-link  bg info my-1">List Users</a></button><button><a href="" class="nav-link  bg info my-1">Logout</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <?php
        if (isset($_GET['insert_category'])) {
            include('insert_categories.php');
        }
        if (isset($_GET['insert_brands'])) {
            include('insert_brands.php');
        }
        // if (isset($_GET['insert_product'])) {
        //     include('insert_product.php');
        // }
        ?>
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 footer">
            <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);"> -->
            <div class="text-center p-3">
                © 2024 Copyright:
                <a class="text-body" href="#">UrbanJungle.com</a>
            </div>
            <!-- Copyright  -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>