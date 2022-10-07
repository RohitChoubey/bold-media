
<?php 
	include('dbconfig.php');
	$id = $_POST['id'];
	$user_id = mysqli_real_escape_string($db, $id);
	$sql = "SELECT * FROM content WHERE id='$user_id' LIMIT 1";
	$query = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($query);
	/*print_r($row);exit();*/
	echo json_encode($row);
?>
