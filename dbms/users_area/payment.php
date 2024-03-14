<?php 
include ('../includes/connect.php');
include('../functions/common_function.php');
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
    <style>
        body{
            background-color:#f7f2d2;
        }
        .custom-btn{
            background-color:#1a0209;
            color:#f7f2d2;
        } 
        .urban{
    color: #8e4c3e;
}
.jungle{
    color: #1a0209;
}
.title{
    margin:30px;
    font-size:20px;
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
.custom-card{
    background-color:#f7f2d2;
}label{
    font-weight:bold;
}
.card{
    border:none;
}
    </style>
</head>
<body>

<?php
    $user_ip=getIPAddress();
    $get_user="select * from `user_table` where user_ip='$user_ip'";
    $result=mysqli_query($conn,$get_user);
    $run_query=mysqli_fetch_assoc($result);
    $user_id=$run_query['user_id'];
?>

    <!-- <div class="container">
        <h2 class="text-center text-danger">Payment options</h2>
        <div class="row">
            <div class="col-md-6">
            <a href="http://www.paypal.com">paypal</a>
            </div>
            <div class="col-md-6">
                <a href="order.php?user_id=<?php echo $user_id;?>">Pay offline</a>
            </div>
        </div>
    </div> -->
    <div class="title">
    <img src="../logo.png" alt="">
            <span class="urban" style="font-weight:bold;">Urban</span
          ><span class="jungle" style="font-weight:bold;"> Jungle</span>
    </div>
    <div class=""  style="text-align:center;font-size:30px;">
        <strong>Payment</strong>
    </div>
  <div class="container">
    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-7 col-lg-5 col-xl-4">
        <div class="card custom-card">
          <div class="card-body">
            <form>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form">
                  <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                    placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                  <label class="form-label" for="typeText">Card Number</label>
                </div>
                <img src="https://img.icons8.com/color/48/000000/visa.png" alt="visa" width="64px" />
              </div>

              <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form">
                  <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                    placeholder="Cardholder's Name" />
                  <label class="form-label" for="typeName">Cardholder's Name</label>
                </div>
              </div>

              <div class="d-flex justify-content-between align-items-center pb-2">
                <div class="form">
                  <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY"
                    size="7" id="exp" minlength="7" maxlength="7" />
                  <label class="form-label" for="typeExp">Expiration</label>
                </div>
                <div class="form">
                  <input type="password" id="typeText2" class="form-control form-control-lg"
                    placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                  <label class="form-label" for="typeText2">Cvv</label>
                </div>
                <button type="button" class="btn custom-btn btn-lg btn-rounded">
                  <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>