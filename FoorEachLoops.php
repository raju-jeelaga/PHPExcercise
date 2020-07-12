<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>For Each Loop</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<?php
			$Numbers = array(55,66,77,45,21,63,85,6632,855,7455,);

			foreach ($Numbers as $Num) {
				echo "{$Num} is a Number <br>";
			}
		?>
		<hr>
		<?php 
		$FoodItems = array(
			'item_id' => 01,
			'name' => 'France Food',
			'area' => 'Hyderbad',
			'drink'=> 'Sprite',
			'spicy_food' => 'Biryani',
			'product_amount' => 586,
		);

		foreach ($FoodItems as $key => $value) {

			$data = ucwords( str_replace("_", " ", $key));

			if( $key == "product_amount"){
				if(is_numeric($value)){

				}else{
					$value = "Can not be Determined";
				}
			}

			echo "{$data} : {$value} <br>";
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