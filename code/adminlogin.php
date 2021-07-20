<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Course Review System | Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
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
              <a class="nav-item nav-link mr-5" href="./review.php">Write a Review</a>
              <a class="nav-item nav-link active mr-5" href="./login.html">Login/Signup</a>
            </div>
          </div>
        </div>
      </nav>
    

     


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  style="color:red"><i class="far fa-times-circle"></i>&nbsp;&nbsp;Authentication Failed</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.href='admin.php'">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Incorrect username and password. Please try again.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='admindelete.php'">Close</button>
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
    <div class="pt-5 pb-5 footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-xs-12 about-company">
              <h2>Online Course Review System</h2>
              <p class="pr-5 text-white-50">GSSS Institute of Engineering and Technology for Women,<br>KRS Road,Metagalli,Mysuru
                <br>Karnataka - 570016</p>
               <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p> 
            </div>
            
            
          </div>
          <div class="row mt-5">
            <div class="col copyright">
              <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
            </div>
          </div>
        </div>
      </div>
<?php

include('config.php');
$aname = $_POST['aname'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE aname='$aname' and password = '$password'";
$result = $db->query($query);
if($result->num_rows == 1){
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['aname'] = $row['aname'];
    $_SESSION['aid'] = $row['aid'];
    
    echo "<script>location.href='admindelete.php'</script>";
}else{
    echo "<script>$('#exampleModal').modal('show')</script>";
}
?>


    

</body>

</html>-->
