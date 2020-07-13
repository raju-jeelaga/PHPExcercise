<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Super Global Variables</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<?php
			$x=55;
			$y=98;
			function additionNumber(){
				$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			additionNumber();
			print_r($GLOBALS);
			echo $z;
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