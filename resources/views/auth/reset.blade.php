@extends('layouts.thumb')
@section('css')

<link rel="stylesheet"
        href="{{ URL::To('public/assets/icons-350665ef.css') }}" />

<link rel="stylesheet"
        href="{{ URL::To('public/assets/login-b6b54c37.css') }}" />
        <link rel="stylesheet"
        href="{{ URL::To('public/assets/banner-app-upsell-62ab7e10.css') }}" />
        


@endsection
@section('content')

 <div class="wrapper content reset-password-wrapper">
    <div class="dynamic-row">

        <h1 class="title-wrapper">
                            Reset
                        your password
        </h1>

        <div class="box">
                        
<form id="reset-password" name="reset-password" method="post" action="https://www.thumbtack.com/reset-password" accept-charset="UTF-8">
                <fieldset>
                    <div class="form-field">
                        <label for="email">What's your email address?</label><input id="email" name="email" type="email" tabindex="100" placeholder="user@example.com" />
                    </div>
                    <p class="body-text">
                        When you click the button below, we'll send an email to
                        the provided email address with instructions for
                                                    choosing a new
                                                password.
                    </p>
                </fieldset>
                <fieldset>
                <a href="" class="tp-button" tabindex="101">Reset Your Password</a>

                </fieldset>
            </form>

        </div>
    </div>
</div>
<div class="wrapper footer footer-wrapper">
    <div class="footer-copyright">
        <p class="copyright">
            &copy; Thumbtack, Inc. All Rights Reserved &bull;
            <a href="https://www.thumbtack.com/privacy" target="_blank">Privacy Policy</a> &bull;
            <a href="https://www.thumbtack.com/terms" target="_blank">Terms of Use</a>
        </p>
    </div>
</div>
@endsection
