@extends('app')

@section('title', 'About Us')
@section('content')
<div class="h-100 d-flex justify-content-center align-items-center">
    <form method="POST" action="/login">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" require autofocus>
            <div id="emailHelp" class="form-text">Sesuai email yang telah didaftarkan</div>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection