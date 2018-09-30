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
        <th>Quantity</th>

    </th>
    <?php 
        foreach($user as $users)
        {
    ?>
    <tr>
        <td><?php echo $users->ID; ?></td>
        <td><?php echo $users->NAME; ?></td>
        <td><?php echo $users->PRODUCT_NAME; ?></td>
        <td><?php echo $users->QUANTITY; ?></td>
    </tr>
    <?php 
        }
    ?>
</thead>


</table>
<table>
    <thead>
        <th>Second Highest Quantity</th>
    </thead>
    <tbody>
        <?php

           foreach($high as $value)
            {
              // var_dump($high);
               //die();
        ?>
        <tr>
            
            <td><?php ?></td>
            <td><?php echo $value->AMOUNT; ?></td>

                
        </tr>
        <?php 
            }
        ?>

    </tbody>
</table>


</body>


</html>