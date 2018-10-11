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
/*
for($i=10;$i>=1;--$i)
	{
		for($j=$i;$j<=2*$i-1;++$j)
		{
			echo " * ";
		}
		echo "<br />";

	}
*/
?>

<!--   

1 5 9
2 6 10
3 7 11
4 8 12
-->


<?php 
/*
for($i=1;$i<=4;$i++)
{
$i1 = $i + 4;
$i2 = $i + 8;
echo $i." " . $i1 ." " . $i2;
echo "<br />" ;
}
*/
?>

<!-- Ends Here-->

<?php 
/*
for($i=1;$i<=10;$i++)
{
	for($j=1;$j<=11-$i;$j++)
	{
	  echo "* ";
	}
	
	  echo "<br />";
}
*/
?>

<!--  

1
23
456
78910
1112131415

-->
<?php /*
$a = 1;
for($r=1;$r<=5;$r++)
{
	for($c=1;$c<=$r;$c++)
{
	echo "$a";
	$a++;
}
	
	echo "<br/>";
}
*/
?>
<!-- Ends Here-->

<!--     

* * * * * * * * * * * * * * * * * * * 
* * * * * * * * * * * * * * * * * 
* * * * * * * * * * * * * * * 
* * * * * * * * * * * * * 
* * * * * * * * * * * 
* * * * * * * * * 
* * * * * * * 
* * * * * 
* * * 
* 


 -->

<?php
/*
for($i=10;$i>=1;--$i)
     {
        
         for($j=$i;$j<=2*$i-1;++$j)
           echo "* ";
         for($j=0;$j<$i-1;++$j)
             echo "* ";
         echo "<br />";
     }
*/
?>

<!-- Ends Here-->

<!--   

*0
***00
******000
**********0000
***************00000

-->


<?php
/*
$k = 0;

for ($i=1; $i<=5; $i++)
{
    $k += $i;
    for ($j=1; $j<=$k; $j++)
    {   
       echo "*";
    }
        for ($z=0; $z<$i; $z++)
            {
                echo "0";
            }       

    echo "</br>";    

}
*/
?>

<!-- Ends Here-->

<!-- Program to Print Reverse of any number -->

<?php
/*
$num  = 4567;
$reverse = 0;

while($num>1)
{
	$remainder = $num % 10 ;
	$reverse = $reverse * 10 + $remainder;
	$num = $num / 10 ;
}
echo $reverse;
*/

?>
<!-- Program to Print Reverse of any number Ends Here -->

<!-- 

*****
*      *
*      *
*      *
*****


-->

<?php
/*
for($i = 1; $i<=5; $i++){

            for($j = 1; $j<=5; $j++){

               if($i == 1 || $i == 5){

                   echo "*";

               }

               else if($j == 1 || $j == 5){

                   echo "*";

               }

               else {

                   echo "&nbsp;&nbsp;";

               }

                

            }

            echo "<br/>";

		}
*/
?>
<!-- Ends Here--> 

<!--  

*****
*****
*****
*****
*****

-->
<?php 
/*
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=5;$j++)
	{
		echo "*";
	}
	echo "<br/>";
}
*/
?>
<!--  Ends Here -->

<!--   Swapping of two numbers with threee variables-->
<?php
/*
$a=10;
$b=20;

echo "Value of a: $a</br>";
echo "Value of b: $b</br>";

$temp=$a;
$a=$b;
$b=$temp;

echo "Value of a: $a</br>";
echo "Value of b: $b</br>";
*/
?>

<!-- Ends Here  -->

<!-- Swapping of two numbers without 3rd variable  -->

<?php
/*
$a=10;
$b=20;

echo "Value of a: $a</br>";
echo "Value of b: $b</br>";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "Value of a: $a</br>";
echo "Value of b: $b</br>";
*/
?>

<!--  Ends Here-->

<!--   

AAAAA
BBBB
CCC
DD
E
-->
<?php
/*

$letters = range('A', 'Z');
for($i=0; $i<5; $i++)
{ 
  for($j=1; $j<=5-$i; $j++)
{
    echo $letters[$i];
	}
	echo "<br />";
}

*/	

?>

<!--  Ends here --->

<!--   

A
BB
CCC
DDDD
EEEEE
-->
<?php
/*

$letters = range('A', 'Z');
for($i=0; $i<=5; $i++)
{ 
  for($j=0; $j<=$i; $j++)
{
    echo $letters[$i];
    }
    echo "<br>";
}
*/


?>

<!--  Ends here -->



<?php 









?>

</body>
</html