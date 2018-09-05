<!DOCTYPE html>
<html>
<head>
	<title>Multiple Images</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<!-->
	<!-------  >
	<div class="row">
					<div class="col-md-12">

						<!-- Basic layout-->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Jquery Form Submit
								<span><a href="<?php echo base_url(); ?>Main/user_details" type="button">User Details</a></span>
								<span><a href="<?php echo base_url(); ?>Main/user_details" type="button">Users limit</a></span>

							</h5>
								
								<span><?php echo $message ; ?></span>
							</div>

							<div class="card-body">
					<form id="formhide" action="<?php echo base_url(); ?>Main/create_user" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" class="form-control">
									</div>

									<div class="form-group">
										<label>Product Name</label>
										<input type="text" name="p_name" class="form-control">
									</div>

									<div class="form-group">
									
										<table class="table" id="dynamic_field">
										<thead>
											<th>Select Multiple Images</th>
										</thead>		
										<tbody>
											<tr>
											<td><input type="file" name="userfile[]" multiple="" class="form-control"/></td>

												 <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>

											</tr>
											
										</tbody>

										</table>

									</div>

									<div class="text-right">
										<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
                        </div>
                       <!---  Practice --->
                       
                       <div>

                           <p id="para"><a id="link" href="www.google.com" >Hello</a></p>
                            <button id="btn">Click to Change</button>

                        </div>

						<!-- /basic layout -->
						</div>
					</div>


</body>
</html>

<script type="text/javascript">

    $(document).ready(function(){      


      var i=1;  


      $('#add').click(function(){  

           i++;  

           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" name="userfile[]" class="form-control name_list" multiple="" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Delete</button></td></tr>');  

      });


      $(document).on('click', '.btn_remove', function(){  

           var button_id = $(this).attr("id");   

           $('#row'+button_id+'').remove();  

      });  

    }); 

    function myItems(name, id, i)
	{
	var qty = $("#qty" + i).val();
	$.ajax({ 
		url: '<?php echo site_url(); ?>samples/add_item_to_session',
		data: 'id=' + id + '&name=' + name + '&qty=' + qty,
		type: 'post',
		success: function(response) {
			$("#session_items").html(response);
	    }
	});
	}

	 /* Submission of form using ajax 

    $(function(){
       $("#comment").submit(function(){
         dataString = $("#comment").serialize();

    	$.ajax({

    		type:"Post",
    		url:"<?php //echo base_url(); ?>Main/create_user",
    		data: dataString,
           success: function(data){
               alert('Successful!');
           }
 			});
         return false;  //stop the actual form post !important!
 
      });
   });
			*/

</script>


<script>
var jq = $.noConflict();
jq(document).ready(function()
{
    jq("#btn").click(function(){
        jq("#link").prepend("HELLO");
    });
   
});




</script>
