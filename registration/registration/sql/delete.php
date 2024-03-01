<?php

include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM regis WHERE id = '$id'";

if(mysqli_query($conn, $sql)){

	echo "<script>
		alert('Data Successfully Delete');
		window.location = 'http://localhost/tour/hello.php';
	</script>";
	}
	else{
		echo "error" .mysqli_error($conn);
	}



?>