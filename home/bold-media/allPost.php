  <?php include('dbconfig.php');?>

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

  </head>
  <?php include 'sideNavBar.php'; ?>
  <body>    

    <div class="container-fluid">
      <h2 class="text-center">Welcome to Admin Dashboard</h2>
      <p class="datatable design text-center">All News</p>
      <div class="row">
        <div class="container">
          <div class="btnAdd">
           <a href="addPost.php" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-success btn-sm" >Add News</a>
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
   <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update News</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="updateUser" >
              <input type="hidden" name="id" id="id" value="">
              <input type="hidden" name="trid" id="trid" value="">
              <div class="mb-6 row">
                <div class="col-md-9">
                   <label for="nameField" class="col-md-4 form-label">Title<b class="red-text"><i> *</i></b></label>
                  <textarea  class="form-control" id="title" rows="2" cols="10" name="title"></textarea>
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-md-12">
                  <label for="emailField" class="col-md-3 form-label">Content<b class="red-text"><i> *</i></b></label>
                   <textarea class="form-control" name="editor" id="content" rows="10" cols="80"></textarea>
                </div>
              </div>

              <div class="col-md-9">
                <label for="file" class="mr-sm-2">Photo:*<b class="red-text"><i> (Select only JPG, JPEG, PNG.)</i></b></label>
                <input type="file" class="form-control mb-2 mr-sm-2" placeholder="" id="img" name = "img" required="Select Image">
              </div>
                <label id="photo_id" style="display:none;"></label>

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

  </body>
  </html>
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
            'url':'totalPost.php',
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
            success:function(data) {
              var json = JSON.parse(data);
              var status = json.status;
              if(status=='true') {
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
         var title= $('#title').val();
         var content= $('#content').val();
         var img = $('img').val();
         var trid= $('#trid').val();
         var id= $('#id').val();
         if(title != '' && content != '' ) {
           $.ajax({
             url:"update_news.php",
             type:"post",
             data:{id:id, title:title, content:content, img: img},
              success:function(data) {
                window.location = 'allPost.php';
                var json = JSON.parse(data);
                var status = json.status;
                if(status=='true')  {
                  table =$('#example').DataTable();
                  table =$('#example').DataTable();
                  var button =   '<td><a href="javascript:void();" data-id="' +id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!" data-bs-toggle="modal" data-id="' +id + '" data-bs-target="#exampleModal" class="btn btn-danger btn-sm deleteBtn">Delete</a></td>';
                  var row = table.row("[id='"+trid+"']");
                  row.row("[id='" + trid + "']").data([id,title,content,img]);
                  $('#exampleModal').modal('hide');
                }
              else {
                alert('failed');
              }
            }
          });
         }
         else {
          alert('Fill all the required fields');
        }
      });


      $('#example').on('click','.editbtn ',function(event){
      CKEDITOR.replace('editor');
        var table = $('#example').DataTable();
        var trid = $(this).closest('tr').attr('id');
       // console.log(selectedRow);
       var id = $(this).data('id');
       $('#exampleModal').modal('show');

         $.ajax({
          url:"get_single_data.php",
          data:{id:id},
          type:'post',
          dataType: 'json',
          success:function(data) {
alert(data);
          //$(".ck-placeholder").append('');
          $("#photo_id").show();
          $("#photo_id").html('');
           // console.log(data);                       
          $('#title').val(data.title);  
          var $edit = $("#content");
          var curValue = $edit.val();
          var newValue = curValue +data.content;
          $edit.val(newValue);
           // $('#content').val(json.content);
          var photo = '<a href="' + data.file + '" target="_blank" style="color:black;"><strong>Uploaded Slider Image</strong></a>';
          $("#photo_id").append(photo);
          $("#img").removeAttr("required");
          $('#id').val(data.id);
          $('#trid').val(data.trid);
         }
     })
     });

      $(document).on('click','.deleteBtn',function(event){
         var table = $('#example').DataTable();
        event.preventDefault();
        var id = $(this).data('id');
      
        if(confirm("Are you sure want to delete this News ? ")) {
        $.ajax({
          url:"delete_user.php",
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
        else
        {
          return null;
        }
      })


   </script>