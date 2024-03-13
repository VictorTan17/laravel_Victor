@extends('layout')

@section('isi')
<div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>LOGIN</b></h2>
            <hr>
            <form action="{{route('actionlogin')}}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
            </form>
            @if(session('error'))
          
            {{session('error')}}

            @endif
        </div>
    </div>

@endsection