@extends('layouts.app')

@section('content')


<div class="text-center">
    <div class="login-card">
        <h2 class="login-title mb-4">Login</h2>
        <p>Natural Sweetness, Pure Happines!</p>

        <form action="/dashboard" method="GET" class="mt-4">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn btn-tropisweet w-100 mt-3">Login</button>
        </form>
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, #b7e5ff 0%, #e8f9ff 100%);
        font-family: 'Poppins', sans-serif;
    }
    .login-card {
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 128, 255, 0.15);
        max-width: 420px;
        margin: auto;
        padding: 40px 35px;
    }
    .login-title {
        color: #1e90ff;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .form-control {
        border: 2px solid #b0e0ff;
        border-radius: 10px;
    }
    .btn-tropisweet {
        background-color: #79c3ff;
        border: none;
        color: white;
        font-weight: 600;
        border-radius: 10px;
    }
</style>


@endsection
