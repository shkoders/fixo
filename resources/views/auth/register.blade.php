@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="/auth/register" class="form-horizontal">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input class="form-control" type="password" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input class="form-control" type="password" name="password_confirmation">
    </div>

    <div class="form-group">
        <button class="btn btn-default" type="submit">Register</button>
    </div>
    </form>
<div>
@endsection