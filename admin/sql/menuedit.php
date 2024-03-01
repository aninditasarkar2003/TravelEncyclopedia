<?php
if (isset($_POST['submit'])) {
    include 'config.php';

    $id = $_POST['id'];

    $pname = $_POST['pname'];
    $fromm = $_POST['fromm'];
    $too = $_POST['too'];
    $pin = $_POST['pin'];
    $district = $_POST['district'];
    $statee = $_POST['statee'];
    $datee = $_POST['datee'];
    $amount = $_POST['amount'];
    $descrp = $_POST['descrp'];
    $img = $_FILES['img']['name'];
   
    move_uploaded_file($_FILES['img']['tmp_name'], '../img/' .$_FILES['img']['name']);

    $sql = "UPDATE package SET pname='$pname', fromm='$fromm', too='$too', pin='$pin', district='$district', statee='$statee', datee='$datee', amount='$amount', descrp='$descrp', img='$img' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        
        window.location='http://localhost/jisECE/admin/viewmenu.php';
        </script>";  
    }else{
        echo "Error" .mysqli_error($conn);
    }
}


?>