<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class user_message {
 public $message = 'Hello All, I am ';
 public function introduce($name)
 {
  return $this->message.$name;
 }
 }
$mymessage = New user_message();
echo $mymessage->introduce('Scott')."\n";
?>
</body>
</html>