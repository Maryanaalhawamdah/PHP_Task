<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
echo"<pre>";
print_r(min_values_not_zero(array(2,0,10,12,6))."\n");
echo"<pre>";
?>
</body>
</html>