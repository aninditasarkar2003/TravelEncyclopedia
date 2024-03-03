<?php

if (isset($_POST['submit'])) {
    include 'config.php';
    
    $pname = $_POST['pname'];
    $email = $_POST['email'];
    $destination= $_POST['destination'];
    $duration = $_POST['duration'];
   

    $sql = "INSERT INTO booking (pname,email,destination,duration) VALUES('$pname','$email','$destination','$duration')";
   
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