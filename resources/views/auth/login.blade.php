<html>
<head  lang="en">
<title>Zentric Power Asia</title>
<link rel="icon" href="images/logo.png" type="image/x-icon">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="js/bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/styleheet.css"/>
<link rel="stylesheet" href="css/style1.css"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <style>
        .input-group{
            width: 100%;
        }
        .container{
            margin-top: 5%;
        }
        body{
            background: #323539;
        }
        .btn-reg{
            color: blue;
        }
    </style>
</head>
<body>
<div class="row container">
    <h2 id="logintxt">Sign In</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group input-group-icon">
            <input id="email" type="email" placeholder="Email" class="text-input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>
            <div class="input-icon"><span class="glyphicon glyphicon-user btn-lg"></span> </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
        </div>

        <div class="input-group input-group-icon">
            <input id="password" type="password" placeholder="Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
            <div class="input-icon"><span class="glyphicon glyphicon-lock btn-lg"></span> </div>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif
        </div>

        <button type="submit" id="loginbtn">
            {{ __('Login') }}
        </button>
        <center><a href="/register"><h5 class="btn-reg">REGISTER</h5></a></center>

        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        <center><a href="/" class="btn-reg">Home</a></center>
    </form>
</div>
</body>
</html>