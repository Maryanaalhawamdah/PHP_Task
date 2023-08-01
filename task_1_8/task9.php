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
    print_r($colors);
    
    echo"<br>";

    $upper_colors = array_map('strtoupper', $colors);
    print_r($upper_colors);
    
    ?>

</body>
</html>