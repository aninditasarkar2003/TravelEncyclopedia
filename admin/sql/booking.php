<?php

if (isset($_POST['submit'])) {
    include 'config.php';

    $destination = $_POST['destination'];
    $depart = $_POST['depart'];
    $rtn = $_POST['rtn'];
    $duration = $_POST['duration'];
   

    $sql = "INSERT INTO booking (destination,depart,rtn,duration) VALUES('$destination','$depart','$rtn','$duration')";
   
    if(mysqli_query($conn, $sql)){
        echo "<script>
        alert('Booked Successfully');
        window.location= 'http://localhost/TravelEncyclopedia/';
        </script>";
    }else{
        echo "Error" .mysqli_error($conn);
    }
}
?>