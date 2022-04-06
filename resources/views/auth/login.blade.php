<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" >
    <title>Login</title>
</head>
<body>
    <div class="form_login">
        <h2>Login Area</h2>
        <form method="POST" action="{{route('login.save')}}">
            @csrf
            <div class="form_group">
                <label class="title_form" for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form_group">
                <label class="title_form" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="form_group">
                <button class="form_submit" type="submit">Login</button>
            </div>
        <span class="form_textrich">Dont Have Account? <a class="register_rich" href="{{route('register')}}">Sign Up</a></span>
        </form>
    </div>
    
</body>
</html>