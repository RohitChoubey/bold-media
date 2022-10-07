<?php
  if (isset ($_SESSION['username']) && $_SESSION['username'] == true) {
      header('Location: addpost.php');
  }
  else {
       header('Location: login/');
  }

  include 'dbConfig.php';
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
  $email = trim($_POST['email']);
  if ((isset($username) && !empty($username)) && (isset($password) && !empty($password)) && (isset($email) && !empty($email))) {
    // validation successfully
    $hashed_password = md5($password);

      $query = "insert into users (username, email, password) values ('$username', '$email', '$hashed_password')";
      if (mysqli_query($db, $query)) {
        echo "User Registration Successfull!!!";
      } 
      else {
         echo "Something Wrong";
      }
      
  }
   else {
      echo "Invalid input. Please enter all the input fields in form";
  }
?>