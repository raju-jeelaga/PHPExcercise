<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>For Loop</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<?php
			
			for( $i=1; $i<=10; $i++){
				echo " <p>{$i} is Printing on Screen </p>";
			}
		?>
		<hr>
		<?php
		 $N = 4;
		 for ($i=1; $i<=10; $i++){
		 	$Result = $N * $i;
		 	echo $N . " * " . $i . " = " .$Result. '<br>';
		 }
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