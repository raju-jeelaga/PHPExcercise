<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>User Define Functions</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<?php // Normal Function

		function helloworld(){
			echo "This is My Jesus World";
		}

		helloworld();

		echo '<hr>';

		// Addition Values with varables
		function Addition(){
				$a = 10;
				$b = 22;
				$c=$a+$b;
				echo "Addition is {$c}";
		} 
		Addition();

		echo '<hr>';

		// Function Paramters
		function user_function_parameter($x,$y){
			$Result = $x+$y;
			echo "Addition value is {$Result}";
		}
		user_function_parameter(10,55);

		echo '<hr>';


		// Function using Return
		function Addition_using_return($a,$b){
			$c=$a+$b;
			return $c;
		}
		$Total = Addition_using_return(50,60);
		echo $Total; echo '<hr>';
		$sum = Addition_using_return($Total, 11);
		echo $sum;
		
		?>
	</div>
  </body>
  <style>
  	body{
  		background:#f1f1f1;
  	}
  	.container{
  		width:1000px;
  		margin:0 auto;
  	}
  </style>
</html>