<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $numbers = [3,4,5,6,2,5,7,1,1,3,4,5,65776567567,6,2,6,2,5,7,1,1,3,4,5,6,2,5,7,1,1,3,4,5];
    $unique_numbers = [];
    echo "<pre>";
    print_r(json_encode($numbers));
    echo "</pre>";

    
    foreach($numbers as $number)
    {
      if(!in_array($number,$unique_numbers)){
          $unique_numbers[] = $number;
      }
    }
    print(json_encode($unique_numbers)); 
    ?>
</body>
</html>