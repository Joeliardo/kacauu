@extends('layout.navbar')

@section('title', 'Message')
@section('activeMessage', 'active')

@section('content')
    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($messages as $msg)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $friend->name }}</h5>
                            <h5 class="card-title">{{ $msg->message }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
            <form method="POST" action="{{ route('message.store') }}">
                @csrf
                <input type="hidden" name="friend_id" value="{{ $friend->id }}">
                <button type="submit" class="button">Message</button>
            </form>
        </div>
    </div>
@endsection
