<?php
session_start();
$_SESSION['username'] = NULL;
$_SESSION['uid'] = NULL;
session_unset();
session_destroy();
header('location:index.php');


?>