<?php

if (isset($_POST['submit'])) {
    include 'config.php';

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


    $sql = "INSERT INTO guide (pname,desig,age,insta,fb,tw,li,about, home, img) VALUES ('$pname', '$desig','$age','$insta','$fb','$tw','$li','$about' ,'$home', '$img')";
   
    if(mysqli_query($conn, $sql)){
        echo "<script>
        alert('Data Added Successfully');
        window.location= 'http://localhost/TravelEncyclopedia/admin/guide.php';
        </script>";
    }else{
        echo "Error" .mysqli_error($conn);
    }
}
?>