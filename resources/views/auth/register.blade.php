@extends('layouts.app')


@section('content')
<div class="register-wrapper">
    <div class="container">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center text-danger">CREATE YOUR ACCOUNT</h3>
                    <form method="POST" action="{{ route('register') }}" id="register-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="firstname">FIRSTNAME</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                    @if($errors->has('firstname'))
                                        <small class="form-text text-danger">{{ $errors->first('firstname') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="middlename">MIDDLENAME</label>
                                    <input type="text" class="form-control" id="middlename" name="middlename">
                                    @if($errors->has('middlename'))
                                        <small class="form-text text-danger">{{ $errors->first('middlename') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="lastname">LASTNAME</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                    @if($errors->has('lastname'))
                                        <small class="form-text text-danger">{{ $errors->first('lastname') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="username">USERNAME</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                    @if($errors->has('username'))
                                        <small class="form-text text-danger">{{ $errors->first('username') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="password">PASSWORD</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                @if($errors->has('password'))
                                    <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="password_confirmation">CONFIRM PASSWORD</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                    @if($errors->has('password_confirmation'))
                                        <small class="form-text text-danger">{{ $errors->first('password_confirmation') }}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <button id="signUpBtn" class="btn btn-danger btn-block">JOIN NOW</button>
                            </div>
                            <div class="col-lg-6 text-center">
                                <p>Already a member? <a id="toLogin" href="/login" class="card-link">Login now</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection