<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    <div id="auth">

<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="/"><img src="{{ asset('frontend/images/logo/logo.svg') }}" alt="Logo"></a>
            </div>
            <h1 class="">Selamat Datang</h1>
            <p class="mb-5 fs-5">Masuk dengan data Anda yang Anda masukkan saat pendaftaran.</p>

            <form action="/">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                {{-- <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div> --}}
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
            </form>
            <div class="text-center mt-5 text-lg fs-5">
                <p class="text-gray-600">Tidak memiliki akun? <a href="auth-register.html" class="font-bold">Registrasi</a>.</p>
                {{-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> --}}
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>
