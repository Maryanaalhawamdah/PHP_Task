<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h2>Please input astring here</h2>
 <input type="text" name="x">

 <input type="submit" value="Submit x,y">
 </form>

<?php
$str1=$_POST['x'];
function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      echo " your string not ok it must be lowercase";
         }
         }
     echo "your string is ok";
       }
var_dump(is_str_lowercase($str1));
?>
</body>
</html>