<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Switch Statements</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<?php
			$weather = "sunny";
			switch ($weather) {
				case 'sunny':
					echo "The Weather is so Pleasent";
					break;
				case 'cloudy':
					echo "The weather might look like Cloudy";
					break;
				case 'Rainy':
					echo "The weather might look like Rainy";
				default:
					echo "The Weather is looking like normal";
					break;
			}
		?>

		<hr>
		<?php 
		$HightCourt = "public";
		switch ($HightCourt) {
			case 'Judges':
				echo "The Judges have the Permission";
				break;
			case 'public':
			case 'media':
			case 'transport':
				echo "The Permission is denied";
				break;
			default:
				echo "The is the default case";
				break;
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