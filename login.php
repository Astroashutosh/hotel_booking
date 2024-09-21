

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style2.css">

<link rel="shortcut icon" href="w.jpg" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <style>
     body{
    background-image:url("https://png.pngtree.com/thumb_back/fh260/background/20200731/pngtree-blue-carbon-background-with-sport-style-and-golden-light-image_371487.jpg");
  }
    /* form{
        border: 5px inset;
        background-color:#1e4466;
    } */
    a{
      text-align:center;
    }
    th{
      font-size:30px;
      color:white;
      font-weight:bold;
      text-align:center;
    }
    td{
      text-align:center;
    }
    
   .logo{
    height:60px;
    width:60px;
   }
    .hover_color{
    transition:all 0.7s ease-in;
    border-radius:5px;
    margin-left: 10px;
    font-weight:600 !important; 
    
}
.hover_color:hover{
  border-radius:5px;
  background-color: black;
}
    
    </style>

</head>
<body>
    <div class="container-fluid ">
    <div class="row ">
            <div class="col-sm-12 ">
                <nav class="navbar navbar-expand-lg navbar-dark bg-none fixed-top bg-info" >
                  <!-- logo -->
                   <img src="logo5.png" class="logo">
                   <!--  -->
                    <!-- <a class="navbar-brand" href="" style="color:#4287f5	;">Home</a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active hover_color">
                          <a class="nav-link" href="index1.php" style="color:white;">Home</a>
                        </li>
                        <li class="nav-item active hover_color">
                          <a class="nav-link" href="aboutus.php" style="color:white;"> About Us</a>
                        </li>
                        
                        <li class="nav-item hover_color">
                          <a class="nav-link" href="hotelbooking.php" style="color:white;">Book Room</a>
                        </li>
                        <li class="nav-item dropdown hover_color">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                            Room Lists
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="rooms.php">Standard Room</a>
                            <a class="dropdown-item" href="family.php">Family Room</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="single.php">Single Room</a>
                          </div>
                        </li>
                        <!--  -->
                        <li class="nav-item hover_color">
                          <a class="nav-link disabled" href="gallery.php" style="color:white;">Gallery</a>
                        </li>
                        <!--  -->
                        <li class="nav-item hover_color">
                          <a class="nav-link disabled" href="signup.php" style="color:white;">Sign Up</a>
                        </li>
                         
                        <li class="nav-item hover_color">
                            <a class="nav-link disabled" href="login.php" style="color:white;">Login</a>
                          </li>
                          <li class="nav-item hover_color">
                            <a class="nav-link disabled" href="Contactus.php" style="color:white;">Contact Us</a>
                          </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      </form>
                    </div>
                  </nav>
            </div>    
        </div>
      
          <!-- carosel start-->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://cf.bstatic.com/xdata/images/hotel/square600/313975735.webp?k=361311de6c0feb84089697fd4e21960226c8bd31d0577c95fed9af86a8e184cc&o=" alt="First slide" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.freepik.com/free-photo/swimming-pool-beach-luxury-hotel-outdoor-pools-spa-amara-dolce-vita-luxury-hotel-resort-tekirova-kemer-turkey_146671-18751.jpg?size=626&ext=jpg&ga=GA1.1.1324675553.1725190992&semt=ais_hybrid" alt="Second slide" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-with-umbrella-chair-around-swimming-pool_74190-1071.jpg?size=626&ext=jpg&ga=GA1.1.1324675553.1725190992&semt=ais_hybrid" alt="Third slide" height="600px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- carosel end login start-->
 <div class="row"  style="margin-top:50px">
  <div class="col-sm-4"></div>
<div class="col-sm-4"> 
<table style="width:100% ; height:500px; border:7px inset;" >
        <form action="logincode.php" method="post">
            <tr><th colspan="4"><h2>Login<h2></th></tr>
            <tr><td colspan="4"><input type="email" name="email" placeholder="Email"></td></tr>
            <tr><td colspan="4"><input type="password" name="password" placeholder="Password"></td></tr>
        <tr><td colspan="4"><button>Login</button></td></tr>

        <tr><th colspan="4">OR</th></tr>
        <tr>
          <td>  <a href="https://www.google.com/">   <img src="g.png" alt="" height="50px" ></a></td>
        <td>  <a href="https://www.facebook.com/">   <img src="g2.png" alt="" height="50px" ></a></td>
        <td>  <a href="https://github.com/">   <img src="github.png" alt="" height="50px" ></a></td>
        <td>  <a href="https://www.linkedin.com/in/ashutosh-yadav-8a055b321/">   <img src="li.png" alt="" height="50px" ></a></td>
      </tr>
           <tr><td colspan="4"><a href="#">Forgot Password</a></td></tr>
           <tr><td colspan="4"><h5>Don't have an account? <a href="signup.php">Sign up</a></h5></td></tr>
        </form>
    </table>
</div>
<div class="col-sm-4"></div>
 </div> 

 

 <!-- login end -->
  <div class="row">
    <div class="col-sm-12">
    <div class="row" style="background-color:#123061; margin-top: 50px;">
          <div class="col-sm-1" style="margin-top: 50px;"></div>
          <div class="col-sm-4" style="margin-top: 50px;">
            <h1 class="f" ><img src="w.jpg" style="height: 70px; width: 70px;">HotelHub</h1>
            <p class="text-white">Taj Hotels is a chain of luxury hotels and a subsidiary of the Indian Hotels Company Limited, headquartered in Mumbai, India. Incorporated by Jamsetji Tata in 1902, the company is a part of the Tata Group. The company employed over 20,000 people in the year 2010.</p>
            <a href="https://facebook.com" target="_blank" class="text-white"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="text-white text-decoration-none"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" class="text-white"><i class="fa-brands fa-instagram fa-flip"></i></a>
            <a href="#" class="text-white "><i class="fa-brands fa-linkedin fa-bounce"></i></a>
            <a href="#"  class="text-white "><i class="fa-brands fa-youtube fa-beat"></i></a>
            <a href="#" class="text-white "><i class="fa-brands fa-square-instagram fa-beat"></i></a>

          </div>
          <div class="col-sm-3" style="margin-top: 50px;">
            <h1 class="f">Links</h1><br><br>
            <a href="#" class="text-white">Home</a><br>

            <a href="#" class="text-white">About Us</a><br>
            <a href="#" class="text-white">Book Room</a><br>
            <a href="#" class="text-white">Room Lists</a><br>
            <a href="#" class="text-white">Register</a><br>
            <a href="#" class="text-white">Login</a><br>
            <a href="#" class="text-white">Contact Us</a><br>

          </div>
          <div class="col-sm-3" style="margin-top: 50px;">
            <h1 class="f">Contact Us</h1>
            <a href="#" class="text-white"><i class="fa-solid fa-location-dot fa-flip" ></i>No.1, Taj Mahal Hotel, South Block, Man Singh Road Area, New Delhi, Delhi 110011</a><br>
            <a href="#" class="text-white"><i class="fa-solid fa-phone fa-bounce"></i>9876543276</a><br>
            <a href="#" class="text-white"><i class="fa-solid fa-envelope fa-beat-fade"></i></a>
          </div>
          <div class="col-sm-1" style="margin-top: 50px;"></div>
          
        </div>
    </div>
  </div>
    </div>
    
</body>
</html>