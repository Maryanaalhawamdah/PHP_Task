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
echo"<pre>";
print_r($colors);
    
echo"<pre>";
$lower_colors = array_map('strtolower', $colors);
echo"<pre>";
print_r($lower_colors);
echo"<pre>";
?>

</body>
</html>