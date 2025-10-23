@extends('layouts.app')

@section('content')
<div class="dashboard-card text-center mt-5">
    <h3>Selamat datang, {{ $username ?? 'username' }}! 💙</h3>
    <img class="logo" src="{{ asset('image/LOGO.png')}}"></img>

    <p>Tropisweet Pudding merupakan dessert sehat berbasis buah dan sayur alami tanpa pemanis buatan.
     Produk ini dikemas praktis dalam cup sekali konsumsi dengan varian rasa unggulan berbahan utama jagung dan nangka,
    sehingga mudah dinikmati, praktis, dan tetap menyehatkan.
    </p>

    <div class="d-flex justify-content-center gap-4 flex-wrap mt-4">
    @include('components.puddingjagung', ['image' => 'puddingjagung.jpg', 'name' => 'Pudding Jagung'])
    @include('components.puddingnangka', ['image' => 'puddingnangka.jpg', 'name' => 'Pudding Nangka'])
</div>

<style>
    body {
        background: linear-gradient(135deg, #b7e5ff 0%, #e8f9ff 100%);
        font-family: 'Poppins', sans-serif;
    }

    .logo {
    display: block;
    margin: 15px auto;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;

    }


    .dashboard-card {
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 128, 255, 0.15);
        max-width: 600px;
        margin: 60px auto;
        padding: 40px 35px;
        color: #1e90ff;
    }

    .dashboard-card h3 {
        font-weight: 700;
        color: #1e90ff;
        margin-bottom: 20px;
    }

    .dashboard-card p {
        font-size: 16px;
        color: #444;
        letter-spacing: 0.5px;
    }
</style>
@endsection
