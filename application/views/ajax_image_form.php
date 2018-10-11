<!DOCTYPE html>
<html>
<head>
	<title>Ajax Image Submission</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <div style="text-align:center" >
    <h2>Ajax Image Submission</h2>
    <form method="post" enctype="multipart/form-data" id="uploadForm">
        <label>Enter Username</label><br>
        <input type="text" name="uname" id="uname"><br>
        <label>Select Image</label>    
        <input type="file" name="file" id="file" ><br>
        <input type="submit" name="upload" id="upload" value="Submit">

    </form>
    </div>

    <div id="load">
        
    </div>


</body>
</html>


<script>

/******  Function to Preview the Image Befor Submit   ********/

function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#file").change(function () {
    filePreview(this);
});

/******  Ends Here --->>>> Function to Preview the Image Befor Submit   ********/


/******* Function to upload and preview Image Before submission  ***************/

 $(document).ready(function(){  
      $('#uploadForm').on('submit', function(e){  
           e.preventDefault();  
           var uname = $("#uname").val();
           if($('#file').val() == '')  
           {  
                alert("Please Select the File");  
           }  
           else  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/ajax_upload",   
                     //base_url() = http://localhost/tutorial/codeigniter  
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                          $('#load').html(data);
                          

                     }  
                });  
           }  
      });  
 });

/******* Ends Here Function to upload and preview Image Before submission  ***************/







/*
$(document).ready(function(e){
    $("#customform").on('submit' ,function(e){
        e.preventDefault();
       var uname = $("#uname").val();

        $.ajax({
            url : '<?php echo base_url(); ?>main/myajax',
            type : 'POST',
            data: 'uname=' +uname,
            success:function(data)
            {
                $("#load").html(data);
            }
        });
        

    });
});
*/


</script>



