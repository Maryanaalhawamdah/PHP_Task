<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'the', $str, 1)."\n"; 
?>
</body>
</html>