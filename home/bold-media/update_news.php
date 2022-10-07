<?php 
   require_once 'dbConfig.php';
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['id'];
 /*   print_r($id);
    exit();*/

     //image uploading
  /*  if($_FILES['img']['name']){
        move_uploaded_file($_FILES['img']['tmp_name'], "image/".$_FILES['img']['name']);    
        $image = "img/".$_FILES['img']['name'];     
        print_r($image);exit(); 
    }
*/
    $sql = "UPDATE `content` SET  `title`='$title' , `content`= '$content'  WHERE id='$id' ";
    $query= mysqli_query($db,$sql);
    $lastId = mysqli_insert_id($db);
    if($query ==true) {
        $data = array(
            'status'=>'true',
        );

        echo json_encode($data);
    }
    else {
         $data = array(
            'status'=>'false',
        );

        echo json_encode($data);
    } 

?>