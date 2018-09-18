<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Testing PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

 
<?php

$array = array(
    'zero'  => '0',
    'one'   => '1',
    'two'   => '2',
    'three' => '3',
    'four' => '4' , 
    'five' => '5' , 

  );
  $res = array_slice($array, 0, 3, true) +
      array("six" => "6") +
      array_slice($array, 3, count($array) - 3, true) ;
  print_r($res);


?>

</body> 
</html>
