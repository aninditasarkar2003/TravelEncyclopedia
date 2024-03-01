<!-- ?php
session_start();

if(isset($_SESSION['username'])){
    echo "Welcome, " . $_SESSION['username'] . "!";
} else {
    header("location: login.php"); 
}
?>
 -->
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
 </head>
 <body>
    <h1>Hello user</h1>
 
 </body>
 </html>