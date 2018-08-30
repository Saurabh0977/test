<html>
<head>
    <title>Users List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<table class="table">
<thead>
    <th>User_ID
        <th>User Name</th>
        <th>PRODUCT NAME</th>
    </th>
    <?php 
        foreach($user as $users)
        {
    ?>
    <tr>
        <td><?php echo $users->ID; ?></td>
        <td><?php echo $users->NAME; ?></td>
        <td><?php echo $users->PRODUCT_NAME; ?></td>
    </tr>
    <?php 
        }
    ?>
</thead>


</table>


</body>


</html>