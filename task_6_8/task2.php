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
 $str =$_POST['x'];
 function Reverse($str){
    return strrev($str);
}
echo "the revers string is : ".Reverse($str);
?>
</body>
</html>