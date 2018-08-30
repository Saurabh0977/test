<html>
<head>
	<title>Programs</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<!--
<form action="<?php //echo $_SERVER['PHP_SELF'];?>" method="post">
		
		<label>Enter the number of rows</label>
		<input type="number" name="num">
		<input type="submit">


    </div>
</form>
-->
<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_REQUEST['num'];		

	for($i=0;$i<$num;$i++)
	{
		for($j=0;$j<=$i;$j++)
		{
			echo " * ";
		}
		echo "<br />";

	}


	for($i=0;$i<$num;$i++)
	{
		for($j=0;$j<$i;$j++)
		{
			echo  $j + 1;
		}
		echo "<br />";

	}
}
*/
?>

<!-- Program to print 1 to 100 without any loop -->
<?php

print_number(1);
function print_number($num){
echo $num;
if($num == 100)
return ;	
print_number(++$num);
}

?>

<!-- Program to print 1 to 100 without any loop Ends Here -->







</body>
</html