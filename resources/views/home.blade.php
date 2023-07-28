@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($users as $user)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $user['picture']['medium'] }}" class="card-img-top" alt="{{ $user['name']['first'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user['name']['first'] }} {{ $user['name']['last'] }}</h5>
                        <p class="card-text">Correo Electrónico: <br> <span class="text-truncate">{{ $user['email'] }}</span></p>
                        <p class="card-text">Username: {{ $user['login']['username'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
