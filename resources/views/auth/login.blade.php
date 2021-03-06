<html>
<head>
    <title> Login and Registration Form </title>

    <link rel="stylesheet" href="{{URL('assets/css/login.css')}}">

</head>
<body>
<div class="login-page">
    <div class="form">
        @if($errors->isNotEmpty())
            <div class="alert alert-danger alert-dismissible py-1 text-light fw-bolder">
                <small>{{$errors->first()}}</small>
            </div>
        @endif

        <form method="POST" class="register-form" action="{{ route("register") }}">
            @csrf
            <input type="text" name="name" placeholder="Enter Full Names"/>
            <input type="text" name="email" value="{{ old("email") }}" placeholder="Enter Email Address"/>
            <input type="text" name="username" value="{{ old("username") }}" placeholder="Enter UserName"/>
            <input type="text" name="gender" placeholder="Input Gender"/>
            <input type="password" name="password" placeholder="Enter Your Password"/>
            <!-- <label>Upload Profile Picture</label> -->
            <!-- <input type="file" name="image"> -->

            <button type="submit">Create Account</button>
            <p class="message">Already Registered? <a href="#">Login</a></p>
        </form>

        <form method="POST" class="login-form" action="{{ route("login") }}">
            @csrf
            <input type="text" name="email" value="{{ old("email") }}" placeholder="Enter username / email"/>
            <input type="password" name="password" placeholder="Enter Password"/>
            <button type="submit">Login</button>
            <p class="message">Not Registered? <a href="#">Register</a></p>
        </form>

    </div>
</div>

<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script>

    $('.message a').click(function () {
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

</body>
</html>
