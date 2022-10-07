<?php
session_start();
// print_r($_SESSION['username']);exit;
    if (isset ($_SESSION['username']) && $_SESSION['username'] == true) {
        header('Location: addpost.php');
    }
    else {
         header('Location: login/');
    }
?>
<link href="css/style.css" rel='stylesheet'>

<body>
<?php include 'sideNavBar.php'; ?>
<div class="main-container">
  <div class="heading-container">
    <h1 class="heading">Bold Media Dashboard</h1>
    <p class="credit">Dashboard</p>
  </div>
  <div class="card-container">
    <a href="addPost.php">
        <div class="card card-1">
          <div class="card__icon"><i class="fas fa-bolt"></i></div>
          <p class="card__exit"><i class="fas fa-times"></i></p>
          <h2 class="card__title card__apply">Upload New News</h2>
          <p class="card__apply"><a href="addPost.php">Apply Now <i class="fas fa-arrow-right"></i></a></p>
        </div>
    </a>
    <a href="allPost.php">
      <div class="card card-2">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h2 class="card__title card__apply">All News</h2>
        <p class="card__apply"><a href="allPost.php">Apply Now <i class="fas fa-arrow-right"></i></a></p>
      </div>
    </a>
    <a href="totalDeletePost.php">
      <div class="card card-3">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h2 class="card__title card__apply">Deleted News</h2>
        <p class="card__apply"><a href="totalDeletePost.php">Apply Now <i class="fas fa-arrow-right"></i></a></p>
      </div>
    </a>
    <a href="addUser.php">
      <div class="card card-4">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h2 class="card__title card__apply">Add News User</h2>
        <p class="card__apply"><a href="#">Apply Now <i class="fas fa-arrow-right"></i></a></p>
      </div>
    </a>
    <div class="card card-5">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">Change Password</h2>
      <p class="card__apply"><a href="#">Apply Now <i class="fas fa-arrow-right"></i></a></p>
    </div>
    <div class="card card-1">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title card__apply">Sign Out.</h2>
      <p class="card__apply"><a href="#">Apply Now <i class="fas fa-arrow-right"></i></a></p>
    </div>
  </div>
</div>
</body>