@extends('layout.app')
@section('content')
<div class="col-md-4 mx-auto card p-4">
<h4>Login</h4>
@if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
<form method="POST" action="/login">
@csrf
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" name="password" type="password" placeholder="Password">
<button class="btn btn-primary w-100">Login</button>
</form>
</div>
@endsection
