<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h2>Please input Your FName</h2>
 <input type="text" name="x">
 <h2>Please input Your LName</h2>
 <input type="text" name="y">
 <h2>Please input Your Email</h2>
 <input type="text" name="z">

 <input type="submit" value="Submit ">
 </form>
 <?php
  require("connect.php");
 
$Fname=$_POST['x'];
$Lname=$_POST['y'];
$Email=$_POST['z'];
$sql = "INSERT INTO employees (Fname, Lname, Email)
VALUES ('$Fname', '$Lname', '$Email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
</body>
</html>