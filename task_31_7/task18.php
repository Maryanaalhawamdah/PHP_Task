<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str1 = "2,543.12";
echo $str1;
echo "<br>";

$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>
</body>
</html>