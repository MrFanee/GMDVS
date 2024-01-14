@extends('layouts.login.master_login')

@section('title', 'GMDVS - Login')

@section('css')
@endsection

@section('content')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form" style="background-color: #8D918D;">
                <form method="post" action="{{ route('login_store') }}">
                    @csrf
                    
                    @error('username')
                        <div class="alert alert-danger" role="alert">
                            <i>{{ $message }}</i>
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            <i>{{ $message }}</i>
                        </div>
                    @enderror

                    <div class="form-group">
                        <label style="color: #efeaea;">NIK</label>
                        <input type="text" name="username" class="form-control" placeholder="Nik">
                    </div>
                    <div class="form-group">
                        <label style="color: #efeaea;">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                 
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script></script>
@endsection

@push('js')
@endpush