<?php include('dbconfig.php');?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/af-2.3.7/date-1.1.0/r-2.2.9/rg-1.1.3/sc-2.0.4/sp-1.3.0/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Bold Media</title>
  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <h2 class="text-center">Welcome to Admin Dashboard</h2>
    <p class="datatable design text-center">All Deleted News</p>
      <?php include 'sideNavBar.php'; ?>
    <div class="row">
      <div class="container">
        <div class="btnAdd">
         <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-success btn-sm" >Add User</a>
       </div>
       <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
         <table id="example" class="table">
          <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Images</th>
           
            <th>Options</th>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/af-2.3.7/date-1.1.0/r-2.2.9/rg-1.1.3/sc-2.0.4/sp-1.3.0/datatables.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "fnCreatedRow": function( nRow, aData, iDataIndex ) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide':'true',
        'processing':'true',
        'paging':'true',
        'order':[],
        'ajax': {
          'url':'totalDelete.php',
          'type':'post',
        },
        "columnDefs": [{
          'target':[3],
          'orderable' :false,
        }]
      });
    } );
    $(document).on('submit','#addUser',function(e){
      e.preventDefault();
      var city= $('#addCityField').val();
      var username= $('#addUserField').val();
      var mobile= $('#addMobileField').val();
      var email= $('#addEmailField').val();
      if(city != '' && username != '' && mobile != '' && email != '' )
      {
       $.ajax({
         url:"add_user.php",
         type:"post",
         data:{city:city,username:username,mobile:mobile,email:email},
         success:function(data)
         {
           var json = JSON.parse(data);
           var status = json.status;
           if(status=='true')
           {
            mytable =$('#example').DataTable();
            mytable.draw();
            $('#addUserModal').modal('hide');
          }
          else
          {
            alert('failed');
          }
        }
      });
     }
     else {
      alert('Fill all the required fields');
    }
  });
    $(document).on('submit','#updateUser',function(e){
      e.preventDefault();
       //var tr = $(this).closest('tr');
       var city= $('#cityField').val();
       var username= $('#nameField').val();
       var mobile= $('#mobileField').val();
       var email= $('#emailField').val();
       var trid= $('#trid').val();
       var id= $('#id').val();
       if(city != '' && username != '' && mobile != '' && email != '' )
       {
         $.ajax({
           url:"update_user.php",
           type:"post",
           data:{title:title,content:content,image:image,id:id},
           success:function(data) {
             var json = JSON.parse(data);
             var status = json.status;
             if(status=='true')
             {
              table =$('#example').DataTable();
              var button =   '<td><a href="javascript:void();" data-id="' +id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!" data-bs-toggle="modal" data-id="' +id + '" data-bs-target="#exampleModal" class="btn btn-danger deleteBtn btn-sm ">Delete</a></td>';
              var row = table.row("[id='"+trid+"']");
              row.row("[id='" + trid + "']").data([id,username,email,mobile,city,button]);
              $('#exampleModal').modal('hide');
            }
            else
            {
              alert('failed');
            }
          }
        });
       }
       else {
        alert('Fill all the required fields');
      }
    });


    $(document).on('click','.editbtn',function(event){
      var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if(confirm("Are you sure want to restore this News ? ")) {
        $.ajax({
          url:"restore.php",
          data:{id:id},
          type:"post",
          success:function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if(status=='success') {
              //table.fnDeleteRow( table.$('#' + id)[0] );
              //$("#example tbody").find(id).remove();
              //table.row($(this).closest("tr")) .remove();
              $("#"+id).closest('tr').remove();
            }
            else {
              alert('Failed');
            return;
            }
          }
        });
      }
      else {
        return null;
      }
    })


    $(document).on('click','.deleteBtn',function(event){
       var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if(confirm("Are you sure want to delete this News ? ")) {
      $.ajax({
        url:"delete.php",
        data:{id:id},
        type:"post",
        success:function(data) {
          var json = JSON.parse(data);
          status = json.status;
          if(status=='success') {
             $("#"+id).closest('tr').remove();
          }
          else {
            alert('Failed');
            return;
          }
        }
      });
      }
      else
      {
        return null;
      }



    })
 </script>
 <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update News</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateUser" >
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="trid" id="trid" value="">
            <div class="mb-3 row">
              <label for="nameField" class="col-md-3 form-label">Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="nameField" name="name" >
              </div>
            </div>
            <div class="mb-3 row">
              <label for="emailField" class="col-md-3 form-label">Email</label>
              <div class="col-md-9">
                <input type="email" class="form-control" id="emailField" name="email">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="mobileField" class="col-md-3 form-label">Mobile</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="mobileField" name="mobile">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="cityField" class="col-md-3 form-label">City</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="cityField" name="City">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form> 
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- Add user Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addUser" action="">
          <div class="mb-3 row">
            <label for="addUserField" class="col-md-3 form-label">Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addUserField" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addEmailField" class="col-md-3 form-label">Email</label>
            <div class="col-md-9">
              <input type="email" class="form-control" id="addEmailField" name="email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addMobileField" class="col-md-3 form-label">Mobile</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addMobileField" name="mobile">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addCityField" class="col-md-3 form-label">City</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addCityField" name="City">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
  //var table = $('#example').DataTable();
</script>
