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

<!---------------- Program to print 1 to 100 without any loop ------------------>
<?php
/*
print_number(1);
function print_number($num){
echo $num;
if($num == 100)
return ;	
print_number(++$num);
}
*/
?>

<!-------------- Program to print 1 to 100 without any loop Ends Here --------->

<!----------- Program to print fibonacci Series ----------->

<?php 
/*
$a = 0;
$b = 1;
echo $a.'&nbsp';
echo $b.'&nbsp';

for($i=0;$i<=10;$i++)
{
$c = $a + $b;
$a = $b;
$b = $c;

echo $c.'&nbsp';

}
*/
?>
<!-- Program to print fibonacci Series Ends Here-->

<!-- Program for Factorial of the number-->
<?php
/*
$number = 6;                   
$fact   = 1;
for($k=1;$k<=$number;++$k)    
	  {
		 $fact =  $fact*$k;
	  }
echo "Factorial of $number is ".$fact;
*/

?>

<!-- Program for Factorial of the number Ends here-->
<?php
for($i=10;$i>=1;--$i)
	{
		for($j=$i;$j<=2*$i-1;++$j)
		{
			echo " * ";
		}
		echo "<br />";

	}

?>
</body>
</html