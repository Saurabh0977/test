<!DOCTYPE html>
<html>
<head>
	<title>Ajax Form Submission</title>
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
							

							<div class="card-body">
					<form id="myForm">
									<div class="form-group">
										<label>Name</label>
										<input type="text" id="name" class="form-control">
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

<script>


	$('#myForm').submit(function(event)
	{

		var name = $("#name").val();
		
		
		
	$.ajax({
		url  : '<?php echo base_url(); ?>Main/create_user_by_ajax',
		data : '&name=' + name ,
		type : 'POST',

	});


	});





</script>



