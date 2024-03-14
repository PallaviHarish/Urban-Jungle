<?php
include('../includes/connect.php');
if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    //select data from db
    $select_query = "Select * from `categories` where category_title='$category_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('Category already exists!')</script>";
    } else {
        $insert_query = "insert into `categories` (category_title) values ('$category_title')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Category inserted successfully')</script>";
        }
    }
}
?>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-invoice"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" value="Insert Categories" class="form-control" name="insert_cat" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
        <!-- <button type="button" class="btn btn-dark">Insert catergory</button> -->
    </div>
</form>