@extends('layouts.master')

@section('title', 'Register')

@section('content')
<div class="uk-section uk-section-muted" uk-height-viewport>
    <div class="uk-height-1-1 uk-flex uk-flex-center uk-flex-middle uk-margin uk-margin-small-top uk-container">
        <div class="uk-card uk-border-rounded uk-box-shadow-large uk-card-body uk-animation-slide-left uk-width-xlarge uk-card-default">
            <h1 class="uk-card-title uk-text-center">Welcome to Fashion Shop</h1>
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
            <div id="spinner" uk-spinner="ratio: 2" class="uk-position-center uk-hidden"></div>
        </div>
    </div>
    </div>
</div>


@endsection