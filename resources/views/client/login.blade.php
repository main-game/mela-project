@extends('layouts.index')
@section('content')
@section('page-topic','Login')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
    <div class="container m-t-100">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link" >Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body" style="margin-top: 20px">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center" style="margin-top: 20px">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <li class="t-center m-b-13">
                                                <a href="#"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                                                &nbsp;
                                                <a href="#"><i class="fab fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
                                                &nbsp;
                                                <a href="#"><i class="fab fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
                                            </li>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group" style="margin-top: 50px">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <li class="t-center m-b-13">
                                                <a href="#"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                                                &nbsp;
                                                <a href="#"><i class="fab fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
                                                &nbsp;
                                                <a href="#"><i class="fab fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
                                            </li>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('js/login.js')}}"></script>
@endsection