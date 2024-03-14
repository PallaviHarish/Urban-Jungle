<?php 
include ('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        *{
            color:#1a0209;
            font-weight:bold;
        }
        .gradient-custom {
/* fallback for old browsers */
background-color:#f7f2d2;
}
.urban{
    color: #8e4c3e;
    font-size:30px;
}
.jungle{
    color: #1a0209;
    font-size:30px;
}
label{
    
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=text]:focus {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=email] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=email]:focus {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=password] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=password]:focus {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=file] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=file]:focus {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
.custom-btn {
      background-color: #8e4c3e; 
      border-color: #8e4c3e; 
      
      border-radius:2px;
      width:200px;
      padding:10px;
}
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
  <img src="../logo.png" alt=""><span class="urban" style="font-weight:bold;">Urban</span
          ><span class="jungle" style="font-weight:bold;"> Jungle</span>
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border:none;background-color:#f7f2d2">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">
          <div style="text-align:center;">
          CREATE AN ACCOUNT
          </div>
          </h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="enter username" autocomplete="off" required="required" name="user_username"/>
                </div>

                </div>
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                    <label for="user_email" class="form-label">Email</label>
                    <input type="email" id="user_email" class="form-control" placeholder="enter mail" autocomplete="off" required="required" name="user_email"/>
                </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 ">

                <div class="form-outline">
                    <label for="user_image" class="form-label">User image</label>
                    <input type="file" id="user_image" class="form-control"required="required" name="user_image"/>
                </div>
                <div class="form-outline" style="margin-top:10px;">
                    <label for="user_address" class="form-label">Address</label>
                    <input type="text" id="user_address" class="form-control" placeholder="enter address" autocomplete="off" required="required" name="user_address"/>
                </div>
                </div>
                
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="enter password" autocomplete="off" required="required" name="user_password"/>
                </div>

                <div class="form-outline">
                    <label for="conf_user_password" class="form-label" style="margin-top:10px;">Confirm Password</label>
                    <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm password" autocomplete="off" required="required" name="conf_user_password"/>
                </div>

                

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <label for="user_contact" class="form-label">contact</label>
                    <input type="text" id="user_contact" class="form-control" placeholder="enter contact" autocomplete="off" required="required" name="user_contact"/>
                </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                <div class="mt-4">
                    <input type="submit" value="Register" style="color:#f7f2d2;" class="bg m-2 custom-btn" name="user_register">
                    <p>Already have an account? <a href="user_login.php" style="color:#2b5837"> Login</a></p>
                </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

<?php 
if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();

    $select_query="select * from `user_table` where username='$user_username' or user_email='$user_email'";
    $result=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($result);
    if($row_count>0){
        echo "<script>alert('Username and email already exists!')</script>";
    }else if($user_password!=$conf_user_password){
        echo "<script>alert('Password does not match!')</script>";
    }
    else{
        move_uploaded_file($user_image_tmp,"./user_images/$user_image");
        $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) values ('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address','$user_contact')";
        $sql_execute=mysqli_query($conn,$insert_query);
        if($sql_execute){
            // echo"<script>alert('Data inserted successfully!')</script>";
        }else{
            die(mysqli_error($conn));
        }
    }

    //selecting cart items
    $select_cart_items="select * from `cart_details` where ip_address='$user_ip'";
    $result_cart=mysqli_query($conn,$select_cart_items);
    $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo "<script>You have items in your cart!</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }else{
        echo "<script>window.open('../index.php','_self')</script>";
    }

}
?>