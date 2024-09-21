
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotal Management System</title>
    <link rel="shortcut icon" href="logo5.png" type="image/x-icon">
    <link rel="stylesheet" href="index1.css">

    <!-- <link rel="stylesheet" href="style.css"> -->

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
    background-image:url("https://img.freepik.com/free-vector/gradient-network-connection-background_23-2148881321.jpg");
    height:100%;
    width:100%;
   
  }
  {
    margin: 0;
    padding: 0:
    box-sizing: border-box;
    
  }
  html,body{
    height: 100%;
    width: 100%;
  }
 .img{
  transition: all 0.8s ease-in-out; 
 }

 .img:hover{
   transform: scale(1.1); 
  /*opacity: 0.6;*/
 }
 .card:hover{
   transform: scale(1.1); 
  /*opacity: 0.6;*/
 }
 .f {
  font-family: Gill Sans;
  font-weight: 400;
  font-style: normal;
  color:#8c670a;
  font-weight: bolder;
  
}
.fonts{
  font-size: 35px;
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

.foot_links{
  /* background-color: white; */
  display: flex;
  align-items:center;
  justify-content:center;
  flex-direction:column;

}

@media screen and (max-width:0px) and (min-width: 600px)
{
    .fonts{
        font-size: 20px;
    } 

    .customer{
      height: 400px !important;;
    }
} 
p , i ,h5,h6{
  color:gold;
}
button{
      background-color: #6cf542;
    }

</style>
</head>
<body >
    <div id="container-fluid" style="background:linear-gradient(#91264f)">
      <!-- navbar start -->
        <div class="row ">
            <div class="col-sm-12 ">
                <nav class="navbar navbar-expand-lg navbar-dark bg-none fixed-top bg-info" >
                  <!-- logo -->
                   <img src="logo5.png" 
                   
                   alt="" height="50px" width="50px" >
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
                            <a class="nav-link disabled" href="logout.php" style="color:white;">Logout</a>
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
        

      <!--  navbar end  -->
        <div class="row">
            
          <div class="col-sm-12 ">
            <video width="100%" autoplay muted loop height="100%" object-fit: cover;" id="vi">
              <source src="hv.mp4" type="video/mp4">
              </video>
      </div>
        </div>

      

        <div class="row" style="margin-top: 50px;">
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="padding-top: 20px;">
                <h1 class="f">About Hotel</h1>
                <p>Offering free WiFi throughout the property, OYO 80146 The Crown Inn is set in Lucknow, 10 km from Lucknow University and 1.3 km from Singapore Mall.The property is around 2.9 km from Indira Gandhi Pratishthan, 
                  4 km from Wave Mall Lucknow and 6 km from Ambedkar Park. Situated in the Gomti Nagar district, the hotel is within 10 km of KD Singh Stadium. At the hotel, all rooms come with a wardrobe, a TV, a private 
                  bathroom and bed linen. Fun Republic Mall Lucknow is 6 km from OYO 80146 The Crown Inn, while Riverside 
                  Mall Lucknow is 6 km away<span id="learnMore" style="display:none;">airport is Chaudhary Charan Singh International Airport, 18 km from the accommodation</span>
                  <i class="fa-solid fa-angles-right text-info " style="corsur:pointer; margin-left:10px;" onclick="showMore();"></i> </p>
            </div>
            <div class="col-sm-5" style="padding-top: 20px;"> 
                <img src="https://cdn.sanity.io/images/ocl5w36p/production/4a58c410b36c147a8befac7d0e8613a2a2dd4b84-3840x1861.jpg?w=1280&auto=format&dpr=2" class="img" width="100%" height="400px"/>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row customer" style=" background-color:gray; margin-top: 50px;  width: 100%;">
          <div class="col-sm-2"></div>
          <div class="col-sm-2" style="padding-top: 20px;">
           <center><p class="fonts">2500</p>
            <div style="height: 3px; width: 50px; background-color: aquamarine;"></div>
            <p>Customer</p></center>
          </div>
          <div class="col-sm-2" style="padding-top: 20px;">
            <center><p class="fonts">2500</p>
            <div style="height: 3px; width: 50px; background-color: aquamarine;"></div>
            <p>Happy Customer</p></center>
          </div>
          <div class="col-sm-2" style="padding-top: 20px;">
            <center><p class="fonts">2500</p>
            <div style="height: 3px; width: 50px; background-color: aquamarine;"></div>
            <p>Expert Technicians</p></center>
          </div>
          <div class="col-sm-2" style="padding-top: 20px;">
            <center><p class="fonts">2500</p>
            <div style="height: 3px; width: 50px; background-color: aquamarine;"></div>
            <p>Destop Reaierd</p></center>
          </div>
          <div class="col-sm-2"></div>
        </div>


        <!-- our room start -->
        <h1 class="f" style="margin-top: 50px; text-align: center;">Our Rooms</h1>
        
        <div class="row" height="400px" style="margin: 50px 0px 50px 0px; text-align:center;">
          <div class="col-sm-12">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  src="room10.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Suporior Rooms</h5>
                  <p class="card-text">Bask in the comforts of this expansive 30 sqm sanctuary, adorned with textures of wood and stone, and awash with abundant natural lighting. With a seamless fusion of nature's beauty and sophistication, Superior Rooms offer a sanctuary of tranquillity and rejuvenation.</p>
                 <button class="btn text-#bf113a">BOOK NOW</button>
                  <h5 style="color: greenyellow;">$250</h5>
                  <p>Per Night</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="room9.jpg" alt="Card image cap" height="284vw">
                <div class="card-body">
                  <h5 class="card-title">Deluxe Room</h5>
                  <p class="card-text">Enjoy the garden view from this spacious 33 sqm retreat, adorned with wood textures, decor inspired by the vibrant Neelakuranji flower, accents of stone and an abundance of natural lighting.Experience a perfect blend of nature's inspiration and contemporary elegance in our Deluxe Rooms.</p>
                <button  class="btn text-white">BOOK NOW</button>
                  <h5 style="color: greenyellow;">$250</h5>
                  <p>Per Night</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top"  src="room12.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Deluxe Room with Balcony</h5>
                  <p class="card-text">Immerse in the exquisite comfort of our Deluxe Room with Balcony that offers delightful features of the Deluxe Room with the added allure of a private balcony. Enjoy a 28 sqm retreat with garden views, wood textures, decor inspired by the vibrant Neelakuranji flower and accents of stone. Step onto your balcony and discover nature's beauty in a haven that blends serenity and charm.</p>
                <button  class="btn text-white">BOOK NOW</button>
                  <h5 style="color: greenyellow;">$250</h5>
                  <p>Per Night</p>
                </div>
              </div>
            </div>
          </div>
</div>
<!-- new rooms -->
        <div class="row" >
          <div class="col-sm-12" style="margin: top 50px; text-align:center;">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  src="room3.jpg" alt="Card image cap" height="290px">
                <div class="card-body">
                  <h5 class="card-title">Suporior Rooms</h5>
                  <p class="card-text">Enjoy the garden view from this spacious 33 sqm retreat, adorned with wood textures, decor inspired by the vibrant Neelakuranji flower, accents of stone and an abundance of natural lighting.Experience a perfect blend of nature's inspiration and contemporary elegance in our Deluxe Rooms.

</p>
                  <button class="btn text-white">BOOK NOW</button>
                  <h5 style="color: greenyellow;">$250</h5>
                  <p>Per Night</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top"  src="room8.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Deluxe Room</h5>
                  <p class="card-text">Immerse in the exquisite comfort of our Deluxe Room with Balcony that offers delightful features of the Deluxe Room with the added allure of a private balcony. Enjoy a 28 sqm retreat with garden views, wood textures, decor inspired by the vibrant Neelakuranji flower and accents of stone. Step onto your balcony and discover nature's beauty in a haven that blends serenity and charm.</p>
                <button class="btn  text-white">BOOK NOW</button>
                  <h5 style="color: greenyellow;">$250</h5>
                  <p>Per Night</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top"  src="room11.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Suporior Rooms</h5>
                  <p class="card-text">Bask in the comforts of this expansive 30 sqm sanctuary, adorned with textures of wood and stone, and awash with abundant natural lighting. With a seamless fusion of nature's beauty and sophistication, Superior Rooms offer a sanctuary of tranquillity and rejuvenation.

                </p>
                 <button class="btn  text-white">BOOK NOW</button>
                  <h5 style="color: greenyellow;">$250</h5>
                  <p>Per Night</p>
                </div>
              </div>
            </div>
          </div>
 
        </div> 
<!-- our room end and gallery start -->
       <center> <h1 style="margin-top: 50px;" class="f">Our Gallery</h1></center>
        <div class="row" style="margin-top: 50px;">
          <div class="col-sm-4">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://cdn.sanity.io/images/ocl5w36p/production/6b7dd5f3807d81a06567e7ecde110771d9b04a48-1720x1112.jpg?w=768&auto=format&dpr=2" alt="First slide" height="400px" width="500px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://www.gingerhotels.com/resourcefiles/mainimages/banner-new-3.jpg?version=9092024050736" alt="Second slide" height="400px" width="500px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="hotel5.jpg" alt="Third slide" height="400px" width="500px">
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
          <div class="col-sm-4">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="room.jpg" alt="First slide" height="400px" width="500px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="room10.jpg" alt="Second slide" height="400px" width="500px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="room12.jpg" alt="Third slide" height="400px" width="500px">
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
          <div class="col-sm-4">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="h.jpg" alt="First slide" height="400px" width="500px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="h2.jpg" alt="Second slide" height="400px" width="500px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="h3.jpg" alt="Third slide" height="400px" width="500px">
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
        <!-- /gallery end -->

<!-- signature start -->
        <div class="row" style="margin-top: 50px;">
          <div class="col-sm-6">
            <center><h1  class="f">SIGNATURE DINING</h1></center>
          </div>
          <div class="col-sm-6">
          <h5>Embark on a journey of exuisite experiences, encompassing<br>immpeccable, service, sophisticated ambience and masterful culinary <br> artistry.</h5>
            <a href="#">Explore <i class="fa-solid fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-sm-12">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="c.webp" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">CELEBRATED CHEFS</h5>
                  <p class="card-text">A distinguished roster of world-class<br>talent embodying culinary excellence<br>
                  with expertise, creativity and precision.</p>
                
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="re.avif" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">LEGENDARY RESTAURENTS</h5>
                  <p class="card-text">A collection of resturents recognized<br> for unparalleled dining experiences<br>
                  showcasing culinary prowess and <br> attentive service</p>
                  
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img" src="q.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">SIGNATURE RECIPES</h5>
                  <p class="card-text">Culinary mastery shines as each dish <br> highlights a medley of flavours and <br> 
                  textures for an unforgettable dining<br> experience.</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-sm-6">
           <center> <h1 class="f">EVENTS AND <br>CONFERENCES</h1></center>
          </div>
          <div class="col-sm-6">
            <h6>Taj elevates every occasion into an awe-inspiring, immersive<br> experience to cherish forever.</h6>
          </div>
        </div>
        <div class="row" style="margin-top: 50px;">
         
          <div class="col-sm-4">
            <img src="m1.jpg" class="img" height="300px" width="100%" style="padding-right: 20px;">
          <center><i>MEETINGS AND CONFERENCES</i></center>
          </div>
          <div class="col-sm-4">
            <img src="e.webp" class="img" height="300px" width="100%">
          <center><i>EVENTS</i></center>
          </div>
          <div class="col-sm-4">
            <img src="tw.avif" class="img" height="300px" width="100%" style="padding-left: 20px;">
            <center><i>TIMELESS WEDDINGS</i></center>
          </div>
          
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://cdn.sanity.io/images/ocl5w36p/production/07e03cd66b0803fc7e73bf8cd0d1dcdaf2e1ef61-3840x1860.jpg?w=1280&auto=format&dpr=2" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://cdn.sanity.io/images/ocl5w36p/production/9162e4c54ed1df2a51c500dac92f4a1d9739af15-729x448.jpg?w=480&auto=format&dpr=2" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://cdn.sanity.io/images/ocl5w36p/production/9fb6e505f087a217337b71322be78d6ac68e4acf-1720x1112.jpg?w=480&auto=format&dpr=2" alt="Third slide">
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
<!-- 
<center>          <div class="row" style="background-color: #42a832;margin-top: 50px; width: 1000px;height: 100px; ">
  <div class="col-sm-6" style="margin-top: 40px;">
    <h3>Subscribe to Our Newsletter</h3>
  </div>
  <div class="col-sm-4" style="margin-top: 40px;" ><input type="email" placeholder="Your Email" style="width: 300px; height: 30px;"></div>
  <div class="col-sm-2" style="margin-top: 40px;">
    <button >SUBSCRIBE</button>
  </div></div></center>

   -->

        <!-- Newsletter start -->

        <div class="row newsletter" >
          <div class="col-sm-8 newstext">
          <h3>Subscribe to Our Newsletter</h3>
          </div>
          <div class="col-sm-4 newsform">
            <form action="#" method="post">
              <input type="email" name="" id="" required>
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
        <!-- Newsletter end -->
        <!-- Map -->

        <div class="row">
          <div class="col-sm-12 mt-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14232.745557257873!2d80.93628303432764!3d26.897579126494172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957cbf43233f5%3A0x3a22b7c8a77962f0!2sAliganj%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1725636880491!5m2!1sen!2sin" 
            width="99%" height="400px" style="border: 1px; solid;"   referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <!-- map end -->
        <!--  Footer us start-->

  

        <div class="row" style="background-color: #362701; ">
          <div class="col-sm-1" style="margin-top: 50px;"></div>
          <div class="col-sm-4" style="margin-top: 50px;">
            <h1 class="f" > <img src="logo5.png" height="60px" width="60px">HotelHub</h1>
            <p class="text-white">Taj Hotels is a chain of luxury hotels and a subsidiary of the Indian Hotels Company Limited, headquartered in Mumbai, India. Incorporated by Jamsetji Tata in 1902, the company is a part of the Tata Group. The company employed over 20,000 people in the year 2010.</p>
            <a href="https://facebook.com" target="_blank" class="text-white"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="text-white text-decoration-none"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" class="text-white"><i class="fa-brands fa-instagram fa-flip"></i></a>
            <a href="#" class="text-white "><i class="fa-brands fa-linkedin fa-bounce"></i></a>
            <a href="#"  class="text-white "><i class="fa-brands fa-youtube fa-beat"></i></a>
            <a href="#" class="text-white "><i class="fa-brands fa-square-instagram fa-beat"></i></a>

          </div>
          <div class="col-sm-3 foot_links" style="margin-top: 50px;">
            <h1 class="f">Links</h1>
            <div class="footer_links">
            <a href="#" class="text-white">Home</a><br>
            <a href="#" class="text-white">About Us</a><br>
            <a href="#" class="text-white">Book Room</a><br>
            <a href="#" class="text-white">Room Lists</a><br>
            <a href="#" class="text-white">Register</a><br>
            <a href="#" class="text-white">Login</a><br>
            <a href="#" class="text-white">Contact Us</a><br>
            </div>

          </div>
          <div class="col-sm-3" style="margin-top: 50px; margin-bottom:50px">
            <h1 class="f">Contact Us</h1>
            <a href="#" class="text-white"><i class="fa-solid fa-location-dot fa-flip" ></i>No.1, Taj Mahal Hotel, South Block, Man Singh Road Area, New Delhi, Delhi 110011</a><br>
            <a href="#" class="text-white"><i class="fa-solid fa-phone fa-bounce"></i>9876543276</a><br>
            <a href="#" class="text-white"><i class="fa-solid fa-envelope fa-beat-fade"></i></a>
          </div>
          <div class="col-sm-1" style="margin-top: 50px;"></div>
          
        </div>
        <!-- Contact us end -->

        <div class="row text-center text-white" style="background-color: #362701; ">
          <div class="col-sm-6" style="margin-top: 20px;">
            <h6 >&copy Copyright All Rights Reserved</h6>
          </div>
          <div class="col-sm-6" style="margin-top: 20px; text-decoration:none;">
            <h6 >Designed and developed by <a href="#" style="text-decoration:none;">Ashutosh Yadav</a> with &#9829; !</h6>
          </div>
          </div>

    </div>

    <script src="js/script.js"></script>
   
</body>
</html>