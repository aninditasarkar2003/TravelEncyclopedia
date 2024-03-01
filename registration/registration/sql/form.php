<?php

if(isset($_POST['signup'])){

	include 'config.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$re_pass = $_POST['re_pass'];

	$query ="INSERT INTO regis(name, email, pass, re_pass)VALUES('$name','$email','$pass','$re_pass')";

	if(mysqli_query($conn , $query)){
		echo "<script>
				alert('Registration Successfully');
				window.location = 'http://localhost/registration/login.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}
}






?>