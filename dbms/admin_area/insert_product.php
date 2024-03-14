<?php
include('../includes/connect.php');
if (isset($_POST['insert_product'])) {
    $prod_title = $_POST['product_title'];
    $prod_desc = $_POST['description'];
    $prod_keywords = $_POST['product_keywords'];
    $prod_cat = $_POST['product_categories'];
    $prod_brand = $_POST['product_brands'];
    $prod_price = $_POST['product_price'];
    $prod_status = 'true';
    //images
    $prod_image1 = $_FILES['product_image1']['name'];
    $prod_image2 = $_FILES['product_image2']['name'];
    $prod_image3 = $_FILES['product_image3']['name'];

    //img temp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // if ($prod_title == '' or $prod_desc == '' or $prod_keywords == '' or $prod_cat == '' or $prod_brand == '' or $prod_price == '' or $prod_image1 == '' or $prod_image2 == '' or $prod_image3 == '') {
    //     echo "<script>alert('Please fill all the fields')</script>";
    //     exit();
    // } else {
        move_uploaded_file($temp_image1, "./product_images/$prod_image1");
        move_uploaded_file($temp_image2, "./product_images/$prod_image2");
        move_uploaded_file($temp_image3, "./product_images/$prod_image3");

        $insert_products = "insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$prod_title','$prod_desc','$prod_keywords','$prod_cat','$prod_brand','$prod_image1','$prod_image2','$prod_image3','$prod_price',NOW(),'$prod_status')";
        $result_query = mysqli_query($conn, $insert_products);
        if ($result_query) {
            echo "<script>alert('Successfully inserted product')</script>";
        }
    // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-container">
            Insert Products
        </h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title  -->
            <div class="form-outline mb-4 w-50">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
            </div>

            <!-- keywords  -->
            <div class="form-outline mb-4 w-50">
                <label for="description" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50">
                <select name="product_categories" id="" class="product_category">
                    <option value="">Select a Artificial:</option>
                    <?php
                    $select_cat = "SELECT * FROM `categories`";
                    $result_cat = mysqli_query($conn, $select_cat);
                    while ($row_data = mysqli_fetch_assoc($result_cat)) {
                        $cat_title = $row_data['category_title'];
                        $cat_id = $row_data['category_id'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- brands -->
            <div class="form-outline mb-4 w-50">
                <select name="product_brands" id="" class="product_brands">
                    <option value="">Select a Plant</option>
                    <?php
                    $select_brand = "SELECT * FROM `brands`";
                    $result_brand = mysqli_query($conn, $select_brand);
                    while ($row_data = mysqli_fetch_assoc($result_brand)) {
                        $brand_title = $row_data['brand_title'];
                        $brand_id = $row_data['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- image1  -->
            <div class="form-outline mb-4">
                <label for="product_image1" class="form-label">Product image1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>

            <div class="form-outline mb-4">
                <label for="product_image2" class="form-label">Product image2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <div class="form-outline mb-4">
                <label for="product_image3" class="form-label">Product image3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>

            <!-- price -->
            <div class="form-outline mb-4 w-50">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>

            <!-- submit  -->
            <div class="form-outline mb-4 w-50">
                <input type="submit" name="insert_product">
            </div>
        </form>
    </div>
</body>

</html>