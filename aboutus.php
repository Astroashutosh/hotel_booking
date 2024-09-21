<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="shortcut icon" href="w.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=DM+Serif+Display:ital@0;1&family=Kaushan+Script&family=Merienda:wght@300..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

<style>
  body{
    background-image:url("https://i.pinimg.com/originals/8b/82/82/8b8282678cbbd41a746af855ad9fe08d.gif");
  }
  .f {
  font-family: "Kaushan Script", cursive;
  font-weight: 400;
  font-style: normal;
  color:white;
}
p ,h6{
  color:black;
}
h1,h4{
  font-weight:bolder;
  color:white;
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
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://labouroume.com/wp-content/uploads/2015/08/Chambre-1-complete-1536x1152.jpeg" alt="First slide" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="sig2.webp" alt="Second slide"  height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="taj2.webp" alt="Third slide"  height="600px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>
  

      
    <div class="row" style="margin-top:100px;">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <h1>About Us</h1>
                <p>Welcome to HotelHub, your trusted partner in seamless hotel reservations. With a mission to simplify travel planning, we provide an intuitive platform that connects travelers with a wide range of accommodation options, from budget-friendly hotels to luxurious resorts, across the globe.</p>

<p>Our platform is designed with convenience and flexibility in mind, offering a user-friendly interface that allows you to search, compare, and book the perfect stay. Whether you're planning a business trip, family vacation, or romantic getaway, we have something for every traveler.</p>

<h1>Why Choose Us?</h1>
<h4>Wide Range of Choices:</h4><p> Access a vast selection of hotels, resorts, and boutique stays at competitive prices.</p>
<h4>User-Friendly Interface:</h4> <p>Effortlessly search and filter accommodations based on location, price, amenities, and more.</p>
<h4>Secure & Easy Booking:</h4><p> We prioritize the security of your personal information, ensuring a safe booking process with trusted payment gateways.</p>
<h4>24/7 Customer Support:</h4><p> Our dedicated customer service team is always here to assist you, ensuring a smooth and worry-free booking experience.</p>
<h4>Exclusive Deals & Discounts:</h4> <p>Unlock special offers and promotions to make your stay more affordable.
At HotelHub,were not just about finding you a room—were about helping you create memorable experiences. Let us make your next trip a hassle-free one!
</p>
        </div>
        <div class="col-sm-5">
            <img src="hotel.jpg" height="500px" width="100%" alt="">
            <img src="home4[1].jpg" height="500px" width="100%"  style="margin-top:50px;"alt="">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <!-- Footer start -->

   
    <div class="row" style="background-color: #261f4d; margin-top: 50px;">
          <div class="col-sm-1" style="margin-top: 50px;"></div>
          <div class="col-sm-4" style="margin-top: 50px;">
            <h1 class="f"><img src="w.jpg" style="height: 70px; width: 70px;">HotelHub</h1>
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


    <!-- footer end -->
   </div> 
</body>
</html>