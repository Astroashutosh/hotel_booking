<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style2.css">
<style>
body{
  background-image:url("https://png.pngtree.com/thumb_back/fh260/background/20210422/pngtree-blue-pink-gradient-star-dream-princess-background-image_649075.jpg")
}
.que{
    height: 100px;
    width: 100%;
    border: 3px inset;
    background-color: gray;
    text-align:center;
    display:flex;
}
.btn2{
    height: 50px;
    width: 250px;
    border-radius: 20px;
   margin:20px 0px 0px 70px ;
   float:right;
}
.hed{
  font-family:serif;
  font-weight:bolder;
  text-align:center;
  margin-top:50px;
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
    
  
  <!-- carousel start -->
  <div class="row">
    <div class="col-sm-12">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://cdn.sanity.io/images/ocl5w36p/production/4c64209add58b43296dc42a06ac734cd26cc25ad-1720x1112.jpg?w=480&auto=format&dpr=2"  height="600px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cf.bstatic.com/xdata/images/hotel/square600/29466558.webp?k=7f9cf4736f69b30c20fa7a751bb8711fa195bc9ff6092d5412d52daf6cada17f&o="  height="600px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cf.bstatic.com/xdata/images/hotel/square600/285825586.webp?k=acd6fa84499149459629d3c7ebc4008d3fe4f675a67c0202be2622dac900b7f1&o="  height="600px" alt="Third slide">
    </div>
  </div>
</div>
    </div>
  </div>
  <!-- carousel end -->
   <h1 class="hed">Our Rooms</h1>
   <div class="row" style="margin-top:50px; text-align:center;">
   
    <div class="col-sm-12">
    <div class="card-deck" style="text-align:center;">
  <div class="card">
    <img class="card-img-top" src="https://cf.bstatic.com/xdata/images/hotel/square600/270323047.webp?k=bade09d7901e1282156f13c3b39e3a8b9c8d45170b2f1184565d3fc304c42d70&o=" alt="Card image cap" height="300px">
    <div class="card-body">
      <h5 class="card-title">STANDARD room</h5>
      <p class="card-text">$350.00 / per night</p>
    
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://cf.bstatic.com/xdata/images/hotel/square600/95058973.webp?k=c4092495705eab3fad626e8e1a43b1daf7c623e4ea41daf26a201b4417a71709&o=" alt="Card image cap" height="300px">
    <div class="card-body">
      <h5 class="card-title">FAMILY ROOM</h5>
      <p class="card-text">$400.00 / per night</p>
   
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://preview.colorlib.com/theme/suites/images/img_3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">SINGLE ROOM</h5>
      <p class="card-text">$380 / per night</p>
 
    </div>
  </div>
</div>
    </div>
   </div>
   <!--  -->
   <div class="row" style="margin-top: 50px;">
    <div class="col-sm-12">
    <div class="card-deck" style="text-align:center;">
  <div class="card" >
    <img class="card-img-top" src="https://cf.bstatic.com/xdata/images/hotel/square600/519123066.webp?k=204a4463386d0b48c0e1762549f5331b87cced5bae335dc4eea525a7e1d7c13b&o=" alt="Card image cap" height="300px">
    <div class="card-body" style="text-align:center;">
      <h5 class="card-title">COUPLE ROOM</h5>
      <p class="card-text">$450.00 / per night</p>
   
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://q-xx.bstatic.com/xdata/images/xphoto/263x210/45450084.jpeg?k=f8c2954e867a1dd4b479909c49528531dcfb676d8fbc0d60f51d7b51bb32d1d9&o=" alt="Card image cap" height="300px">
    <div class="card-body">
      <h5 class="card-title">SIGNATURE ROOM</h5>
      <p class="card-text">$500.00 / per night</p>
   
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://cf.bstatic.com/xdata/images/hotel/square240/575184456.jpg?k=642ef81066d5fa5ee40e0fcd66591666563dad118e10f00152bab72728278b58&o=" alt="Card image cap" height="300px">
    <div class="card-body">
      <h5 class="card-title">DELUXE ROOM</h5>
      <p class="card-text">$780 / per night</p>
 
    </div>
  </div>
</div>
    </div>
   </div>
   <!-- reservtion -->
<div class="row" style="margin-top:50px;">
<div class="col-sm-2"></div>
<div class="col-sm-8">
 <div class="que"><h1 style="background:black;height:50px;margin-top:20px;color:white;margin-left:50px;float:left;">For Reservation 0r Query?</h1><button class="btn2">+1234567890</button></div>
</div>
<div class="col-sm-2"></div>
</div>
<!-- reservation end -->
 <div class="row" style="margin-top:100px;">
  <div class="col-sm-3">
    <img src="https://cf.bstatic.com/xdata/images/hotel/square600/91933535.webp?k=832521320e4938af5ee2bd054cafdab7941cd0aac9166e75e106fdc88eb96613&o=" alt="" style="width:100%;height:300px">
  </div>
  <div class="col-sm-3">
  <img src="https://cf.bstatic.com/xdata/images/hotel/square600/579099936.webp?k=e04cc7f7fe864ce09b7d7d978dbb7db3e558038a2151eb7c4c11e895bafbd8c0&o=" style="width:100%;height:300px">
  </div>
  <div class="col-sm-3">
  <img src="https://cf.bstatic.com/xdata/images/hotel/square600/559654140.webp?k=89e79aa75ec8a78c63c6f97559ec8f893de372401cdde1b4a2ef8fa1b2389631&o="  style="width:100%;height:300px">
  </div>
  <div class="col-sm-3">
  <img src="https://cf.bstatic.com/xdata/images/hotel/square600/109319008.webp?k=5170e41a9f38e078ccee474236146034f69df6c0ddb91f1484cb733a5ab0e028&o=" style="width:100%;height:300px">
  </div>
 </div>
<!--footer start  -->
<div class="row" style="background-color: #261f4d; margin-top: 0px;">
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