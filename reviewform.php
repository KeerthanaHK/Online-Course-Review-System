<?php
  session_start();
  if(!isset($_SESSION['uid'])){
    header('location:login.html');
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Reviews | Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/rate.css">
    <link rel="shortcut icon" type="image/png" href="./assets/reviews-logo--box2.png" />

</head>

<body style="background-color: #f3f3f3" class="team-body">
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
          <a class="nav-item nav-link mr-5" href="./pg.php">Reviews</a>
          <a class="nav-item nav-link active mr-5" href="./review.php">Write a Review</a>
          <?php
//          session_start();
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

  <div class="container event-container" style="min-height:100vh; margin-top:30px;">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="container-fluid bg-white"  id="eventDumpArea">
                <?php
                     include('config.php');
                      $pid = $_GET['pid'];
                      $query = "SELECT * FROM pg WHERE pid = $pid";
                      $result = $db->query($query);
                      $row = $result->fetch_assoc();
                      echo "<h2 style='font-weight:700;color:white'>".$row['pname']."</h2>";



                    

                ?>

                <form action="submitreview.php" method="POST">

                <div style="position:relative;margin-top:20px">
                <input type="radio" name="stars" id="star-null" value=0 style="opacity:0" />
                <input type="radio" name="stars" id="star-1" value=1 style="opacity:0"/>
                <input type="radio" name="stars" id="star-2" value=2 style="opacity:0"/>
                <input type="radio" name="stars" id="star-3" value=3 style="opacity:0"/>
                <input type="radio" name="stars" id="star-4" value=4 style="opacity:0"/>
                <input type="radio" name="stars" id="star-5" value=5 style="opacity:0"/>

                <section>
                <label for="star-1">
                <i class="fas fa-star fa-2x" style="color:rgba(255,255,255,0.6)" id="s1"></i>
                </label>
                <label for="star-2">
                <i class="fas fa-star  fa-2x" style="color:rgba(255,255,255,0.6)"  id="s2"></i>
                </label>
                <label for="star-3">
                <i class="fas fa-star fa-2x" style="color:rgba(255,255,255,0.6)"  id="s3"></i>
                </label>
                <label for="star-4">
                <i class="fas fa-star fa-2x" style="color:rgba(255,255,255,0.6)"  id="s4"></i>
                </label>
                <label for="star-5">
                <i class="fas fa-star fa-2x" style="color:rgba(255,255,255,0.6)" id="s5"></i>
                </label>
                </section>

                </div>

                <div class="form-group mt-5">
                    <label id="name-label" for="coursename">
                    <p>Name:</p>
                    </label>
                    <input id="coursename" name="coursename" type="text" placeholder="Course Name" required>

                    <label id="name-label" for="level">
                    <p>Level:</p>
                    </label>
                    <input id="level" name="level" type="text" placeholder="Level" required>

                    <label id="name-label" for="price">
                    <p>Cost:</p>
                    </label>
                    <input id="price" name="price" type="text" placeholder="Cost" required>

                    <textarea style="height:300px; width:700px; font-size:2rem; z-index:1000" name="comment" class="form-control" placeholder="Write your Review here!"></textarea>
                </div>

                <input type="hidden" name="pid" value="<?php echo $_GET['pid'] ?>">

               <center> <input type="submit" class="btn btn-shade no-bkg" value="Submit Review"></center>
                </form>
               
            </div>
        </div>
    </div>
</div>

    
    <div class="pt-5 pb-5 footer">
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
    <script>
        $('input:radio[name="stars"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() == '1') {
            $('#s1').css('color', '#dfbd00 ');
            $('#s2').css('color', 'rgba(255,255,255,0.6)');
            $('#s3').css('color', 'rgba(255,255,255,0.6)');
            $('#s4').css('color', 'rgba(255,255,255,0.6)');
            $('#s5').css('color', 'rgba(255,255,255,0.6)');
        }
        if ($(this).is(':checked') && $(this).val() == '2') {
            $('#s1').css('color', '#dfbd00 ');
            $('#s2').css('color', '#dfbd00 ');
            $('#s3').css('color', 'rgba(255,255,255,0.6)');
            $('#s4').css('color', 'rgba(255,255,255,0.6)');
            $('#s5').css('color', 'rgba(255,255,255,0.6)');
        }
        if ($(this).is(':checked') && $(this).val() == '3') {
            $('#s1').css('color', '#dfbd00 ');
            $('#s2').css('color', '#dfbd00 ');
            $('#s3').css('color', '#dfbd00 ');
            $('#s4').css('color', 'rgba(255,255,255,0.6)');
            $('#s5').css('color', 'rgba(255,255,255,0.6)');
        }
        if ($(this).is(':checked') && $(this).val() == '4') {
            $('#s1').css('color', '#dfbd00 ');
            $('#s2').css('color', '#dfbd00 ');
            $('#s3').css('color', '#dfbd00 ');
            $('#s4').css('color', '#dfbd00 ');
            $('#s5').css('color', 'rgba(255,255,255,0.6)');
        }
        if ($(this).is(':checked') && $(this).val() == '5') {
            $('#s1').css('color', '#dfbd00 ');
            $('#s2').css('color', '#dfbd00 ');
            $('#s3').css('color', '#dfbd00 ');
            $('#s4').css('color', '#dfbd00 ');
            $('#s5').css('color', '#dfbd00 ');
        }
        if ($(this).is(':checked') && $(this).val() == '0') {
            $('#s1').css('color', 'rgba(255,255,255,0.6)');
            $('#s2').css('color', 'rgba(255,255,255,0.6)');
            $('#s3').css('color', 'rgba(255,255,255,0.6)');
            $('#s4').css('color', 'rgba(255,255,255,0.6)');
            $('#s5').css('color', 'rgba(255,255,255,0.6)');
        }
    });

    </script>


</body>

</html>