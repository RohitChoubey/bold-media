<?php
    if (isset ($_SESSION['username']) && $_SESSION['username'] == true) {
        header('Location: addpost.php');
    }
    else {
         header('Location: login/');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bold Media</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-size: 18px;
            color: #71748d;
        }
    </style>
</head>
<body id="body-pd">
<?php include 'sideNavBar.php'; ?>
    <div class="height-100 bg-light">
        <form method="post" id="uploadForm" action="">  
            <div class="form-check mb-2 mr-sm-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4" style="background-color:lavender;">
                            <div class="form-group">
                                <label for="text" class="mr-sm-2">Title:<b class="red-text">*</b></label>
                                <input type="title" class="form-control mb-2 mr-sm-2" placeholder="Enter Title" id="title" name = "title" required="Enter Title">
                            </div>
                        </div>
                        <div class="col-sm-4" style="background-color:lavenderblush;">
                            <div class="form-group">
                                <label for="text" class="mr-sm-2">Category:<b class="red-text">*</b></label>
                                <select id="category" class ="form-control" name = "category" required="Please Select Category">
                                    <option value="">Select Category</option>
                                    <option value="top story">Top Story</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Politics">Politics</option>  
                                    <option value="Education">Education</option>    
                                    <option value="entertainment">Entertainment</option>    
                                    <option value="Bollywood">Bollywood</option>    
                                    <option value="Gadgets">Tech & Gadgets</option>
                                    <option value="science">Science & Tech</option>
                                    <option value="Bussiness">Bussiness</option>
                                    <option value="Cities">Cities</option>
                                    <option value="World News">World News</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4" style="background-color:lavender;">
                            <label for="file" class="mr-sm-2">Photo:*<b class="red-text"><i> (Select only JPG, JPEG, PNG.)</i></b></label>
                            <input type="file"class="form-control mb-2 mr-sm-2" id="img" name = "img" required="Select Image">
                        </div>
                        <div class="col-sm-12" style="background-color:lavenderblush;" style="display:none;">
                            <label for="text" class="mr-sm-2">State:</label>
                            <select id = "state" class ="form-control" name = "state">
                                <option value="Null">Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>    
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>s
                                <option value="Gujarat">Gujarat</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>  
                                <option value="Haryana">Haryana</option>    
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>    
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>  
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>    
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>

                </div>
                
            </div>
             <label for="file" class="mr-sm-2">Enter News:<b class="red-text">*</b></label>
            <textarea class="form-control" name="editor" id="editor" rows="10" cols="80"></textarea><br/>
            <input class="btn btn-primary mb-2" style="width:300px; height: auto;   " type="submit" name="submit" value="SUBMIT">    
        </div>
 
        </form>
    </div>
</body>
        <script src="ckeditor/ckeditor.js"></script>
        <script>
             CKEDITOR.replace('editor');
        </script>
    <script type="text/javascript">
        $(document).ready(function (e){
            $("#uploadForm").on('submit',(function(e){ 
                var editor = CKEDITOR.instances['editor'].getData();
                var data = new FormData(this);
                data.append('editor',editor);
                e.preventDefault();
                $.ajax({
                    url: "submit.php",
                    type: "POST",
                    data: data, 
                    contentType: false, 
                    cache: false, 
                    processData:false,
                    success: function(data){
                        console.log(data);
                        alert("News Updated successfully");
                    },
                    error: function(){}
                });
            }));
        });

        $('#img').change(function () {
        var file_name = $(this).val();
        var fileExtension = file_name.substr((file_name.lastIndexOf('.') + 1));
        var extension_array = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
        if (extension_array.indexOf(fileExtension) == -1) {
            alert("Please upload only JPG/JPEG/PNG file for Photo.");
            document.getElementById("img").value = null;
        }
        if (Math.round(document.getElementById("img").files[0].size / 1024) > 3048) {
            alert("Photo should be less than 3 MB.");
            document.getElementById("img").value = null;
        }
    });
</script>
</html>