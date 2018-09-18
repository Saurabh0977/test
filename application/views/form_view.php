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
								<h5 class="card-title">Basic layout
								<span><a href="<?php echo base_url(); ?>Main/user_details" type="button">User Details</a></span>
								
								<span><a href="<?php echo base_url(); ?>Main/send_mail" type="button">Send Mail</a></span>
								<span style="float:right;"><a style="color:red" href="<?php echo base_url(); ?>Main/logout" type="button">Logout</a></span>


							</h5>
								
							<!--	<span><?php //echo $message ; ?></span> -->
							</div>

							<div class="card-body">
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Main/create_user">
									<div class="form-group">
										<label>Name</label>
										<input type="text" id="name" name="name" class="form-control">
									</div>

									<div class="form-group">
										<label>Product Name</label>
										<input type="text" id="p_name" name="p_name" class="form-control">
									</div>

							
							<div class="form-group">
										<label>Quantity</label>
										<input type="text" id="qty" name="qty" class="form-control">
									</div>

									<div class="form-group">
									
										<table class="table" id="dynamic_field">
										<thead>
											<th>Select Multiple Images</th>
										</thead>		
										<tbody>
											<tr>
											<td><input type="file" id="userfile[]" name="userfile[]" multiple="" class="form-control"/></td>

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

           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" name="userfile[]" class="form-control " multiple="" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Delete</button></td></tr>');  

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

/***************** Submit form using Ajax with Variables defined with ID *****************

$(document).ready(function()
{
	$('#myForm').submit(function(event)
	{

		var name = $("#name").val();
		var p_name = $("#p_name").val();
		var qty = $("#qty").val();
		var userfile = $("#userfile").val();
		
		
	$.ajax({
		url  : '<?php //echo base_url(); ?>Main/create_user',
		data : '&name=' + name + '&p_name=' + p_name + '&qty=' + qty ,
		type : 'POST',

	});


	});

});
*/


</script>
