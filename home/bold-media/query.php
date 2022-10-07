<?php
function multipleQuery($category, $category2,$category3, $limit){
	// require_once 'dbConfig.php';
	global $db;
	$result = $db->query("SELECT * FROM content where category = '".$category."' or category = '".$category2."' OR category = '".$category3."' and is_delete = 'N' ORDER BY id DESC LIMIT ".$limit." "); 
	return $result;
}
function query($category, $limit){
	// require_once 'dbConfig.php';
	global $db;
	$result = $db->query("SELECT * FROM content where category = '".$category."' and is_delete = 'N' ORDER BY id DESC LIMIT ".$limit." "); 
	// print_r($result);exit;
	return $result;
}

function queryCat($category){
	// require_once 'dbConfig.php';
	global $db;
	$result = $db->query("SELECT * FROM content where category = '".$category."' and is_delete = 'N' ORDER BY id DESC"); 
	// print_r($result);exit;
	return $result;
}