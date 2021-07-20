<?php
  

  $db = mysqli_connect("localhost", "root", "", "pg");
                    
  // Check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
?>