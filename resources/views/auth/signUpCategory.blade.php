@extends('layouts.thumb')
@section('css')
<link rel="stylesheet"
        href="{{ URL::To('public/assets/choose-account-86dae63d.css') }}" />
@endsection
@section('content')

<choose-account>

        <div class="choose-account">
            <div class="tp-wrap-snap">
                <h2 class="choose-account__heading tp-heading-3">Sign up on Thumbtack</h2>
                <div class="choose-account__wrap">
                    <div class="choose-account__path"
    style="background-image: url({{ URL::to('public/assets/img/cta-bg-13ec3859.jpg')}}"
                        >
                        <div class="choose-account__path__text tp-color--white">
                            <h4 class="choose-account__path__title tp-heading-4">
                                I want to grow my business
                            </h4>
                            <p>
                                Respond to customer requests and get hired
                            </p>
                        </div>
                        <a href="{{URL::to('pro')}}"
                            class="tp-button tp-button--full tp-button--large">
                            Sign Up To Hire
                        </a>
                    </div>
                    <div class="choose-account__or tp-heading-5">
                        or
                    </div>
                    <div class="choose-account__path">
                        <div class="choose-account__path__text">
                            <h4 class="choose-account__path__title tp-heading-4">
                                I want to hire professionals
                            </h4>
                            <p>
                                Get introduced to the right pros for your projects
                            </p>
                        </div>
                        <a href="{{URL::to('customerHire')}}"
                            class="tp-button tp-button--full tp-button--large">
                            Join As a Pro
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
    <subhero>
    <div class="subhero">
        <div class="tp-wrap-snap">
            <div class="tp-grid tp-grid--center">
                <div class="tp-col tp-col--12 tp-col--sm-10 tp-col--md-8">
                                            <h2 class="subhero__title tp-heading-3">Already have an account?</h2>
                            <div class="subhero__cta">
                            <a href="{{URL::to('login')}}" class="tp-button tp-button--large">
                                Log in
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</subhero>

    </choose-account>
@endsection
