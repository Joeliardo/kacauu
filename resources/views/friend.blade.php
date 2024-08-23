@extends('layout.navbar')

@section('title', 'Friend')
@section('activeFriend', 'active')

@section('content')
    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($dataFriend as $user)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('storage/' . $user->profile_path) }}" alt="" srcset=""
                            style="width: 25rem; height: 25rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">{{ $user->fields_of_work }}</p>
                            <a href="{{ route('message.show', $user->id) }}" class="btn-primary">Message</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
