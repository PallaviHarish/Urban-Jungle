<?php
// include('./includes/connect.php');
//getting prod

// session_start();
function getProducts()
{
    global $conn;

    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,8";
            // $select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,9";
            $result_query = mysqli_query($conn, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $prod_id = $row['product_id'];
                $prod_title = $row['product_title'];
                $prod_desc = $row['product_description'];
                $prod_image1 = $row['product_image1'];
                $prod_price = $row['product_price'];
                $cat_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                echo "<div style='display: flex;
                flex-direction: column;
                justify-content: space-between;
                width: 350px; margin-bottom:20px;'>
                    <div class='card' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000' style='box-shadow: 2px 2px 2px 0px #f7f2d2;'>
                        <img src=' ./admin_area/product_images/$prod_image1' style='height:300px' class='card-img-top' alt='...'>
                        <div class='card-body' style='background-color:#f7f2d2'>
                            <h5 class='card-title' style='font-size:20px;'>$prod_title</h5>
                            <p class='card-text' style='font-size:15px; font-weight:bold;'>Rs.$prod_price/-</p>
                            <a href='index.php?add_to_cart=$prod_id' class='btn' style='background-color:
                            #8ccfb9;'>Add to cart</a>
                            <a href='product_details.php?product_id=$prod_id' class='btn' style='color:#8e4c3e; margin-left:2%;'>View More</a>
                        </div>
                    </div>
                </div>";
            }
        }
    }
}

function get_unique_cat()
{
    global $conn;

    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];
        $select_query = "SELECT * FROM `products` WHERE category_id=$category_id";
        // $select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,9";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2>No stock</h2>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $prod_id = $row['product_id'];
            $prod_title = $row['product_title'];
            $prod_desc = $row['product_description'];
            $prod_image1 = $row['product_image1'];
            $prod_price = $row['product_price'];
            $cat_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo "<div style='display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 350px; margin-bottom:20px;'>
                    <div class='card' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000' style='box-shadow: 2px 2px 2px 0px #f7f2d2;'>
                        <img src=' ./admin_area/product_images/$prod_image1' class='card-img-top' alt='...'>
                        <div class='card-body' style='background-color:#f7f2d2'>
                            <h5 class='card-title' style='font-size:20px;'>$prod_title</h5>
                            <p class='card-text' style='font-size:13px'>$prod_desc</p>
                            <p class='card-text' style='font-size:15px; font-weight:bold;'>Rs.$prod_price/-</p>
                            <a href='index.php?add_to_cart=$prod_id' class='btn' style='background-color:
                            #8ccfb9;'>Add to cart</a><a style='margin-left: 2%;' href='product_details.php?product_id=$prod_id' class='btn' style='color:#8e4c3e; margin-left:2%;'>View More</a>
                        </div>
                    </div>
                </div>";
        }
    }
}

function getBrands()
{
    global $conn;
    $select_brands = "Select * from `brands`";
    $result_brands = mysqli_query($conn, $select_brands);
    while ($row_data = mysqli_fetch_assoc($result_brands)) {
        $brand_title = $row_data['brand_title'];
        $brand_id = $row_data['brand_id'];
        echo "<div class='nav-item' style='padding:20px;'  data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>
                    <a href='index.php?brand=$brand_id' style='background-color:#8e4c3e;color:#f7f2d2;border-radius:5px;padding:40px' class='nav-link'>
                        $brand_title
                    </a>
                </div>";
    }
}

