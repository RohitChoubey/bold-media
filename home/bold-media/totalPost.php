<?php 
  include('dbconfig.php');
/*$common = "WEHRE is_delete = N";*/
  $output= array();
  $sql = "SELECT * FROM content WHERE is_delete = 'N'";
  

  $totalQuery = mysqli_query($db,$sql);
  $total_all_rows = mysqli_num_rows($totalQuery);


  if(isset($_POST['search']['value'])) {
    $search_value = $_POST['search']['value'];
    $sql .= " AND content like '%".$search_value."%'";
    $sql .= " AND title like '%".$search_value."%'";
  }

  if(isset($_POST['order'])) {
    $column_name = $_POST['order'][0]['column'];
    $order = $_POST['order'][0]['dir'];
    $sql .= " ORDER BY ".$column_name." ".$order."";
  }
  else {
    $sql .= "ORDER BY id desc ";
  }

  if($_POST['length'] != -1) {
    $start = $_POST['start'];
    $length = $_POST['length'];
    $sql .= " LIMIT  ".$start.", ".$length;
  } 
/*print_r($sql);exit;*/
  $query = mysqli_query($db,$sql);
  $count_rows = mysqli_num_rows($query);
  $data = array();
  while($row = mysqli_fetch_assoc($query)) {
    $i =0;
    $sub_array = array();
    //$sub_array[] = $i++;

    $sub_array[] = $row['id'];
    $sub_array[] = $row['title'];
    $sub_array[] = '<img src="'.$row['file'].'" style="height:150px; width:250px;"/>';
    $sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
    $data[] = $sub_array;
  }

  $output = array(
    'draw'=> intval($_POST['draw']),
    'recordsTotal' =>$count_rows ,
    'recordsFiltered'=>   $total_all_rows,
    'data'=>$data,
  );
  echo  json_encode($output);
?>