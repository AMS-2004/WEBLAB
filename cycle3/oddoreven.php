<html>
<head>
	<title>Odd or Even </title>
</head>
    <body>
<h2>OddEven Checker</h2>
     <form method="GET"action="<?php echo $_SERVER['PHP_SELF'];?>">
     Enter a number:<input    type="text"name="number">

<input type="submit"value="Check">
   </form>
<?php
    
    if($_SERVER["REQUEST_METHOD"]== "GET"){
              if(is_numeric($_GET["number"])){
               $number=$_GET["number"];
                  if($number %2==0){
echo"<p>{$number} is an even number.</p>";
}
else{
  echo"<p>{$number} is an odd number.</p>";
  }
  }
  else{
echo"<p> Please enter a valid number.</p>";
}
}

?>
</body>
</html>

