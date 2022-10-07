<?php
  include 'dbConfig.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
      print_r($username);exit;
  /*$username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);*/
  $hashed_password = md5($password);
    $check=mysqli_query($db,"select * from users where username='$username' and password='$hashed_password'");
    if (mysqli_num_rows($check)>0) {
      $_SESSION['username']=$username;
      echo json_encode($username);
      // header("Location: dashboard.php");
    }
    else{
      echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($db);
?>