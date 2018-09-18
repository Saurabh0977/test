<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2 style="text-align:center;margin-top:100px">Sign Up Form</h2>
<div style="text-align:center;margin-top:100px">
    <form action="<?php echo base_url(); ?>Main/new_user" method="POST">

    <label>Enter Username</label>
    <input type="text" name="uname"><br>
    <label>Enter Password</label>
    <input type="password" name="pass"><br>
    <label>Enter Phone Number</label>
    <input type="number" name="phone"><br>
    <button type="submit">Create User</button>
    </form>

</div>
</body>
</html>