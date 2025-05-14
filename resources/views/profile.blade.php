@extends('master')

@section('title', 'Profil Saya')

@section('content')
<div class="profile-container">
    <div class="profile-card">
        <h2>{{ Auth::user()->name }}</h2>
        <p class="profile-email">{{ Auth::user()->email }}</p>

        <h3 class="section-title">Beasiswa yang Diikuti</h3>
        @if($scholarships->isEmpty())
            <p class="no-scholarship">Belum mengikuti beasiswa apapun.</p>
        @else
            <ul class="scholarship-list">
                @foreach($scholarships as $scholarship)
                    <li class="scholarship-item">
                        <h4>{{ $scholarship->name }}</h4>
                        <p class="scholarship-status">Status: {{ $scholarship->status }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
@endsection
