<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="login.css">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=DM+Serif+Display:ital@0;1&family=Kaushan+Script&family=Merienda:wght@300..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    /* form{
        border: 5px inset;
        background-color:#1e4466;
    } */
    </style>
</head>
<body>
    <div>
        <div class="row">
           
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <form action="logincode.php" method="post" >
            <h1 style="color:red;padding-top:20px">Login</h1>
           
           <input type="email" name="email" placeholder="Email"><br><br>
           <input type="password" name="password" placeholder="Password"><br><br>
           <button>Login</button>
              <h1 style="color:red;padding-top:20px">OR</h1>
              <div class="row">
                <div class="col-sm-2"></div>
               <div class="col-sm-2">
               <a href="google">   <img src="g.png" alt="" height="50px" ></a>
               </div>
               <div class="col-sm-2">
               <a href="google">  <img src="g2.png" alt="" height="50px" ></a>
               </div>
               <div class="col-sm-2">
               <a href="google">   <img src="github.png" alt="" height="50px" ></a>
               </div>
               <div class="col-sm-2">
               <a href="google">  <img src="li.png" alt="" height="50px"></a>
               </div>
               <div class="col-sm-2"></div>
              </div>
             
           </form>
            </div>
            <div class="col-sm-4"></div>
        </div>

    </div>
</body>
</html>