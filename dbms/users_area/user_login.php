<?php 
include ('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
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
            background-color: #f7f2d2;
        }
        body{
            overflow-x:hidden;
        }
        .custom-btn {
      background-color: #8e4c3e; 
      border-color: #8e4c3e; 
      color:#f7f2d2;
      border-radius:2px;
      width:200px;
      padding:10px;
}
.urban{
    color: #8e4c3e;
}
.jungle{
    color: #1a0209;
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
    </style>
</head>
<body>

<!-- <div class="container-fluid">
    <h2>User Login</h2>
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post" >
                <div class="form-outline">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="enter username" autocomplete="off" required="required" name="user_username"/>
                </div>
                <div class="form-outline">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="enter password" autocomplete="off" required="required" name="user_password"/>
                </div>
                <div class="mt-4">
                    <input type="submit" value="Login" class="bg m-2" name="user_login">
                    <p>Don't have an account? <a href="user_registration.php"> Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- Section: Design Block -->
<section class="" style="margin-top:40px;">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" >
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight"><img src="../logo.png" alt="">
          <span class="urban" style="font-weight:bold;">Urban</span
          ><span class="jungle" style="font-weight:bold;"> Jungle</span><br />
            <!-- <span class="text-primary">for your business</span> -->
          </h1>
          <p style="color:#2b5837; font-weight:bold;">
          Where Green Dreams Grow. Explore our lush collection of plants and botanical treasures. From vibrant succulents to majestic ferns, find your perfect green companion. Let the jungle come to you with our doorstep delivery service.
          </p>
        </div>

        <div class="col-lg-6" >
          <div class="card" style="border:none;">
            <div class="card-body py-5 px-md-5">
              <form action="" method="post">
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="user_username" style="font-weight:bold;">Username</label>
                  <input type="text" id="user_username" class="form-control" placeholder="Enter username" autocomplete="off" required="required" name="user_username"/>
                  
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="user_password" style="font-weight:bold;">Password</label>
                  <input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" required="required" name="user_password" />
                  
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <input type="submit" value="Login" class="bg m-2 custom-btn" name="user_login">
                    <p>Don't have an account? <a href="user_registration.php" style="color:#8e4c3e;"> Register</a></p>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

<?php 
    if(isset($_POST['user_login'])){
        $user_username=$_POST['user_username'];
        $user_password=$_POST['user_password'];
        $select_query="select * from `user_table` where username='$user_username'";
        $result=mysqli_query($conn,$select_query);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);
        $user_ip=getIPAddress();
        $select_query_cart="Select * from `cart_details` where ip_address='$user_ip'";
        $select_cart=mysqli_query($conn,$select_query_cart);
        $row_count_cart=mysqli_num_rows($select_cart);
        if($row_count>0){
            $_SESSION['username']=$user_username;
            if(password_verify($user_password,$row_data['user_password'])){
                // echo "<script>alert('Login successful!')</script>";
                if($row_count==1 and $row_count_cart==0){
                    $_SESSION['username']=$user_username;
                    echo "<script>alert('Login successful!')</script>";
                    echo "<script>window.open('../index.php','_self')</script>";
                }else{
                    $_SESSION['username']=$user_username;
                    echo "<script>alert('Login successful!')</script>";
                    echo "<script>window.open('payment.php','_self')</script>";
                }
            }else{
                echo "<script>alert('Invalid username or password!')</script>";
            }
        }else{
            echo "<script>alert('Invalid username or password!')</script>";
        }
    }
?>