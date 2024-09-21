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

<link rel="stylesheet" href="css/.css">

<link rel="shortcut icon" href="w.jpg" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    form{
        height:500px;
        width:500px;
        background-image:url("https://img.freepik.com/premium-photo/freep-ik-background-images-collections-ai-generated-wallpaper_643360-128352.jpg");
        margin-top:50px;
    }
    
   body{
    background-image:url("https://png.pngtree.com/background/20210714/original/pngtree-red-light-effect-digital-technology-background-picture-image_1239107.jpg");
  }
  h4{
    color:white;
  }
  input{
    width: 100%;
    height:40px;
    margin-top:30px;
  }
  button{
    width: 100%;
    height:40px;
    margin-top:30px;
   
    background:green;
  }
  
    </style>
</head>
<body>
    <div class="container-fuid">
        <!-- nevbar start -->
       
             
         <!-- navbar end -->
        <!-- form start -->
        <div class="row">
            <div class="col-sm-12">
           <center> <form action="changepasscode.php" method="post">
       <h4> Old Password</h4><input type="password" name="opass"/><br><br>
      <h4>  New Password</h4><input type="password" name="npass"/><br><br>
     <h4>   Confirm Password</h4><input type="password" name="cpass"/><br><br>
        <button><h4>Change<h4></button>     
    </form><center>
            </div>
        </div>
   <!-- form end -->
  
    <!-- footer -->
    </div>
</body>
</html>