@extends('layouts.app')

@section('content')
    <div style="text-align: center; padding: 50px;">
        <h1>Welcome to Laravel!</h1>
        <p>Manage your tasks efficiently.</p>
        
        <a href="{{ route('greet.proceed') }}">
            <button style="padding: 10px 20px; font-size: 16px;">Okay</button>
        </a>
    </div>
@endsection
