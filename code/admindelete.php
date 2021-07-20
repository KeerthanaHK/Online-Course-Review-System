<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Review | Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/png" href="./assets/reviews-logo--box2.png" />

</head>

<body style="background-image:url(./img/200.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;" class="team-body" >
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: white !important;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./assets/reviews-logo--box2.png" alt="" width="50px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto" style="font-size: 1.15em !important">
          <a class="nav-item nav-link mr-5" href="index.php">Home</a>
          <a class="nav-item nav-link active mr-5" href="./pg.php">Reviews</a>
          <a class="nav-item nav-link mr-5" href="./review.php" >Logout</a>
          <?php
          session_start();
            if(isset($_SESSION['aid'])){
          
                  echo '<a class="nav-item nav-link mr-5" href="./logout.php">Logout</a>';
                  echo '<script>console.log(\''.$_SESSION['aid'].'\')</script>';
          
            }
            ?> 


<?php

  $db = mysqli_connect("localhost", "root", "", "pg");
                    
  // Check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
  $query = mysqli_query($db, "select * from reviews");
?>
        </div>
      </div>
    </div>
  </nav>

  <div class="container event-container" style="min-height:100vh; margin-top:60px">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="container-fluid bg-white"  id="eventDumpArea" style="padding: 60px">


  <center>
    <h1>ALL REVIEWS
    </h1>
    <form method="post" action="delete.php">
    <table border="1">
    <tr>
      <th></th>
      <th>Course name</th>
      <th>Comment</th>
      <th>Level</th>
      <th>Cost</th>
      <th>Rating</th>
    </tr>
    <?php
        while($row =mysqli_fetch_array($query)){
          echo "<tr>";
          echo "<td><input type='checkbox' name='checkbox[]' value='".$row['rid']."'></td><td>".$row['coursename']."</td>";
          echo "<td>".$row['comment']."</td>";
          echo "<td>".$row['level']."</td>";
          echo "<td>".$row['price']."</td>";
          echo "<td>".$row['stars']."</td>";
          echo "</tr>";
          
        }
        echo "</table>";
    ?>
    
     <input type="submit" name="delete" id="delete" value="Delete" style="margin-top: 10px; background-color: #14CE6B; font-size: 14px;
    font-weight: 400;
    line-height: 1.1;
    text-transform: uppercase;
    letter-spacing: inherit;
    color: rgba(255, 255, 255, 0.87);
    outline: 0;
    outline-offset: 0;
    border: 0;
    border-radius: 2px;
    transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -webkit-transition: all 0.15s ease-in-out;">
    </form>
        <?php
          mysqli_close($db);
        ?>
  
  </center>


  </div>
        </div>
    </div>
</div>

<div class="pt-5 pb-5 footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-xs-12 about-company">
            <h2>Online Course Review System</h2>
            <p class="pr-5 text-white-50">GSSS Institute of Engineering and Technology for Women,<br>KRS Road,Metagalli,Mysuru
              <br>Karnataka - 570016</p>
            <!-- <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p> -->
          </div>
          
        <div class="row mt-5">
          <div class="col copyright">
            <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad3bc45f55.js" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>



  
</body>

</html>

