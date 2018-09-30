<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Immortality blood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style>

.box{
    width: 100px;
    height: 100px;
    background-color: red ;
    position: absolute;
}

</style>

</head>
<body>

<input  value="male" name="myradio" type="radio"><label id="chk">hello</label>

<button id="btn">click Me</button>



</div>



</body>
</html>

<script>

$(document).ready(function()
{

    $("#btn").click(function(){

        alert($('input[name="myradio"]').prop("value" , "dsda"));

    });
        
});

</script>




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

