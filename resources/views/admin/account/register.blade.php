@extends('admin.layouts.master')

@section('title', 'Register')

@section('content')
@include('admin.layouts.navbar')

<div class="content-padder content-background">
    <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <strong>Add Account Resepsionis</strong>
                                </div>
                                <div class="uk-card-body">
                                <form action="register" id="register-form" method="POST">
                                    @csrf
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="user"></span>
                                            <input class="uk-input uk-form-large" name="name" type="text">
                                        </div>
                                        @error('name')
                                            <div class="uk-alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="mail"></span>
                                            <input class="uk-input uk-form-large" name="email" type="email">
                                        </div>
                                        @error('email')
                                            <div class="uk-alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="phone"></span>
                                            <input class="uk-input uk-form-large" name="phone" type="text">
                                        </div>
                                        @error('phone')
                                            <div class="uk-alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <textarea class="uk-textarea uk-form-default" name="address" placeholder="Input your Address"></textarea>
                                        </div>
                                        @error('address')
                                            <div class="uk-alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="calendar"></span>
                                            <input class="uk-input uk-form-large" name= "dateofbirth" type="date">
                                        </div>
                                        @error('dateofbirth')
                                            <div class="uk-alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="lock"></span>
                                            <input class="uk-input uk-form-large" name="password" type="password">
                                        </div>
                                        @error('password')
                                            <div class="uk-alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="uk-margin">
                                        <button id="login-button" class="uk-button uk-button-secondary uk-width-1-2 uk-button-large uk-align-center" href="login">Register</button>
                                    </div>
                                    <div class="uk-margin">
                                        <p class="uk-text-default uk-text-center">Already Have an Account ? <a href="login"> Login now</a></p>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


@endsection