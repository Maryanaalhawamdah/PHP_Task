<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h2>Please input number x</h2>
 <input type="text" name="x">

 <input type="submit" value="Submit x,y">
 </form>

 <?php
  $n=$_POST['x'];
  function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		//    return 0;
           echo "its not a prime number";
		  }
    }
//   return 1;
  echo "its aprime number";
   }
echo IsPrime($n);
?>

</body>
</html>