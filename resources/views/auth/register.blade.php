
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">


</head>

<body>

       <!-- Session Status -->
       <x-auth-session-status class="mb-4" :status="session('status')" />

       
       
       <!-- partial:index.partial.html -->
       <div class="login-form">
     
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Register</h1>

        <div class="err">
                  <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Name" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" autocomplete="new-password">
                </div>

                <div class="input-field">
                    <input type="password" name="password_confirmation" placeholder="Conform     Password" autocomplete="new-password">
                </div>
                <a href="#" class="link">   @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif</a>
              <div class="remember" style="margin-top:20px"> {{ __('Remember me') }}<input  type="checkbox"></div>
              
            <div class="action">
                <a href="{{route('login')}}">Login</a>
                <button>{{ __('register') }}</button>
            </div>
        </form>
    </div>

</body>

</html>