<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" >

    <title>Register</title>
</head>
<body>

    <div class="register_form">
        <h2>Register Area</h2>
        <form method="POST" action="{{route('register.save')}}">
            @csrf
            <div class="form_group">
                <label class="title_form" for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name">
            </div>
            <div class="form_group">
                <label class="title_form" for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form_group">
                <label class="title_form" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="form_group">
                <button class="form_submit" type="submit">Register</button>
            </div>
        <span class="form_textrich">Already Have Account? <a class="register_rich" href="{{route('login')}}">Sign In</a></span>
        </form>
    </div>
    
</body>
</html>