<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$flexiple = array("Hire", "top", "freelance", "developers");

foreach ($flexiple as $value) {
  echo "$value <br>";
}
?>
<!-- <br><br><br><br>
<?php 
$freelancer = array( 
    "name" => "Eric", 
    "email" => "Eric@gmail.com", 
    "age" => 22, 
    "gender" => "male"
); 
  
// Loop through employee array 
foreach($freelancer as $key => $value) { 
    echo $key . ": " . $value . "<br>"; 
} 
?>  -->
<br><br><br><br>
<!-- <?php

$total = 0;

for ($i = 1; $i <= 10; $i++) {
    $total += $i;
}

echo $total;
?> -->
<br><br><br><br>
<!-- <?php

$total = 0;
$number = 1;

while ($number <= 10) {
    $total += $number;
    $number++;
}

echo $total;
?> -->
<!-- <br><br><br><br>
<?php 
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?> -->

<?php
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

// Sort the array by capital in ascending order
asort($cities);

// Define a custom function to display the capital and country name
function display($capital, $country) {
    echo "Capital of $country is $capital<br>";
}

// Use array_walk to apply the display function to each element of the sorted array
array_walk($cities, 'display');
?> 
</body>
</html>