function get_unique_brand()
{
    global $conn;

    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];
        $select_query = "SELECT * FROM `products` WHERE brand_id=$brand_id";
        // $select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,9";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2>No stock</h2>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $prod_id = $row['product_id'];
            $prod_title = $row['product_title'];
            $prod_desc = $row['product_description'];
            $prod_image1 = $row['product_image1'];
            $prod_price = $row['product_price'];
            $cat_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo "<div style='display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 350px; margin-bottom:20px;'>
                    <div class='card' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000' style='box-shadow: 2px 2px 2px 0px #f7f2d2;'>
                        <img src=' ./admin_area/product_images/$prod_image1' class='card-img-top' alt='...'>
                        <div class='card-body'style='background-color:#f7f2d2'>
                            <h5 class='card-title' style='font-size:20px;'>$prod_title</h5>
                            <p class='card-text' style='font-size:13px'>$prod_desc</p>
                            <p class='card-text'style='font-size:15px; font-weight:bold;'>Rs.$prod_price/-</p>
                            <a href='index.php?add_to_cart=$prod_id' class='btn' style='background-color:
                            #8ccfb9;'>Add to cart</a><a style='margin-left: 2%;' href='product_details.php?product_id=$prod_id'class='btn' style='color:#8e4c3e; margin-left:2%;'>View More</a>
                        </div>
                    </div>
                </div>";
        }
    }
}
function getCategories()
{
    global $conn;
    $select_cat = "Select * from `categories`";
    $result_cat = mysqli_query($conn, $select_cat);
    while ($row_data = mysqli_fetch_assoc($result_cat)) {
        $cat_title = $row_data['category_title'];
        $cat_id = $row_data['category_id'];
        echo "<div class='nav-item ' style='padding:20px;' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000'>
                    <a href='index.php?category=$cat_id' class='nav-link' style='background-color:#619483;color:#f7f2d2;border-radius:5px;padding:40px'>
                        $cat_title
                    </a>
                </div>";
    }
}

function searchProd()
{
    global $conn;
    if (isset($_GET['search_data_product'])) {
        $search_val = $_GET['search_data'];
        $select_query = "SELECT * FROM `products` where product_keywords like '%$search_val%' ";
        // $select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,9";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2>No result</h2>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $prod_id = $row['product_id'];
            $prod_title = $row['product_title'];
            $prod_desc = $row['product_description'];
            $prod_image1 = $row['product_image1'];
            $prod_price = $row['product_price'];
            $cat_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo "<div style='display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 350px; margin-bottom:20px;'>
                    <div class='card' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000' style='box-shadow: 2px 2px 2px 0px #f7f2d2;'>
                        <img src=' ./admin_area/product_images/$prod_image1' style='height:300px'class='card-img-top' alt='...'>
                        <div class='card-body' style='background-color:#f7f2d2'>
                            <h5 class='card-title' style='font-size:20px;'>$prod_title</h5>
                            <p class='card-text' style='font-size:15px; font-weight:bold;'>Price:$prod_price</p>
                            <a href='index.php?add_to_cart=$prod_id' class='btn' style='background-color:
                            #8ccfb9;'>Add to cart</a><a style='margin-left: 2%;' href='product_details.php?product_id=$prod_id' class='btn' style='color:#8e4c3e; margin-left:2%;'>View More</a>
                        </div>
                    </div>
                </div>";
        }
    }
}

function getAllProducts()
{
    global $conn;

    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_query = "SELECT * FROM `products` ORDER BY rand()";
            // $select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,9";
            $result_query = mysqli_query($conn, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $prod_id = $row['product_id'];
                $prod_title = $row['product_title'];
                $prod_desc = $row['product_description'];
                $prod_image1 = $row['product_image1'];
                $prod_price = $row['product_price'];
                $cat_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                echo "<div style='display: flex;
                flex-direction: column;
                justify-content: space-between;
                width: 350px; margin-bottom:20px;'>
                    <div class='card' data-aos='fade-up' data-aos-delay='300' data-aos-duration='1000' style='box-shadow: 2px 2px 2px 0px #f7f2d2;'>
                        <img src=' ./admin_area/product_images/$prod_image1' style='height:300px' class='card-img-top' alt='...'>
                        <div class='card-body' style='background-color:#f7f2d2'>
                            <h5 class='card-title' style='font-size:20px;'>$prod_title</h5>
                            <p class='card-text' style='font-size:15px; font-weight:bold;'>Price:$prod_price</p>
                            <a href='index.php?add_to_cart=$prod_id' class='btn' style='background-color:
                            #8ccfb9;'>Add to cart</a><a style='margin-left: 2%;' href='product_details.php?product_id=$prod_id' class='btn' style='color:#8e4c3e; margin-left:2%;'>View More</a>
                        </div>
                    </div>
                </div>";
            }
        }
    }
}

function view_details()
{
    global $conn;
    if (isset($_GET['product_id'])) {
        if (!isset($_GET['category'])) {
            if (!isset($_GET['brand'])) {
                $prod_id = $_GET['product_id'];
                $select_query = "SELECT * FROM `products` where product_id=$prod_id";
                // $select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,9";
                $result_query = mysqli_query($conn, $select_query);
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $prod_id = $row['product_id'];
                    $prod_title = $row['product_title'];
                    $prod_desc = $row['product_description'];
                    $prod_image1 = $row['product_image1'];
                    $prod_price = $row['product_price'];
                    $cat_id = $row['category_id'];
                    $brand_id = $row['brand_id'];

                    echo"<div class='container' style='margin-left:10%;'>
                    <div style='display:flex; justify-content:center;'>
                        <img src='./admin_area/product_images/$prod_image1' alt='...' style='height:300px; border-radius:7px;'>
                        <div style='margin-left:20px;'>
                            <h5 class='card-title'>$prod_title</h5>
                            <p class='card-text' style='margin-top:20px;'>$prod_desc</p>
                            <a href='index.php?add_to_cart=$prod_id' class='btn' style='background-color:
                            #8ccfb9; margin-top:120px;'>Add to cart</a>
                            <a style='margin-left: 2%;color:#8e4c3e; text-decoration:underline; margin-top:120px' href='index.php' class='btn'>Go Home</a>
                            </div>
                    </div>
                </div>
                ";
                }
            }
        }
    }
}
function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

function cart()
{
    if (isset($_GET['add_to_cart'])) {
        global $conn;
        $get_ip_add = getIPAddress();
        $get_prod_id = $_GET['add_to_cart'];
        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_prod_id";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already present inside cart')</script>";
            echo "<script>window.open('index.php,'_self')</script>";
        } else {
            $insert_query = "insert into `cart_details` (product_id,ip_address,quantity) values($get_prod_id,'$get_ip_add',0)";
            $result_query = mysqli_query($conn, $insert_query);
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
}

function cart_item()
{
    if (isset($_GET['add_to_cart'])) {
        global $conn;
        $get_ip_add = getIPAddress();
        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
    } else {
        global $conn;
        $get_ip_add = getIPAddress();
        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
    }
    echo $num_of_rows;
}

function total()
{
    global $conn;
    $get_ip_add = getIPAddress();
    $total = 0;
    $cart_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
    $result = mysqli_query($conn, $cart_query);
    while ($row = mysqli_fetch_array($result)) {
        $product_id = $row['product_id'];
        $select_products = "Select * from `products` where product_id='$product_id'";
        $result_prod = mysqli_query($conn, $select_products);
        while ($row_product_price = mysqli_fetch_array($result_prod)) {
            $product_price = array($row_product_price['product_price']);
            $product_values = array_sum($product_price);
            $total += $product_values;
        }
    }
    echo $total;
}

function get_user_order_details(){
    global $conn;
    $username=$_SESSION['username'];
    // $get_details="select * from `user_table` where username='$username'";
    $get_details="select * from `user_table`";
    $result_query=mysqli_query($conn,$get_details);
    while($row_query=mysqli_fetch_array($result_query)){
        $user_id=$row_query['user_id'];
        if(!isset($_GET['edit_account'])){
        if(!isset($_GET['my_orders'])){
            if(!isset($_GET['delete_account'])){
            $get_orders="select * from `user_orders` where user_id=$user_id and order_status='pending'";
            $result_orders_query=mysqli_query($conn,$get_orders);
            $row_count=mysqli_num_rows($result_orders_query);
            if($row_count>0){
                echo "<div class = 'container'><h3 class='text-center'>You have $row_count orders</h3>
                <a href='profile.php? my_orders' ><h3 class='text-center'>order details</h3></a></div>";
            }
            // else{
            //     echo "<div class = 'container'><h3 class='text-center'>You have 0 pending orders</h3>
            //     <a href='../index.php' ><h3 class='text-center'>Explore</h3></a></div>";
            // }
        }
    }}
}
    }