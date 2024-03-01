<?php

include 'config.php';

$id =$_GET['id'];
$sql = "DELETE FROM guide WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Data deleted successfully');
    window.location='http://localhost/TravelEncyclopedia/admin/viewguide.php';
    </script>";  
}else{
    echo "Error" .mysqli_error($conn);
}
?>