@extends('layouts.app')
@section('content')
<div class = "profile-card">
    <div class = "text-center">
        <h3 class = "fw-bold text-primary mb-4">Profil Pengguna</h3>
        <p class = "text-muted":> Nama Pengguna: {{ $username ?? 'username' }} </p>
    </div>
</div>
<style>
    .profile-card{
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 128, 255, 0.15);
        max-width: 420px;
        margin: auto;
        padding: 40px 35px;

    }
</style>
@endsection

