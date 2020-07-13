<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Static Variables</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<?php
		function normalv(){
			$value = 1;
			echo 'Normal' . $value . '<br>';
			$value ++;
		}
		normalv();
		normalv();
		normalv();
		normalv();

		echo '<hr>';

		function staticV(){
			static $value = 1;
			echo "Static " . $value . '<br>';
			$value ++;
		}
		staticV();
		staticV();
		staticV();
		staticV();

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