<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$url = ' https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Path : '.$url['path']."\n";
?>
</body>
</html>