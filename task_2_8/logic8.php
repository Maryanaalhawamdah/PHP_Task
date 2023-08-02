<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method='POST' id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

	</div>

    <?php
    $unit = $_POST['units'];

    function calaulatepill($unit){
        if ($unit <= 50){
           $cost = $unit * 2.5;
            return $cost;
        }
        elseif ( $unit >50 && $unit <=100){
            $cost = $unit * '5.00' ;
            return   $cost ;
        }
        elseif($unit >100 && $unit <=250){
            $cost=  $unit * '6.20 ';
            return   $cost ;
        }
        elseif($unit > 250){
            $cost= $unit * '7.50' ;
            return   $cost ;

        }
    }

 echo calaulatepill($unit);

?>
</body>
</html>