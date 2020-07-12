<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Branching Statements</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<?php 
			$Names = array("Alex", "David", "Paul", "Shaina", "Monika", "Lela","kumar");

			for($i=0; $i<=6; $i++){
				if($Names[$i]=="Lela"){
					continue;
				}
				echo $Names[$i] . '<br>';
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