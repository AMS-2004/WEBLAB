<html>
<body>
<form method="post">
Enter a number:
<input type="text" name="number">
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
   if($_POST){
$n=$_POST['number'];

$f=1;
for($i=1;$i<=$n;$i++){
$f=$f*$i;
}
echo "factorial of $n is $f";
}
?>

