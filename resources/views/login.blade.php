@extends('app')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <input name="loginEmail" type="text" placeholder="email">
        <input name="loginPassword" type="password" placeholder="password">
        <button>Log in</button>
    </form>
@endsection
