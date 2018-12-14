<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>LOGIN</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input style="background-color: white" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required="required" autofocus="autofocus">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input style="background-color: transparent !important;" id="password" type="password" name="password" placeholder="Password" required="required">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <input type="submit" value="Login">

            <div class="checkbox-box">
                <input id="remember" class="input-checkbox" id="check" type="checkbox" name="remember">
                <label class="check-box" for="remember">
                    Remember me
                </label>
            </div>

            <div class="linebox">
                <a href="{{ route('register') }}">Don't have an account?</a>
            </div>
        </form>
    </div>

</body>
</head>
</html>