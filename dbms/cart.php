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
        .custom-btn {
      background-color: #8e4c3e; 
      border-color: #8e4c3e; 
      color:#f7f2d2;
}
        .cart_img{
    width:80px;
    height: 80px;
}
input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    width:20px;
}
input[type=text]:focus {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    width:20px;
}
    </style>
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
                <?php
                cart();
                ?>
            <div class="container">
                <div class="">
                    <form action="" method="post">
                    <table class="table text-center">
                            <?php
                            global $conn;
                            $get_ip_add = getIPAddress();
                            $total = 0;
                            $cart_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
                            $result = mysqli_query($conn, $cart_query);
                            $result_count=mysqli_num_rows($result);
                            if($result_count>0){
                                echo "<thead>
                                <tr >
                                    <th style='background-color:#f7f2d2'>Product Title</th>
                                    <th style='background-color:#f7f2d2'>Product Image</th>
                                    <th style='background-color:#f7f2d2'>Quantity</th>
                                    <th style='background-color:#f7f2d2'>Total price</th>
                                    <th style='background-color:#f7f2d2'>Remove</th>
                                    <th style='background-color:#f7f2d2'>Operations</th>
                                </tr>
                            </thead>
                            <tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                $product_id = $row['product_id'];
                                $select_products = "Select * from `products` where product_id='$product_id'";
                                $result_prod = mysqli_query($conn, $select_products);
                                while ($row_product_price = mysqli_fetch_array($result_prod)) {
                                    $product_price = array($row_product_price['product_price']);
                                    $price_table=$row_product_price['product_price'];
                                    $product_title=$row_product_price['product_title'];
                                    $product_image1=$row_product_price['product_image2'];
                                    $product_values = array_sum($product_price);
                                    $total += $product_values;
                               ?>
                            <tr>
                                <td style='background-color:#f7f2d2'><?php echo $product_title?></td>
                                <td style='background-color:#f7f2d2'><img src=' ./admin_area/product_images/<?php echo $product_image1?>' alt='no image' class='cart_img'></td>
                                <td style='background-color:#f7f2d2'><input type='text' name='qty' style='background-color:#f7f2d2'></td>
                                <?php
                                    $get_ip_add1 = getIPAddress();
                                    if(isset($_POST['update_cart'])){
                                        $quantities=$_POST['qty'];
                                        $update_cart="UPDATE cart_details  SET quantity= $quantities WHERE product_id='$product_id'";
                                        $result_products_quantity=mysqli_query($conn, $update_cart);
                                        $total=$total*$quantities;
                                    }
                                ?>
                                <td style='background-color:#f7f2d2'><?php echo $price_table?></td>
                                <td style='background-color:#f7f2d2'><input type='checkbox' name="removeitem[]" value="<?php echo $product_id?>"> </td>
                                <td style='background-color:#f7f2d2'>
                                    <input type='submit'  class="btn custom-btn" value='Update Quantity' name='update_cart'>
                                </td>
                            </tr>
                            <?php } }}
                            else{
                                echo"<h2 class='text-center'>Cart is empty!</h2>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="" style="display:flex;justify-content:right;margin-top:30px;">
                        <?php 
                            if($result_count>0){
                                echo "<input type='submit' class='btn custom-btn' value='Remove selected items' name='remove_cart'><h4 class='px-3' style='font-weight:bold;'>Subtotal: <strong class='text'>$total/-</strong> </h4>";
                            }
                        ?>
                        
                    </div>
                    <div class="" style="display:flex;justify-content:right;">
                    
                    </div>
                    
                    <div class="" style="display:flex; justify-content:right;margin-top:20px;">
                    <input type="submit" value="Continue Shopping" class="btn custom-btn" name="continue_shopping">
                        <?php 
                            if($result_count>0){
                                echo "<a class='btn custom-btn' style='margin-left:10px;'href='./users_area/checkout.php'>Checkout</a>";
                            }
                            if(isset($_POST['continue_shopping'])){
                                echo"<script>window.open('index.php','_self')</script>";
                            }
                        ?>
                    </div>
                    
                </div>
            </div>
            </form>


<?php 
function remove_cart_item(){
    global $conn;
    if(isset($_POST['remove_cart'])){
        foreach(($_POST['removeitem'] )as $remove_id){
            echo $remove_id;
            $delete_query="Delete from `cart_details` where product_id=$remove_id";
            $run_delete=mysqli_query($conn,$delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }
    }
}
echo $remove_item=remove_cart_item();
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>