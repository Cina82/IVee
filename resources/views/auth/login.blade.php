@extends('layouts.thumb')


@section('css')
<link rel="stylesheet"
        href="{{URL::to('public/assets/login-a8ada3b9.css')}}" />

    <link rel="stylesheet"
        href="{{URL::to('public/assets/facebook-login-button-3bfabb7e.css')}}" />
@endsection
@section('content')


  <login class="LoginWrap">
        <div class="Login">
            <h1 class="Login-title tp-heading-3">
                                    Welcome back
                            </h1>

            <form action="{{URL::to('login')}}"
                method="POST"
                accept-charset="UTF-8"
                class="Login-formContainer"
                ng-cloak
                schema="loginSchema"
                schema-assign="EmptySchema"
                schema-yields="loginModel"
                schema-cache-id="loginPage"
                ng-submit="deepValidate() || preventSubmit($event)" >

                {{ csrf_field() }}
                
                
                <input-text
                    id="login-email"
                    input-text-label="Email address" 
                    theme-standalone-label>

                    <input
                        class="tp-text-input tp-text-input--large"
                        type="email"
                        name="email"
                        auto-focus
                        event-track="login/clicked email field"
                        event-track-on="click"
                        ng-model="loginModel.email"
                        ng-init="loginModel.email = ''"
                        schema="loginSchema.email"
                        schema-assign="EmailSchema" />
                </input-text>

                
                <input-text
                    id="login-password"
                    input-text-label="Password" 
                    theme-standalone-label>

                    <input
                        class="tp-text-input tp-text-input--large"
                        type="password"
                        name="password"
                        event-track="login/clicked password field"
                        event-track-on="click"
                        ng-model="loginModel.password"
                        schema="loginSchema.password"
                        schema-assign="PasswordSchema" />
                </input-text>

                <p class="tp-form-note tp-form-note--bad-news"
                    ng-repeat="error in $validationErrors"
                    ng-bind="error">
                </p>

                <div class="Login-secondaryElements">
                   
                    <input-checkbox input-checkbox-label="Remember me">
                        <input type="checkbox"
                            name="remember_me"
                                                        schema="loginSchema.remember"
                            schema-assign="EmptySchema"
                            schema-default="true"
                            ng-model="loginModel.remember">
                    </input-checkbox>
                     <a class="tp-text-3--static" href="{{URL::to('reset')}}"
                        ng-click="resetUsersPassword(loginModel.email)">

                        Forgot password?
                    </a>
                    
                </div>

                <button
                    type="submit"
                    class="tp-button tp-button--large tp-button--full">
                    Log In
                </button>

                <div class="Login-separator">or</div>

                <a href="" class="tp-button tp-button--large tp-button--full" style="background-color:#DB4437 !important; border-color:#DB4437 !important; ">
                   Login With Google
                </a>

                <div class="Login-facebookDisclaimer tp-text-3--static">
                    We'll never post without permission.
                </div>
            </form>

                            <div class="Login-noAccountLink">
                    Don't have an account?
                    <a href="{{URL::to('choose-account')}}">Sign up.</a>
                </div>
                    </div>
    </login>

    <script type="text/template" id="template-reset-password-form">
        <form
            action="/reset-password"
            method="POST"
            accept-charset="UTF-8"
            class="Login-resetPasswordForm">

            <input type="email" name="email" />
        </form>
    </script>
@endsection
