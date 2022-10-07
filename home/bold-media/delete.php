<?php
    if (isset ($_SESSION['username']) && $_SESSION['username'] == true) {
        header('Location: addpost.php');
    }
    else {
         header('Location: login/');
    }
?>
<?php 
  include('dbconfig.php');

  $user_id = $_POST['id'];
  $user_id = mysql_real_escape_string($user_id);
  $sql = "DELETE FROM content WHERE id='$user_id'";
  $delQuery =mysqli_query($db,$sql);
    if($delQuery==true) {
       $data = array(
          'status'=>'success',
        );
        echo json_encode($data);
    }
    else {
      $data = array(
      'status'=>'failed',
      );
      echo json_encode($data);
    } 

?>