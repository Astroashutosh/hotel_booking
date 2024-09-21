<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="contact.css">

    <link rel="shortcut icon" href="w.jpg" type="image/x-icon">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      body{
        background-image:url("https://png.pngtree.com/background/20210717/original/pngtree-linear-technology-light-effect-background-picture-image_1444384.jpg");
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
    <div class="container-fluid" >
      <!-- nevbar start -->
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
        

       <!-- nevbar end -->
        <div class="row">
            <div class="col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="taj5.webp" alt="First slide" height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="taj2.webp" alt="Second slide" height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="taj.webp" alt="Third slide" height="500px">
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
            </div>
        </div>
        <!-- form start -->
        <div class="row mt-5">
          <div class="col-sm-1"></div>
           <div class="col-sm-5">
           <table class="mt-5">
           <form action="contactuscode.php" method="post">
           
            <tr><th style="text-align:center;"><h1>Contact Us</h1></th></tr>
            <tr><td><input type="text" name="name" placeholder="First Name"></td></tr>
            <tr><td><input type="text" name="lastname" placeholder="Last Name"></td></tr>
            <tr><td><input type="email" name="email" placeholder="Email"></td></tr>
            <tr><td><input type="number" name="phone" placeholder="Phone"></td></tr>
            <tr><td><input type="text" name="request" placeholder="Request or Query"></td></tr>
            <tr><td><textarea name="writeus" id="write" placeholder="Write Us"></textarea></td></tr>
           <tr > <td ><button class="submit">Submit</button></td></tr>
             
            </form>
            </table>
           </div>


<!-- map start -->
           <div class="col-sm-6">
           <div class="row">
          <div class="col-sm-12 mt-5" style="height:700px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14232.745557257873!2d80.93628303432764!3d26.897579126494172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957cbf43233f5%3A0x3a22b7c8a77962f0!2sAliganj%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1725636880491!5m2!1sen!2sin" 
            width="99%" height="600px" style="border: 1px; solid;"   referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
           </div>
        </div>
        <!-- form end -->
         <div class="row" style="margin-top:50px;">
            <div class="col-sm-4" id="a">
            <div class="a"><i class="fa-solid fa-mobile-screen-button fa-fade" style="font-size:30px;"></i>
            <h4>CallUs</h4>
            <p>0522-3539001</p>
            <p>0522-2317701</p></div>
            </div>
            <div class="col-sm-4" id="a">
            <div class="a"><i class="fa-duotone fa-solid fa-map-location-dot fa-beat" style="font-size:30px;"></i>
            <h4>Locate Us</h4>
            <p>HotelHub India Hotel Booking System <br>Sushant Golf City IBB-2T-5<br>
            Lucknow-226030.U.P</p></div>
            </div>
            <div class="col-sm-4" >
           <div class="a"> <i class="fa-brands fa-telegram fa-bounce" style="font-size:30px;"></i><br>
           <h4>Send Us A Message</h4>
            <a href="#">helpdesklucknow@HotelHub.com</a></div>
            </div>


         </div>
         <!-- footer start -->
         <div class="row" style="background-color: #261f4d; margin-top: 50px;">
          <div class="col-sm-1" style="margin-top: 50px;"></div>
          <div class="col-sm-4" style="margin-top: 50px;">
            <h1 class="f" ><img src="w.jpg" style="height: 70px; width: 70px;">HotelHub</h1>
            <p class="text-white">Taj Hotels is a chain of luxury hotels and a subsidiary of the Indian Hotels Company Limited, headquartered in Mumbai, India. Incorporated by Jamsetji Tata in 1902, the company is a part of the Tata Group. The company employed over 20,000 people in the year 2010.</p>
            <a href="https://facebook.com" target="_blank" class="text-white"><i class="fa-brands fa-facebook" style="font-size:20px;margin-left:10px;"></i></a>
            <a href="https://x.com/?lang=en" class="text-white text-decoration-none"><i class="fa-brands fa-x-twitter" style="font-size:20px; margin-left:10px;"></i></a>
            <a href="https://www.instagram.com/" class="text-white"><i class="fa-brands fa-instagram fa-flip" style="font-size:20px; margin-left:10px;"></i></a>
            <a href="https://www.linkedin.com/in/ashutosh-yadav-8a055b321/" class="text-white "><i class="fa-brands fa-linkedin fa-bounce" style="font-size:20px; margin-left:10px;"></i></a>
            <a href="https://www.youtube.com/"  class="text-white "><i class="fa-brands fa-youtube fa-beat" style="font-size:20px; margin-left:10px;"></i></a>
           
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
            <a href="https://www.google.com/maps/@26.848692,80.9425127,9z?entry=ttu&g_ep=EgoyMDI0MDkwNC4wIKXMDSoASAFQAw%3D%3D" class="text-white"><i class="fa-solid fa-location-dot fa-flip" style="font-size:20px; margin-top:10px;"></i>No.1, Taj Mahal Hotel, South Block, Man Singh Road Area, New Delhi, Delhi 110011</a><br>
            <a href="#" class="text-white"><i class="fa-solid fa-phone fa-bounce" style="font-size:20px; margin-top:20px"></i>9876543276</a><br>
            <a href="#" class="text-white"><i class="fa-solid fa-envelope fa-beat-fade" style="font-size:20px; margin-top:20px"></i></a>
          </div>
          <div class="col-sm-1" style="margin-top: 50px;"></div>
          
        </div>
          <!-- footer end -->
    </div>
</body>
</html>