<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">


</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form>
            <h1>Login</h1>
            <div class="content">
                <div class="input-field">
                    <input type="email" placeholder="Email" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" autocomplete="new-password">
                </div>
                <a href="#" class="link">Forgot Your Password?</a>
              <div class="remember" style="margin-top:20px"> Remember Me <input  type="checkbox"></div>
                
            </div>
            <div class="action">
                <button>Register</button>
                <button>Sign in</button>
            </div>
        </form>
    </div>

</body>

</html>