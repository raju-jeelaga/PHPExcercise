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
		<?php
		if (isset($_POST['submit'])){
			$Username = $_POST['username'];
			$Password = $_POST['password'];

			if( $Username == "raju" && $Password == "raju"){
				echo "<h2>Welcome {$_POST{"username"} } </h2>";
			} else {
				echo "<h2>Account doesn't Exists | Try with differnt Name </h2>";
			}
		} else {
			echo "<h2>Login Required</h2>";
		}

		?>
		<form action="" method="POST"><br><br>
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
  	}
  	.container{
  		width:1000px;
  		margin:0 auto;
  	}
  </style>
</html>