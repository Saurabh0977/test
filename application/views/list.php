<html>
<head>
    <title>List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<table class="table">
<thead>
    <th>User_ID
        <th>User Name</th>
        <th>Total Values</th>
        <th>Min Quantity</th>

    </th>
    <?php 
            foreach($user as $users)
            {
    ?>
    <tr>
        <td></td>
        <td><?php echo $users->NAME; ?></td>
        <td><?php echo $users->COUNTER; ?></td>
        <td></td>
    </tr>
    <?php 
            }
    ?>
</thead>


</table>


</body>


</html>