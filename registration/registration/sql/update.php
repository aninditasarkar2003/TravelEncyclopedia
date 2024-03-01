<?php

if(isset($_POST['update'])){

	include 'config.php';


	$id = $_POST['id'];
	$name  = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$re_pass = $_POST['re_pass'];


	$sql = "UPDATE regis SET name= '$name',email='$email',pass='$pass', re_pass='$re_pass' WHERE id = '$id'";

	if(mysqli_query($conn, $sql)){

	echo "<script>
		alert('Data Successfully Update');
		window.location = 'http://localhost/tour/hello.php';
	</script>";

	}
	else{
		echo "error" .mysqli_error($conn);
	}
}




?>