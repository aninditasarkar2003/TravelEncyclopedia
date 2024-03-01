<?php   


if(isset($_POST['ureg'])){
    include('config.php');  
    $username = $_POST['uname'];  
    $name = $_POST['name']; 
    $password = $_POST['pass'];  
    $mail = $_POST['umail'];
        
        $sql = "SELECT * from users WHERE username = '$username' and password = '$password'";  
        $table = mysqli_query($conn, $sql);
        if(mysqli_num_rows($table)>0){

            echo "<script> alert('User already Exists');
            window.location = '../signup.php';
           </script>";
          
        }
        
        else{

            $sql = "INSERT INTO users(customer_name ,customer_mail, username, password) VALUES('$name', '$mail', '$username', '$password')";
            
       
          
        if(mysqli_query($conn,$sql)){ 
            echo "<script> alert('Registration successful');
             window.location = '../login.php';
            </script>";
           	  
        }  
        else{  
            echo "error" .mysqli_error($conn);
        } 

    }

    }    
?>  