<html>
    <head>
        <title> Login and Registration Form </title>
       
        <link rel ="stylesheet" href="{{URL('assets/css/login.css')}}">
    
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="register-form">
                    <input type="text" name="name" placeholder="Enter Full Names"/>
                    <input type="text" name="email" placeholder="Enter Email Address"/>
                    <input type="text" name="username" placeholder="Enter UserName"/>
                    <input type="text" name="gender" placeholder="Input Gender"/>
                    <input type="text" name="psw" placeholder="Enter Your Password"/>
                    <label>Upload Profile Picture</label>
                    <input type="file" name="image">
                    
                    <button>Create Account</button>
                    <p class="message">Already Registered? <a href="#">Login</a></p>
                </form>

                <form class="login-form">
                    <input type="text" placeholder=" Enter username / email"/>
                    <input type="password" name="psw" placeholder="Enter Password"/>
                    <button>Login</button>
                    <p class="message">Not Registered? <a href="#">Register</a></p>

                    
                </form>

            </div>
        </div>

        <script src='https://code.jquery.com/jquery-3.6.0.min.js
'></script>
<script>
    
    $('.message a').click(function(){
    $('form').animate({height: "toggle",opacity: "toggle"}, "slow");    
    });
</script>

    </body>
</html>
