<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Arrays Functions</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">
	<?php 
		$colors = array("pink", "blue", "green");
		array_pop($colors);
		print_r($colors);
		array_push($colors, "balck", "white", "yellow");
		print_r($colors);
	?><br>
	<?php $arrayNumbers = array(22,55,661,84,84,6,67,4565,94,64,94);?>
	Max:<?php echo max($arrayNumbers);?><br>
	Min:<?php echo min($arrayNumbers);?><br>
	Yes:No<?php echo in_array(4565,$arrayNumbers);?><br>
	<?php echo sort($arrayNumbers);?><br>
	<?php echo print_r($arrayNumbers); ?><br>
	<?php echo rsort($arrayNumbers);?><br>
	<?php echo print_r($arrayNumbers); ?><br>

<?php 
$BestQuote = array("Jesus", "is", "My", "Only", "God");
$Myquote = "Jesus Saves My Entire Life";
 ?>
	<h4>Implode Function</h4>
	<?php // The implode() function returns a string from the elements of an array.
		echo implode(" ", $BestQuote);
	?><br>
	<h4>Explode Function</h4>
	<?php // The explode() function breaks a string in to an array.
	print_r( explode(" ", $Myquote) );

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