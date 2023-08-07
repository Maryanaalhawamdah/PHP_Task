<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class MyClass {
  public function __construct() 
  {
   echo 'MyClass class has initialized !'."\n";
  }
 }
$userclass = new MyClass;
?>

</body>
</html>