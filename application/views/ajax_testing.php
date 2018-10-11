<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajax Testing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    
<form id="myform" method="post">

<h1>Ajax Form</h1>

<input type="text" name="fname" id="fname">
<input type="submit" id="btn">
</form>

<div id="items">

</div>


</body>
</html>


<script>


    $('#myform').on('submit' , function(e){
       
        var formData = new FormData(this);   

       $.ajax({
                method: "POST",
        url: "<?php echo base_url(); ?>main/ajax_test",
        data: 'formData',
        success:function(data)
        {
            alert(data);
            //$("#items").html();
        }


    });

});


</script>