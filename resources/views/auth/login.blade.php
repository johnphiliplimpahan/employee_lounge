@extends('layouts.app')


@section('content')
<div class="login-wrapper">
    <div class="container">
        <div class="col-lg-4 offset-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center text-danger">MEMBER LOGIN</h3>
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="username">USERNAME</label>
                            <input type="text" class="form-control" name="username">
                            @if($errors->has('username'))
                                <small class="form-text text-danger">{{ $errors->first('username') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">PASSWORD</label>
                            <input type="password" class="form-control" name="password">
                            @if($errors->has('password'))
                                <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-danger btn-block" type="submit">LOGIN</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <p>Don't have an account yet? <a id="toRegister" href="/register" class="card-link">Join Now</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection