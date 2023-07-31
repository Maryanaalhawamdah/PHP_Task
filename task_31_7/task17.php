<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo $my_string;
echo "<br>";
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>

</body>
</html>