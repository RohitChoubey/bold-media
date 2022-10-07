<?php 
include('dbconfig.php');


$user_id = $_POST['id'];
$sql = "Update content set is_delete = 'N' WHERE id='$user_id'";
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