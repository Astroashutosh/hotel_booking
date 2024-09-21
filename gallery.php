<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="gallery.css">

<style>
   body{
    background-image:url("https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA3L2pvYjE0NDgtYmFja2dyb3VuZC0wNGEteF8xLmpwZw.jpg");
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
    <div class="container-fluid" id="con" >
       <!-- nav -->
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
        <!-- nav end -->
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
      <img class="d-block w-100" src="http://www.lavina.ba/photo/gallery/hotel/thumb/002.jpg" id="cru">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="https://media.istockphoto.com/id/1403277131/photo/business-people-checking-in-at-hotel-reception-desk.jpg?b=1&s=612x612&w=0&k=20&c=Y7B-XSi26M541vxZn3mpn-dKGlc390VHzONEg1eudoY=" alt="Second slide" id="cru">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/460537/pexels-photo-460537.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Third slide" id="cru">
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
        <!-- hotel -->
        <h1>HOTELS</h1>
         <div class="row" style="margin-top:50px">
         <div class="col-sm-3">
            <img src="https://images.pexels.com/photos/14750423/pexels-photo-14750423.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        </div>
         <div class="col-sm-3">
            <img src="https://images.pexels.com/photos/27519310/pexels-photo-27519310/free-photo-of-hilton-hotel-in-cairo.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
         </div>
         <div class="col-sm-3">
            <img src="https://images.pexels.com/photos/5088101/pexels-photo-5088101.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
         </div>
         <div class="col-sm-3">
            <img src="https://images.pexels.com/photos/1697076/pexels-photo-1697076.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
         </div>
         </div>
         <!-- hotel end -->
         <div class="row" style="margin-top:50px;">
         <div class="col-sm-3">
            <img src="https://images.pexels.com/photos/441379/pexels-photo-441379.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
        </div>
         <div class="col-sm-3">
            <img src="https://cdn.sanity.io/images/ocl5w36p/production/dc58fd64023a44759dbf4dcdd7abd32301068f93-1400x1120.jpg?w=480&auto=format&dpr=2" alt="" >
         </div>
         <div class="col-sm-3">
            <img src="https://images.pexels.com/photos/1560065/pexels-photo-1560065.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
         </div>
         <div class="col-sm-3">
            <img src="https://images.pexels.com/photos/1082326/pexels-photo-1082326.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
         </div>
         </div>
         <!-- hotel end -->
          <h1>Reception and lobby</h1>
          <div class="row" style="margin-top:50px;">
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/recepcija/large/001.jpg" alt="" >
            </div>
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/recepcija/thumb/002.jpg" alt="" >
            </div>
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/recepcija/thumb/003.jpg" alt="">
            </div>
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/recepcija/thumb/004.jpg" alt="">
            </div>
          </div>
          <!-- reception end -->
           <h1>Rooms and suites</h1>
           <div class="row" style="margin-top:50px;">
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/001.jpg" alt="">
            </div>
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/002.jpg" alt="">
            </div>
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/003.jpg" alt="">
            </div>
            <div class="col-sm-3">
                <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/004.jpg" alt="">
            </div>
           </div>
           <!-- rooms1 end -->
            <div class="row" style="margin-top:50px;">
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/009.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/010.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/011.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/013.jpg" alt="">
                </div>
            </div>
            <!-- room2 -->
            <div class="row" style="margin-top:50px;">
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/014.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/015.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/022.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/smestaj/thumb/024.jpg" alt="">
                </div>
            </div>
            <!-- room2 end -->
             <h1>Restaurant and Club</h1>
             <div class="row" style="margin-top:50px">
                <div class="col-sm-3">
                    <img src="r.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="r2.avif" alt="" >
                </div>
                <div class="col-sm-3">
                    <img src="r3.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="r6.jpg" alt="" >
                </div>
             </div>
             <!-- club -->
              <div class="row" style="margin-top:50px">
                <div class="col-sm-3">
                    <img src="https://images.pexels.com/photos/3172566/pexels-photo-3172566.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
                </div>
                <div class="col-sm-3">
                    <img src="https://images.pexels.com/photos/941864/pexels-photo-941864.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
                </div>
                <div class="col-sm-3">
                    <img src="https://images.pexels.com/photos/2034851/pexels-photo-2034851.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
                </div>
                <div class="col-sm-3">
                    <img src="https://images.pexels.com/photos/2350325/pexels-photo-2350325.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                </div>
              </div>
              <!--Wellness and swimming pool  -->
              <h1>Wellness and swimming pool</h1>
              <div class="row"  style="margin-top:50px">
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/001.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/002.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/003.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/004.jpg" alt="">
                </div>
              </div>
              <!-- Wellness and swimming pool 2-->
              <div class="row"  style="margin-top:50px">
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/005.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/006.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/007.jpg" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="http://www.lavina.ba/photo/gallery/wellness-centar/thumb/008.jpg" alt="">
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