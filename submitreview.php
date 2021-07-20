
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Reviews | Reviews | Successful</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/png" href="./assets/reviews-logo--box2.png" />

</head>

<body style="background-color: #f3f3f3" class="team-body">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#14CE6B"><i class="far fa-check-circle" ></i>&nbsp;&nbsp;Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.href='pg.php'">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Your Review was submitted successfully
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='pg.php'">Close</button>
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
  session_start();

  $link = mysqli_connect("localhost", "root", "", "pg");
                    
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $pid  = $_POST['pid'];
  $uid = $_SESSION['uid'];
  
  
  // Escape user inputs for security
  $stars = mysqli_real_escape_string($link, $_REQUEST['stars']);
  $coursename = mysqli_real_escape_string($link, $_REQUEST['coursename']);
  $comment = mysqli_real_escape_string($link, $_REQUEST['comment']);
  $level = mysqli_real_escape_string($link, $_REQUEST['level']);
  $price = mysqli_real_escape_string($link, $_REQUEST['price']);
  //$uid = mysqli_real_escape_string($link, $_SESSION['uid']);
  
  // Attempt insert query execution
  $sql = "INSERT INTO reviews (stars,coursename, comment,level,price, pid,uid) VALUES ('$stars', '$coursename', '$comment','$level','$price', '$pid','$uid')";
  if(mysqli_query($link, $sql)){
      echo "Records added successfully.";
      echo "<script>$('#exampleModal').modal('show')</script>";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

/*
 session_start();
 include('config.php');
 $rid =  $_SESSION['rid'];
 $stars =  $_POST['stars'];
 $coursename = $_POST['coursename'];
 $comment = $_POST['comment'];
 $pid  = $_POST['pid'];
 $uid = $_SESSION['uid'];

 $query = "INSERT INTO reviews(rid,coursename,comment, stars, pid, uid) VALUES ('$rid','$coursename',$comment', '$stars', '$pid', '$uid')";
 $result = $db->query($query);
 echo "<script>$('#exampleModal').modal('show')</script>";

 */
?>
