<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    $colors = array( "Red", "Green", "Black", "White"); 
    echo"<pre>";
    print_r($colors);
    
    echo"<pre>";

    $upper_colors = array_map('strtoupper', $colors);
    echo"<pre>";
    print_r($upper_colors);
    echo"<pre>";
    ?>

</body>
</html>