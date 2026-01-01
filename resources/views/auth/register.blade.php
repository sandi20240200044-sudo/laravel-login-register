@extends('layout.app')
@section('content')
<div class="col-md-4 mx-auto card p-4">
<h4>Register</h4>
<form method="POST" action="/register">
@csrf
<input class="form-control mb-2" name="name" placeholder="Nama">
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" name="password" type="password" placeholder="Password">
<button class="btn btn-success w-100">Register</button>
</form>
</div>
@endsection
