<?php
include('../includes/connect.php');
if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title'];

    //select data from db
    $select_query = "Select * from `brands` where brand_title='$brand_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('Brand already exists!')</script>";
    } else {
        $insert_query = "insert into `brands` (brand_title) values ('$brand_title')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Brand inserted successfully')</script>";
        }
    }
}
?>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-invoice"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" value="Insert Categories" class="form-control" name="insert_brand" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
        <!-- <button type="button" class="btn btn-dark">Insert brands</button> -->
    </div>
</form>