<?php
// Include the database configuration file
require_once 'dbConfig.php';

    $title = $_POST['title'];
    $category = $_POST['category'];
    $state = $_POST['state'];
    $editor = $_POST['editor'];
     
    //image uploading
    if($_FILES['img']['name']){
        move_uploaded_file($_FILES['img']['tmp_name'], "image/".$_FILES['img']['name']);    
        $img = "image/".$_FILES['img']['name'];     
    }
    $user ="Salman";
    $sql="INSERT INTO content (title, category, state, content, file, user) VALUES ('$title', '$category', '$state' , '$editor', '$img', '$user')";
    mysqli_query($db, $sql);
?>