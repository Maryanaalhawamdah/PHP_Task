<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class factorial_of_a_number
{
  protected $_n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->_n = $n;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

$newfactorial = New factorial_of_a_number(5);
echo $newfactorial->result();
?>
</body>
</html>