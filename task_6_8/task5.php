<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h2>Please input number x</h2>
 <input type="text" name="x">
 <h2>Please input number y</h2>
 <input type="text" name="y">
 <input type="submit" value="Submit">
 </form>
 <?php
 $x=$_POST['x'];
 $y=$_POST['y'];
 echo 'Number x ='.$x .', and y='.$y;
 echo '<br>';
 $z=$x;
 $x=$y;
 $y=$z;
 echo "The number x after swapping=".$x . ", And the number y after swaping =".$y;
 ?>

</body>
</html>