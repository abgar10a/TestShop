@extends('app')

@section('title', 'Register')

@section('content')
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <button>Register</button>
    </form>
@endsection
