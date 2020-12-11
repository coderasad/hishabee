@extends('layouts.app')
@section('title')
	Sign Up
@endsection

@section('content')

<div class="bg-white">
    <div class="container-login100" style="background-image: url('{{asset('public/frontend/img/img-01.jpg')}}');">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-md-4 mx-auto">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">
                            <a href="" class="showImg">
                                <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
                            </a>
                            <h5 class="font-weight-bold mt-3">Register Form</h5>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf 
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Name</label>
                                        <div class="position-relative icon-form-control">
                                            <i class="feather-user position-absolute"></i>
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="name" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Email</label>
                                <div class="position-relative icon-form-control">
                                    <i class="feather-at-sign position-absolute"></i>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif   
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Password</label>
                                        <div class="position-relative icon-form-control">
                                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                                            <i class="feather-unlock position-absolute"></i>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Confirm Password</label>
                                        <div class="position-relative icon-form-control">
                                            <input class="input100 form-control" type="password" name="password_confirmation" placeholder="Confirm Password">    
                                            <i class="feather-unlock position-absolute"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">You agree to the CodeFun <a href="#" class="text-warning" > User Agreement</a>, <a  class="text-warning"href="#">Privacy Policy</a></label>
                            </div>
                            <button class="btn btn-primary btn-block text-uppercase text-white" type="submit">Agree & Join</button>
                            <div class="text-center mt-3 pb-3">
                                <p class="small text-white">Or</p>
                                <div class="row">
                                    <a href="{{ url('/google-login') }}" class="btn btn-sm btn-danger btn-block ">
                                        Log In With Google
                                    </a>
                                </div>
                            </div>
                            <div class="py-3 d-flex align-item-center">
                                <a href="#" class="text-white ">Forgot password?</a>
                                <span class="ml-auto"> Already on CodeFun? <a class="text-white font-weight-bold" href="{{route('login')}}">Sign in</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
