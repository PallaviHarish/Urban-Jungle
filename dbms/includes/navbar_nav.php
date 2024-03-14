<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Poppins', Courier, monospace;
            
        }
        body{
            background-color: #fffbde;
            
        }
        .navbar {
  box-shadow: 0 0px 0px rgba(0, 0, 0, 0.18);
}
.navbar .navbar-brand img {
  max-width: 100px;
}
@media screen and (min-width: 1200px) {
  .navbar {
    letter-spacing: 0.05em;
  }
  .navbar-collapse .navbar-nav .nav-link {
    padding: 0.2em 1em;
  }
  .navbar .navbar-brand img {
    max-width: 7em;
  }
}
@media screen and (min-width: 768px) {
  .navbar .navbar-brand img {
    max-width: 6em;
  }
  .navbar-collapse {
    display: flex;
    flex-direction: column-reverse;
    align-items: flex-end;
  }
  .search-and-icons,
  .contact-info {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
  }
  .search-and-icons {
    width: 70%;
  }
  .navbar form {
    flex: 1;
  }
}
.navbar-collapse .navbar-nav .nav-link {
  color: #000;
}
.contact-info p {
  justify-content: center;
  font-size: 0.8em;
  padding-right: 1em;
  color: #000;
}
.contact-info a {
  color: #000;
  text-decoration: underline;
}
.user-icons div {
  padding-right: 1em;
  font-size: 1.2em;
  color: #000;
}
.urban{
    color: #8e4c3e;
}
.jungle{
    color: #1a0209;
}
.navbar-custom {
    background-color: #f7f2d2;
}
.search-container{
    background: #fff;
    height: 45px;
    border-radius: 30px;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.8s;
  /* box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2); */
}

.search-container:hover > .search-input{
    width: 400px;
}


/* .search-container .search-input{
    background: transparent;
    border: none;
    outline:none;
    width: 0px;
    font-weight: 500;
    font-size: 16px;
    transition: 0.8s;

} */

.search-hover {
  border: 1px solid #ccc;
  outline: none;
  background-size: 22px;
  background-position: 13px;
  border-radius: 10px;
  width: 50px;
  height: 50px;
  padding: 25px;
  transition: all 0.5s;
}
.search-hover:hover {
  width: 300px;
  padding-left: 50px;
}
input[type=search] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
input[type=search]:focus {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
.search-container .search-input{
    background: transparent;
    border: none;
    outline:none;
    width: 0px;
    font-weight: 500;
    font-size: 16px;
    transition: 0.8s;

}
.navbar-nav .nav-item .nav-link {

color: #8e4c3e;
}
.search-container .search-btn .fas{
    color: #8e4c3e;
}

.custom-btn {
      background-color: #8e4c3e; 
      border-color: #8e4c3e; 
      color:#f7f2d2;
}
    </style>
</head>
<body>
    

<nav class="navbar navbar-expand-md navbar-custom justify-content-end">
    <div class="container-fluid">
        <a class="navbar-brand" data-aos="zoom-in" data-aos-duration="2000" href="index.php">
            <img src="logo.png" alt="">
            <span class="urban" style="font-weight:bold;">Urban</span
          ><span class="jungle" style="font-weight:bold;"> Jungle</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php" style ="" data-aos="zoom-in" data-aos-duration="2000">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="display_all.php" data-aos="zoom-in" data-aos-duration="2000">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./users_area/user_registration.php" data-aos="zoom-in" data-aos-duration="2000">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cart.php" data-aos="zoom-in" data-aos-duration="2000"><img src="cart_img.png" style="width:33px;" alt=""><sup><?php cart_item(); ?></sup></a>
                </li>
                <li>
                <form class="d-flex justify-content-end" action="search_product.php" method="get">
                    <input class="form-control me-2 w-70" type="search" name="search_data" placeholder="" aria-label="Search">
                    <input type="submit" class="btn custom-btn" style=""name="search_data_product" value="Search">
                </form>
                </li>
            </ul>
        </div>
        
        
        
                
                <!-- <div class="search-container" data-aos="zoom-in" data-aos-duration="2000">
        <input type="text"  name="search" placeholder="Search..." class="search-input">
        <a href="#" class="search-btn">
                <i class="fas fa-search"></i>      
        </a>
        </div>
         -->
    </div>
</nav>
</body>
</html>