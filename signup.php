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
    

      <div class="container" style="margin-top:90px">
        <div id="login" class="signin-card" style="background-color: rgba(255, 255, 255, 1) !important;">
          <div class="logo-image">
          <img src="./assets/reviews-logo--box2.png" alt="Logo" title="Logo" width="138">
          </div>
          <h1 class="display1">Course Reviews</h1>
          <p class="subhead" id="err">Signup</p>
          <form action="" method="POST" class="" role="form">
            <div id="form-login-username" class="form-group">
              <input id="username" class="form-control" name="username" type="text" size="18" alt="login" required />
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label for="username" class="float-label">username</label>
            </div>
            <div id="form-login-password" class="form-group">
              <input id="passwd" class="form-control" name="password" type="password" size="18" alt="password" required>
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label for="password" class="float-label">password</label>
            </div>
            <div id="form-login-password" class="form-group">
                <input id="cpasswd" class="form-control" name="cpassword" type="password" size="18" alt="cpassword" required>
                <span class="form-highlight"></span>
                <span class="form-bar"></span>
                <label for="password" class="float-label">confirm password</label>
              </div>
            <div>
              <button class="btn btn-block btn-info ripple-effect" type="submit" name="submit" alt="sign in" value="submit" style="background-color:#14CE6B">Sign up</button>  
            </div>
            <div id="form-login-remember" class="form-group">
              <a href="login.html">Already have an account? Login</a>
            </div>
        
            </div>
          </form>
        </div>
        </div>
    
    <div class="pt-5 pb-5 footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-xs-12 about-company">
              <h2>PG Reviews</h2>
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

<?php
include('config.php');
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cp = $_POST['cpassword'];
    if($password != $cp){
      echo "<script>document.getElementById('err').innerHTML=`<span style='color:red'>Passwords did not match</span>`</script>";
    }else{
      $query = "INSERT INTO users(name, password) VALUES('$username', '$password')";
      $res = $db->query($query);
      echo '<script>location.href="login.html"</script>';
    }
  }
?>