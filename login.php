<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="./user/css/main.css">
</head>
<body>
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2>Have an account?</h2>
            <p>Lorem ipsum dolor sit amet</p>
            <label id="label-register" for="log-reg-show">Login</label>
            <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
        </div>
                            
        <div class="register-info-box">
            <h2>Don't have an account?</h2>
            <p>Create a new account instead</p>

            <a href="signup.php" id="label-login">Sign Up</a>
            <!-- <label  for="log-login-show">Register</label> -->
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>
    <form action ="./user/userlog.php" class="form" method="post">                  
        <div class="white-panel">
            <div class="login-show">
                <h2>LOGIN</h2>
                <input type="text" name="uname" placeholder="Username">
                
                <input type="password" name="pass" placeholder="Password">

                <!-- <input type="button" name="ulog" value="Login"> -->
                <a href="">Forgot password?</a>

                <button type="submit" class="btn btn-danger" name="ulog" value= "Login" style="cursor:pointer;">Login</button>
            </div>
            <div class="register-show">
                <h2>REGISTER</h2>
                <p style ="font-weight:bold;"> Don't have an account? Register Now!!! <a href="signup.php" style="text-decoration:none; font-weight:bold; font-size:large; cursor:pointer;">Creat Your Account</a></p>

                <!-- <input type="button" name="ulog" value="Register"> -->
            </div>
        </div>
        </form>
    </div>
    <script src="./user/js/main.js"></script>
</body>
</html>
