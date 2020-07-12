<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Arrays</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">
<?php $names = array("Raju","Anil", "Jeelaga");
	echo $names[2];
?><hr>
    <?php 
        $difList = array("Biryani", 10, 20, array("india", "pak", "USA"), "Parata", "roti");
    ?><br>
    <?php echo $difList[0];?><br>
    <?php echo $difList[3][0]?><br>
    <?php echo $difList[5]?><br>
	<?php $difList[99] = "Raju-Jeelaga"; ?><br>
	<?php $difList[199] = "Rithvik-Jeelaga"; ?><br>
	<pre>
		<?php echo print_r($difList); ?>
	</pre>
	<h4>Associate Arrays</h4>
	<?php $Food = array("biryani" => "India", "nudels"=>"china"); ?><br>

	<?php echo $Food["biryani"];?>
	<pre>
		<?php echo print_r($Food); ?>
	</pre>

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