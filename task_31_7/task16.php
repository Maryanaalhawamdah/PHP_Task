<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo $my_str;
echo "<br>";
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
?>
</body>
</html>