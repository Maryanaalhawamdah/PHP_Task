<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    

$colors=array("RED","BLUE","WHITE","YELLOW");
print_r($colors);
    
echo"<br>";
$lower_colors = array_map('strtolower', $colors);
print_r($lower_colors);
?>

</body>
</html>