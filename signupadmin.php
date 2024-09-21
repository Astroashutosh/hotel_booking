<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  a ,th:hover{
    background:yellow;
    color:white;
  }
  #table  {
    height:auto;
    width:100%;
    border:5px inset;
    background:violet;
    align-item:center;
    justify-content:center;
    margin-left:100px;
    text-align:center;
    float:right;
  }
  th{
    background:gray;
    text-align:center;
  }
  .ul{
    background:gray;
  }
  body{
    background-image:url("https://img.freepik.com/premium-photo/abstract-background-images-wallpaper-ai-generated_643360-20677.jpg");
  }
  </style>
</head>
<body>
    <div class="container-fluid" >
        <div class="row" >
            <div class="col-sm-2">
            <ul class="list-group">
            <li class="list-group-item"><a href="#">Hotel Management</a></li>
  <li class="list-group-item"><a href="index1.php">Home</a></li>
  <li class="list-group-item"><a href="#">About Us</a></li>
  <li class="list-group-item"><a href="adminbookroom.php">Book Room</a></li>
  <li class="list-group-item"><a href="room.php">Room List</a></li>
  <li class="list-group-item"><a href="signupadmin.php">Sign Up</a></li>
  <li class="list-group-item"><a href="#">Login</a></li>
  <li class="list-group-item"><a href="admincontactus.php">Contact Us</a></li>
</ul>
            </div>
            <div class="col-sm-10">
                <div class="row" style="height:50px;background:gray">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                    </div>

                    <div class="row mt-5">
                      <table class="table table-bordered" id="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            
                           
                          </tr> 
                        </thead>
                        <tbody>
                        <!-- <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                         </tr> -->
                          <?php
                          $conn=mysqli_connect("localhost","root","","hoteltbl");
                          $sel="select * from bookroomtbl";
                          $r=mysqli_query($conn,$sel);
                          while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
                          {
                            ?>
                            <tr>
                            <td><?php echo $k['0']?></td>
                            <td><?php echo $k['1']?></td>
                            <td><?php echo $k['2']?></td>
                            <td><?php echo $k['3']?></td>
                           
                            </tr>
                            <?php
                          }
                          ?>
                         
                        </tbody>
                      </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>