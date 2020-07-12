<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Numbers</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>

 	<?php 
       $FirstNumber = 3;
       $SecondNumber = 38.666;
       $ThirdNumber = 5.9; 
    ?>

   <?php echo $FirstNumber+6-99; ?> <br>
   <?php echo 5.6/2; ?><br>
   <?php echo 7/5; ?><br>
   <?php echo ceil($SecondNumber); ?><br>
   <?php echo floor($SecondNumber); ?><br>

   <?php echo "is {$FirstNumber} : interger" . is_int($FirstNumber) ; ?><br>
   <?php echo "is {$SecondNumber} : interger" . is_int($SecondNumber) ; ?><br>
   <?php echo "is {$FirstNumber} : float" . is_float($FirstNumber) ; ?><br>
   <?php echo "is {$SecondNumber} : float" . is_float($SecondNumber) ; ?><br>
   <?php echo "is {$FirstNumber} : Numeric" . is_numeric($FirstNumber) ; ?><br>
   <?php echo "is {$SecondNumber} : Numeric" . is_numeric($SecondNumber) ; ?><br>

   Binary: <?php echo decbin(2); ?><br>
   Decimal: <?php echo bindec(11); ?><br>
   SquareRoot: <?php echo sqrt(110); ?><br>
   Absolute Value: <?php echo abs(-110+99); ?><br>
   Power: <?php echo pow(2,10); ?><br>
   Mudulas: <?php echo fmod(15,30); ?><br>
   Random: <?php echo rand(); ?><br>
   Random with 500 and 1600: <?php echo rand(500,1600); ?><br>
   <?php echo $FirstNumber = $FirstNumber + 8;?><br>
   Increment: <?php  $FirstNumber++;  echo $FirstNumber; ?><br>
   Decrement: <?php  $FirstNumber--;  echo $FirstNumber; ?><br>
  </body>
</html>