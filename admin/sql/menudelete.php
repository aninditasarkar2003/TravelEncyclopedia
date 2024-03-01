<?php

include 'config.php';

$id =$_GET['id'];
$sql = "DELETE FROM package WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Data deleted successfully');
    window.location='http://localhost/jisECE/admin/viewmenu.php';
    </script>";  
}else{
    echo "Error" .mysqli_error($conn);
}
?>