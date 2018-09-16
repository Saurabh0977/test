<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jquery Testing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <p id="para"></p>
    <button id="btn">click me</button>
</body>
</html>

<script>


$("#btn").click(function(){

   if($("#para").length > 0){
       alert("dsda");
   }
});






</script>
