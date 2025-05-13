@extends('../master')

@section('title', 'Home | UBeasiswa')

@if (Request::is('register'))
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endif

@section('content')
<div class="register-container">
    <h1>Daftar</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Username <span>*</span></label>
            <input type="text" id="name" name="name" placeholder="Masukkan username anda" required>
        </div>
        <div class="form-group">
            <label for="email">Email <span>*</span></label>
            <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>
        </div>
        <div class="form-group">
            <label for="password">Password <span>*</span></label>
            <input type="password" id="password" name="password" placeholder="Masukkan password anda" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password <span>*</span></label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Masukkan ulang password anda" required>
        </div>
        <button type="submit" class="btn-primary">Daftar</button>
    </form>
</div>
@endsection