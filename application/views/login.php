<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h2 style="text-align:center;margin-top:100px">Login Form</h2>

    <div style="text-align:center;margin-top:100px">
    <form action="<?php echo base_url(); ?>User/login" method="post">

    <label>Enter Username</label>
    <input type="text" name="uname" ><br>
    <label>Enter Password</label>
    <input type="password" name="pass"><br>
    <button type="submit" >Sumit</button>
    <p>Create New User</p>
    <a href="<?php echo base_url(); ?>Main/signup_form">SignUp</a>
</form>
    </div>
</body>
</html>