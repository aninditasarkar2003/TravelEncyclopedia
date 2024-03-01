<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./user/css/main.css">
</head>
<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="./user/usersing.php" method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name"></div>

                <div class="form-group">
                <input class="form-control" type="email" name="umail" placeholder="Email"></div>

                <div class="form-group">
                    <input class="form-control" type="text" name="uname" placeholder="Username"></div>

                <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="Password (repeat)"></div>

                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group">

                <button class="btn btn-danger btn-block" type="submit" name="ureg" value= "ulog">Sign Up</button></div>

                <a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>

</body>
</html>