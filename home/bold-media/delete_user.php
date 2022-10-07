
<?php 
include('dbconfig.php');
$id = $_POST['id'];
$user_id = mysqli_real_escape_string($db, $id);
$sql = "Update content set is_delete = 'Y' WHERE id='$user_id'";
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