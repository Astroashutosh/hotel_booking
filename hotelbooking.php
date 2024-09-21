<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>

    <link rel="shortcut icon" href="w.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  body{
  background-image:url("https://i.pinimg.com/736x/d4/6a/69/d46a694d4d054e94d2122b8835df2a52.jpg")
}
#con{
    background-image:url("");
    
  }
    .btn{https://media.istockphoto.com/id/1448246714/vector/abstract-polygonal-space-triangles-with-connecting-dots-and-lines-background-concept-for.jpg?s=612x612&w=0&k=20&c=5Bq5Pt8vHTYo4V82ZLSRGIr3y9sRA5q9KqOniVBomIc=
       background:#52eb34;
       justify-content: center;
    }
    .f {
  font-family: "Kaushan Script", cursive;
  font-weight: 400;
  font-style: normal;
  color:white;
}

select{
  width:100%;
  height: 40px;
   border:none ;
}
#request{
  width: 100%;
  border:none ;
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
    <div class="container-fluid" id="con">
<!-- navbar start -->
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
        


<!-- navbar end -->
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
      <img class="d-block w-100" src="taj7.webp" alt="First slide" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="taj6.webp" alt="Second slide" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="taj5.webp" alt="Third slide" height="600px">
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



<!-- crosel end & form start-->
    <div class="row" style="margin-top:100px;">
      <div class="col-sm-1"></div>
        <div class="col-sm-5">
         
            <table style="background-color:gray; color:white">
              
            <form action="hotelbookingcode.php" method="post">
              <tr><th colspan="2" ><h1 class="re">Book Room</h1></th></tr>
       <tr><td colspan="2"><h5> Name<h5></td></tr>
        <tr><td><input type="text" name="name" placeholder="First Name"></td>
       <td> <input type="text" name="lastname" placeholder="last Name"></td></tr>
      <tr><td colspan="2"><h5>Room Type</h5></td></tr>
    
      <tr><td colspan="2"><select name="room"placeholder="Select" >
        <option>Standard Room(1-2people)</option>
        <option>Family Room(1-4 people)</option>
        <option>Private Room(1-3 people)</option>
        <option>Mixed Dorm Room(6 people)</option>
        </select></td></tr>

       <tr><td><h5>Arrival Date & Time</h5></td></tr>
<tr><td><input type="date" name="date"></td>
   <td><input type="time" name="time"></td></tr>
   <tr><td colspan="2"><h5>Departure Date</h5></td></tr>
   <tr><td colspan="2"><input type="month" name="departuredate"></td></tr>
   <tr><td colspan="2"><h4>E-mail</h4></td></tr>
    <tr ><td colspan="2"><input type="email" name="email"></td></tr>
   <tr><td colspan="2"> <h5>Number of Guests</h5></td></tr>
    <tr><td colspan="2"><input type="number" name="guests"><br></td></tr>
   <tr><td colspan="2"><h5>Special Requests</h5></td></tr>
     <tr><td colspan="2"> <textarea name="req" id="request"></textarea></td></tr>
<tr><td colspan="2"><button class="sub">Submit</button></td></tr>
</form>
</table>

</div>
<!-- form end -->
<div class="col-sm-6">
    <img src="taj2.webp" height="400px" width="100%" style="margin-top:100px;">
  
</div>
</div>


<!-- footer start -->
<div class="row" style="background-color: #261f4d; margin-top: 50px;">
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
<!-- footer end -->

        </div>
</body>
</html>