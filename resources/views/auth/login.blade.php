<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sotvi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="icon">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
                <i class="fas fa-envelope input-icon"></i>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <i class="fas fa-lock input-icon"></i>
            </div>
            <div class="form-group">
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-custom">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>
    @include('include.script')
</body>

</html>
