<?php

if (isset($_POST['submit'])) {
    include 'config.php';

    $id = $_POST['id'];

    $pname = $_POST['pname'];
    $desig = $_POST['desig'];
    $age = $_POST['age'];
    $insta = $_POST['insta'];
    $fb = $_POST['fb'];
    $tw = $_POST['tw'];
    $li = $_POST['li'];
    $home = $_POST['home'];
    $about = $_POST['about'];
    $img = $_FILES['img']['name'];
   
    move_uploaded_file($_FILES['img']['tmp_name'], '../img/guide/'.$_FILES['img']['name']);


    $sql = "UPDATE guide SET pname='$pname',desig='$desig',age='$age',insta='$insta',fb='$fb',tw='$tw',li='$li',about='$about', home='$home', img='$img' WHERE id='$id'";
   
    if(mysqli_query($conn, $sql)){
        echo "<script>
        alert('Data Added Successfully');
        window.location= 'http://localhost/TravelEncyclopedia/admin/viewguide.php';
        </script>";
    }else{
        echo "Error" .mysqli_error($conn);
    }
}
?>