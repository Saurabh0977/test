<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form method="post" action="<?php echo base_url(); ?>Main/upload_csv" enctype="multipart/form-data" >

<label>Select CSV Files</label>
<input type="file" name="userfile">
<button type="submit">Submit</button>

</form>


<div style="margin-top:100px">



<label>Export Tables from database to XLS Files</label>
<a href="<?php echo base_url(); ?>Export/createXLS">Export</button>

</div>

</body>
</html>