<?php

if (isset($_POST['submit'])) {
    include 'config.php';

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
   
    move_uploaded_file($_FILES['img']['tmp_name'], '../img/'.$_FILES['img']['name']);


    $sql = "INSERT INTO package (pname,fromm,too,pin,district,statee,datee,amount, descrp, img) VALUES ('$pname', '$fromm','$too','$pin','$district','$statee','$datee','$amount' ,'$descrp', '$img')";
   
    if(mysqli_query($conn, $sql)){
        echo "<script>
        alert('Data Added Successfully');
        window.location= 'http://localhost/TravelEncyclopedia/admin/menu.php';
        </script>";
    }else{
        echo "Error" .mysqli_error($conn);
    }
}
?>