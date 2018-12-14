<html>
<head>
<title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>REGISTER</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input id="name" type="text" name="username" value="{{ old('username') }}" placeholder="Your name" required="required">
                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="textbox">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required="required">
                </div>
            </div>

            <div class="textbox">
                <i class="fa fa-key" aria-hidden="true"></i>
                <input id="password" type="password" name="password" placeholder="Password" required="">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="textbox">
                <i class="fa fa-key" aria-hidden="true"></i>
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required="required">
            </div>

            <input type="submit" name="" value="Register">
        </form>
    </div>

</body>
</head>
</html>