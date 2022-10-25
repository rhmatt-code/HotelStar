@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="uk-section uk-section-muted" uk-height-viewport>
    @if(session('error'))
    <div class="UIkit.notification({message: 'Notification message'})">
        <script>
            UIkit.notification({
            message: '<b>Oops!</b> {{session('error')}}',
            status: 'danger',
            pos: 'top-center',
            timeout: 5000
     });
        </script>
    </div>
    @endif
    <div class="uk-height-1-1 uk-flex uk-flex-center uk-flex-middle uk-margin uk-margin-small-top uk-container">
        <div class="uk-card uk-border-rounded uk-box-shadow-large uk-card-body uk-animation-slide-left uk-width-xlarge uk-card-default">
            <h1 class="uk-card-title uk-text-center">Hotel <strong>Star</strong></h1>
            <form action="store" id="login-form" method="POST">
                @csrf
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="user"></span>
                        <input class="uk-input uk-form-large" name="email" type="email" placholder="Email">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="lock"></span>
                        <input class="uk-input uk-form-large" name="password" type="password" placholder="Password">
                    </div>
                </div>
                <div class="uk-margin">
                    <button id="login-button" class="uk-button uk-button-secondary uk-width-1-2 uk-button-large uk-align-center">Login</button>
                </div>
                <div class="uk-margin">
                    <p class="uk-text-default uk-text-center">Not have account yet? <a href="register"> Register Now</a></p>
                    <p class="uk-text-default uk-text-center">Visitor? Go <a href="register">Home </a></p>
                </div>
            </form>
            <div id="spinner" uk-spinner="ratio: 2" class="uk-position-center uk-hidden"></div>
        </div>
    </div>
    </div>
</div>


@endsection