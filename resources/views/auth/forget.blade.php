<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forget Password</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">


</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form>
            <h1>Forget Password</h1>
            <div class="content">
                <div class="input-field">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Enter Email Address" autocomplete="nope">
                </div>
            </div>
            <div class="action">
                <h2>k</h2>
                <button>{{ __('Email Password Reset Link') }}</button>
            </div>
        </form>
    </div>

</body>

</html>