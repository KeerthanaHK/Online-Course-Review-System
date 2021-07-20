
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
        <h5 class="modal-title" id="exampleModalLabel"  style="color:red"><i class="far fa-times-circle"></i>&nbsp;&nbsp;Authentication Failed</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.href='login.php'">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Incorrect username and password. Please try again.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='login.html'">Close</button>
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
$username = $_POST['username'];
$passw = $_POST['password'];

$query = "SELECT * FROM users WHERE name='$username' and password = '$passw'";
$result = $db->query($query);
if($result->num_rows == 1){
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['name'];
    $_SESSION['uid'] = $row['uid'];
    
    //$_SESSION['uid'] = $current_login_user_id;
    echo "<script>location.href='review.php'</script>";
}else{
    echo "<script>$('#exampleModal').modal('show')</script>";
}
?>
