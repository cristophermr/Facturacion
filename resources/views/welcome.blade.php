@extends('layouts.login')
@section('form')
    <h1>Ingresar</h1>
<form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="email" class="username" placeholder="Usuario">
    <input type="password" name="password" class="password" placeholder="Contraseña">
    <button type="submit">Ingresar</button>
    <div class="error"><span>{{ $errors->first('email') }}</span></div>
</form>
@endsection
