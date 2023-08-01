<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array1 = array("abcd","abc","de","hjjj","g","wer");
$array2 = array_map('strlen', $array1);
echo"<pre>";
echo "The shortest array length is " . min($array2) ;
echo"<pre>";
echo " The longest array length is " . max($array2).'.';
echo"<pre>";
?>
</body>
</html>