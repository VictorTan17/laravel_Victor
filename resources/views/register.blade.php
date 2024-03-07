@extends('layout')
@section('isi')
<div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>REGISTER</b></h2>
            <hr>
            <form action="{{route('actionregister')}}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email1" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password1" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="nama" name="nama1" class="form-control" placeholder="nama" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <hr>
            </form>
            @if(session('error'))
          
            {{session('error')}}

            @endif
        </div>
    </div>

@endsection