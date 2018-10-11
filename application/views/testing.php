<?php

$hello  = array("name"=>"saurabh" , "cast"=>"kumar");
$hello = array_flip($hello);
$hello = (array_change_key_case($hello , CASE_UPPER));
$hello = array_flip($hello);
print_r ($hello);





/*** Replace Any Substring in string using limit */
/*

$str = "hello saurabh saini my name is saurabh hell is kala is";

$out = preg_replace("/saurabh/" , "sarika" ,$str , 1);

echo $out;

/******   */







/*
$str = array("hello" , "saurabh" , 25 );


//$str = preg_match("/hello/" , $str);


/********  Method to check value Exist in an array case Sensitive *******/
/*
if (in_array("hello" , $str))
{
echo "found";
}
else{
    echo "not found";
}
*/

/******** Method to check value Exist in an array case Insensitive ******/
/*
if(preg_grep('/\bHello\b/i' , $str ))
{
    echo "found";
}
else
{
    echo "not found";
}
*/


?>






<?php
/*******  Check string Exist or not in a string  **********/
/*
$str =  'kala saurabh';
$str = preg_match('/Saurabh/i' , $str);

if($str == TRUE)
{
    echo "found";
}
else{
    echo "not found";
}
*/
?>

<?php
/************** Other method for checking String Exist or Not in a String ***********/
/*
$str = "hello saurabh hello";
$str = strpos($str , "hello");

if($str !== false)
{
    echo "found";
}
else
{
    echo "not found";
}
*/
?>



<?php 
/*******  Check value exist or not in an Array  ************/
/*
$hello = array("hell","saurabh","kumar");
$hello = in_array("kumar" , $hello);

if($hello == true)
{
    echo "Found";
}
else{
    echo "not found";
} 
*/  
?>



<?php
/**********    Count In string specific substring    **************/
/*   

$str = "hello saurabh sarika hello";
$str = substr_count("$str" , "hello");
echo $str;

*/
?>


<?php 
/************** Count Specific Element in array *************/
/*
$h = array("is" , "hello" ,"is" , "kala");
$h = array_count_values($h);
print_r ($h["is"]);
*/

?>






<?php 
/*
$str = 'abcde$ddfd @abcd )der]' ;

$str = preg_replace('/[^A-Za-z0-9\s]/' , '' ,$str);
echo $str;

*/?>




<?php /*
$str = "White Tank Top";
$str = preg_replace("/^(\w+\s)/", "", $str);
var_dump($str);
*/
?>


<?php
/*
$str1 = 'The quick brown fox';
echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1)."\n";
*/
?>

<?php
/*
$str1 = "$12,334.00A";

$str1 = preg_replace('/[^0-9.,]/' , "" , $str1);

echo $str1;
*/
?>


<?php 
/*
$str = "hello saurabh kumar";
$str = preg_replace('/ /' , "" , $str);
echo $str;
*/
?>

