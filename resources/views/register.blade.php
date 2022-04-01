<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">


</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form>
            <h1>Register</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" placeholder="Name" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="email" placeholder="Email" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" autocomplete="new-password">
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Conform     Password" autocomplete="new-password">
                </div>
            </div>
            <div class="action">
                <button>Sign in</button>
                <button>Register</button>
            </div>
        </form>
    </div>

</body>

</html>