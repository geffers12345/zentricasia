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
    <h2 id="logintxt">Sign Up</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group input-group-icon">
            <input id="name" placeholder="Full Name" type="text" class="text-input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

            <div class="input-icon"><span class="glyphicon glyphicon-user btn-lg"></span> </div>
        </div>

        <div class="input-group input-group-icon">
            <input id="email" placeholder="Email" type="email" class="text-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="input-icon"><span class="glyphicon glyphicon-envelope btn-lg"></span> </div>
        </div>

        <div class="input-group input-group-icon">
            <input id="password" placeholder="Password" type="password" class="text-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="input-icon"><span class="glyphicon glyphicon-lock btn-lg"></span> </div>
        </div>

        <div class="input-group input-group-icon">
            <input id="password-confirm" placeholder="Confirm Password" type="password" class="text-input" name="password_confirmation" required>
            <div class="input-icon"><span class="glyphicon glyphicon-lock btn-lg"></span> </div>
        </div>

        <button type="submit" id="loginbtn">
            {{ __('Register') }}
        </button>
        <center><a href="/login"><h5 class="btn-reg">LogIn</h5></a></center>
    </form>
</div>
</body>
</html>