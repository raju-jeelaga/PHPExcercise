<!doctype html>
<html class="no-js" lang="en">
	<head>
    <title>Froms</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">
		<form action="PHPFile.php" method="POST"><br><br>
			<label>UserName:
				<input type="text" name="username" value="">
			</label><br><br>
			<label>Password:
				<input type="password" name="password" value="">
			</label><br><br>
			<button type="submit" name="submit" value="submit">Submit</button>
		</form>

	</div>
  </body>
  <style>
  	body{
  		background:#f1f1f1;
  	}raju@pwa-for-wp.com  
  	.container{
  		width:1000px;
  		margin:0 auto;
  	}
  </style>
</html>