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
          <a class="nav-item nav-link mr-5" href="./review.php">Write a Review</a>
          <?php
          session_start();
            if(isset($_SESSION['uid'])){
          
                  echo '<a class="nav-item nav-link mr-5" href="./logout.php">Logout</a>';
                  echo '<script>console.log(\''.$_SESSION['uid'].'\')</script>';
          
            }else{

                 echo '<a class="nav-item nav-link mr-5" href="./login.html">Login/Signup</a>';
                 echo '<script>console.log(\'shit\')</script>';


            }     
          ?>
        </div>
      </div>
    </div>
  </nav>

  <div class="container event-container" style="min-height:100vh; margin-top:60px">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="container-fluid bg-white"  id="eventDumpArea" style="padding:unset">
                <?php
                    include('config.php');
                    $pid = $_GET['pid'];
                    $query = "SELECT * FROM pg WHERE pid = $pid";
                    $result = $db->query($query);
                    $row = $result->fetch_assoc();

                    echo '<div class="row">';
                    echo '<div class="col-md-12 col-sm-12" style="margin:0;">';
                    //echo '<div class="event-d-img" style="background-image:url(./img/800.jpg)">';  
                    echo '</div>';
                    echo '</div>';
                    //echo '</div>';


                    echo '<div class="row" style="padding-left:3%; padding-right:3%; padding-top:3%">';
                    echo ' <div class="col-md-12 col-sm-12">';
                    echo ' <h2 class="event-d-heading" style="color:black !important;">'.$row['pname'].'</h2>';
                    // echo '  <p style="font-size:1.2rem">${event.date}</p>  '; 
                   echo ' </div>';
                   echo ' </div>';

                   
                


                echo '<div class="row" style="padding-left:3%; padding-right:3%; padding-top:3%">';
                echo ' <div class="col-md-12 col-sm-12">';
                echo ' <h4 class="event-d-heading">Reviews</h4>';
                $query = "SELECT * FROM reviews WHERE pid = $pid";
                $result = $db->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $uid = $row['uid'];
                        $q = "SELECT * FROM users WHERE uid='$uid'";
                        $uname = $db->query($q); 
                        $uname = $uname->fetch_assoc();
                        echo '<span style="font-weight:900">'. $uname['name']. '</span><br/>';
                        for($i=0;$i<$row['stars'];$i++){
                            echo '<i class="fas fa-star" style=" color:#d4af37 ;"></i>';
                        }
                        for($i=0;$i<5-$row['stars'];$i++){
                            echo '<i class="fas fa-star" style="opacity:0.2"></i>';
                        }

                        echo nl2br("\nCourse name: ");
                        echo '<p style=" font-weight:bold ">'.$row['coursename'].'</p>';

                        echo nl2br("Level: ");
                        echo '<p >'.$row['level'].'</p>';

                        echo nl2br("Price: ");
                        echo '<p >'.$row['price'].'</p>';

                        echo nl2br("Review:");
                        echo '<p>'.$row['comment'].'<hr/>';
                       
                    }
                } else {
                    echo '<h4 style="color:#d3d3d3">No reviews yet!</h4>';
                }
               echo ' </div>';
               echo ' </div>';

               

                    


                ?>
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