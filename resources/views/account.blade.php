@extends('app')

@section('title', 'Account')

@section('content')
    <h1>Personal info</h1>
    <p>NAME: {{Auth::user()->name}}</p>
    <p>EMAIL: {{Auth::user()->email}}</p>
@endsection
