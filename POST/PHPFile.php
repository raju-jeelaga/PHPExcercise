<?php
print_r($_POST);

	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Submit   = $_POST['submit'];
	if (isset($_POST['submit'])){
		echo "Sucessfully Login <br>";
		echo "Welcome {$Username} <br>";
	}

	echo '<hr>';
	// if (isset($Username) && !empty($Username)){
	// 	echo "User name is set with the name of:{$Username} <br>";
	// } else{
	// 	echo "Not Detected";
	// }
	// if (isset($Password) && !empty($Password)){
	// 	echo "Password: {$Password}";
	// } else{
	// 	echo "Not Detected";
	// }

	if (isset($_POST['username'])){
		$Username = $_POST['username'];
		echo " {$Username} <br>";
	} else {
		echo "";
	}

	if (isset($_POST['password'])){
		$Password = $_POST['password'];
		echo "{$Password}<br>";
	} else {
		echo "";
	}

?>	