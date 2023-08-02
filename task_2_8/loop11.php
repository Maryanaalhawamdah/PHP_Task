<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//function for floyd triangle
function FloydTriangle($n){
  $value = 1;
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$value "; 
      $value++;
    }
    echo "<br>"; 
  }
}

FloydTriangle(5);
?>
</body>
</html>