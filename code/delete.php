<?php
  

  $db = mysqli_connect("localhost", "root", "", "pg");
                    
  // Check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
  if(isset($_POST['delete'])){
    $chkarr = $_POST['checkbox'];
    foreach($chkarr as $id){
      mysqli_query($db,"Delete from reviews where rid=".$id);
    }
    header("Location:admindelete.php");
  }

  mysqli_close($db);

?>


