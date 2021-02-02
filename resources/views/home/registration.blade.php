@extends('layouts.layout')
@section('content')
@if (isset($error))
<h3 align='center' class="mt-5" style="color: orangered">{{$error}}</h3>
@endif
<form action="showuser" method="post" class="col-4 mx-auto border mt-5">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="login">Login: </label>
        <input type="text" name="login" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="passwordConf">Confirm password: </label>
        <input type="password" name="passwordConf" class="form-control">
    </div>
    <div class="form-group">
        <label for="age">Years old: </label>
        <input type="number" name="age" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" name="email" class="form-control">
    </div>
    <input type="submit" name="regSubmit" class="btn btn-success container-fluid" value="Register">
</form>
@endsection
