<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sotvi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   @include('include.style')
   <style>
        body {
            background: url('images/bg_2.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .register-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            max-width: 800px; /* Maksimal lebar kontainer */
            width: 100%;
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-control {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-custom {
            background-color: #6a11cb;
            border-color: #6a11cb;
            color: white;
            border-radius: 20px;
            padding: 10px;
            font-size: 18px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #2575fc;
            border-color: #2575fc;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group .input-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 15px;
            color: #999;
        }

        .form-group input,
        .form-group select {
            padding-right: 40px;
        }

        .social-login {
            text-align: center;
            margin-top: 20px;
        }

        .social-login a {
            color: white;
            margin: 0 10px;
            font-size: 20px;
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background: #333;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-login a:hover {
            background: #6a11cb;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #6a11cb;
        }

        .login-link a:hover {
            color: #2575fc;
            text-decoration: underline;
        }

        @media (max-width: 767.98px) {
            .register-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <!-- Baris Pertama: Nama Lengkap & Email -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                <i class="fas fa-user input-icon"></i>
            </div>
            <div class="form-group col-md-6">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
                <i class="fas fa-envelope input-icon"></i>
            </div>
        </div>
        <!-- Baris Kedua: Password & Konfirmasi Password -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <i class="fas fa-lock input-icon"></i>
            </div>
            <div class="form-group col-md-6">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                <i class="fas fa-lock input-icon"></i>
            </div>
        </div>
        <!-- Baris Ketiga: Tipe Pengguna & Pilih Konferensi -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <select class="form-control" name="user_type" required>
                    <option value="" disabled selected>Select User Type</option>
                    <option value="user">User</option>
                    <option value="member">Member (Get Discount)</option>
                </select>
                <i class="fas fa-user-tag input-icon"></i>
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" name="conference" required>
                    <option value="" disabled selected>Select Conference</option>
                    <!-- Tambahkan opsi konferensi sesuai kebutuhan -->
                    <option value="conference1">Conference 1</option>
                    <option value="conference2">Conference 2</option>
                    <option value="conference3">Conference 3</option>
                </select>
                <i class="fas fa-calendar-alt input-icon"></i>
            </div>
        </div>
        <!-- Baris Keempat: Alamat & Telepon (Contoh Data Lengkap) -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Address" name="address" required>
                <i class="fas fa-home input-icon"></i>
            </div>
            <div class="form-group col-md-6">
                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
                <i class="fas fa-phone input-icon"></i>
            </div>
        </div>
        <!-- Baris Kelima: Kota & Negara (Contoh Data Lengkap) -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="City" name="city" required>
                <i class="fas fa-city input-icon"></i>
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" name="country" required>
                    <option value="" disabled selected>Select Country</option>
                    <!-- Tambahkan opsi negara sesuai kebutuhan -->
                    <option value="indonesia">Indonesia</option>
                    <option value="singapore">Singapore</option>
                    <option value="malaysia">Malaysia</option>
                    <!-- ... -->
                </select>
                <i class="fas fa-globe input-icon"></i>
            </div>
        </div>
        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->

        <button type="submit" class="btn btn-custom">Register</button>
    </form>
    <div class="login-link">
        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>
@include('include.script')


</body>
</html>
