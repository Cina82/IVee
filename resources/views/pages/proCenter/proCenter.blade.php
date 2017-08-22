@extends('layouts.thumb')
@section('css')
<link rel="stylesheet" href="{{URL::to('public/assets/styles.css')}}" />
<link rel="stylesheet" href="{{URL::to('public/assets/procss.css')}}" />
<link rel="stylesheet" href="{{URL::to('public/assets/default.min.css')}}" />

<link rel="stylesheet" href="{{URL::to('public/assets/st1.css')}}" />
 <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

   

 <script type="text/javascript" src="{{URL::to('public/assets/jquery-migrate.min.js')}}"></script>
 <script type="text/javascript" src="{{URL::to('public/assets/jquery1.1.js')}}"></script>
 <link rel="alternate" type="application/json+oembed" href="https://www.thumbtack.com/pro-center/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.thumbtack.com%2Fpro-center%2F" />
@endsection
@section('content')
 <div class="site-inner">
            <div class="content-sidebar-wrap">
                <main class="content" id="genesis-content">
                    <div class="map__container">
                        <div class="tp-wrap">
                            <div class="tp-grid tp-grid--middle">
                                <div class="tp-col tp-col--12 tp-col--md-5" dir="rtl">
                                    <h1 class="tp-heading-2 map__title">Thumbtack customers request more than 30,000 .jobs a day</h1>
                                    <a href="https://www.thumbtack.com/pro-center/get-hired-guide/" class="tp-button tp-button--full tp-button--large map__button tp-margin-top--triple tp-display--block--large tp-display--block--large-plus">Here’s how to get hired</a>
                                    <p class="tp-text-3--static tp-color--muted map__subtitle-large tp-display--block--large tp-display--block--large-plus"> Not a Thumbtack pro yet? <a href="{{URL::to('choose-account')}}" class="tp-link--underline tp-link--muted">Sign up.</a></p>
                                </div>
                                <div class="tp-col tp-col--12 tp-col--md-7 map__svg">

                                    <svg width="100%" viewBox="0 0 1020 570" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <defs>
                                            <filter x="-5.9%" y="-14.4%" width="111.8%" height="137.8%" filterUnits="objectBoundingBox" id="bubble-fill">
                                                <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                                <feGaussianBlur stdDeviation="2.5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                                <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.152315444 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                                <feMerge>
                                                    <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                            </filter>
                                            <symbol id="chatbubble">
                                                <g filter="url(#bubble-fill)">
                                                    <path d="M9.4080761,11.7315272 L116.788255,11.7315272 L125.564925,0.963783034 L134.313763,11.7315272 L242.506668,11.7315272 L242.506668,11.7315272 C247.173863,11.7315272 250.957372,15.5150363 250.957372,20.1822314 L250.957372,69.9778674 L250.957372,69.9778674 C250.957372,74.6450625 247.173863,78.4285716 242.506668,78.4285716 L9.4080761,78.4285716 L9.4080761,78.4285716 C4.74088104,78.4285716 0.957371887,74.6450625 0.957371887,69.9778674 L0.957371887,20.1822314 L0.957371887,20.1822314 C0.957371887,15.5150363 4.74088104,11.7315272 9.4080761,11.7315272 Z" id="Combined-Shape"></path>
                                                </g>
                                            </symbol>
                                        </defs>

                                        <g id="Page-1" fill="none" fill-rule="evenodd">
                                            <g id="LP-Desktop-Copy-27">
                                                <g id="Group-7" fill-rule="nonzero">
                                                    <image xlink:href="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/us-map.png" x="0" y="0" height="491px" width="932px" />
                                                </g>
                                                <g id="Group-20">
                                                    <g id="Group-12" transform="translate(121 32)">
                                                        <circle id="Dot-35" fill="#EB7364" cx="105.00418" cy="247" r="6.5" />
                                                        <circle id="Dot-34" fill="#5FCEA3" cx="558.70811" cy="93.19858" r="6.5" />
                                                        <circle id="Dot-33" fill="#F8DB54" cx="466.28625" cy="56.79965" r="6.5" />
                                                        <circle id="Dot-32" fill="#5FCEA3" cx="696.70393" cy="142.1951" r="6.5" />
                                                        <circle id="Dot-31" fill="#EB7364" cx="706.66883" cy="220.39716" r="6.5" />
                                                        <circle id="Dot-30" fill="#FAA74D" cx="694.00418" cy="247.2234" r="6.5" />
                                                        <circle id="Dot-29" fill="#F8DB54" cx="206.28625" cy="327.79964" r="6.5" />
                                                        <circle id="Dot-28" fill="#FAA74D" cx="40.00418" cy="147.2234" r="6.5" />
                                                        <circle id="Dot-27" fill="#FAA74D" cx="320.00418" cy="27.2234" r="6.5" />
                                                        <circle id="Dot-26" fill="#FAA74D" cx="534.00418" cy="97.2234" r="6.5" />
                                                        <circle id="Dot-25" fill="#FAA74D" cx="634.00418" cy="327.2234" r="6.5" />
                                                        <circle id="Dot-24" fill="#FAA74D" cx="14.00418" cy="357.2234" r="6.5" />
                                                        <circle id="Dot-23" fill="#FAA74D" cx="714.00418" cy="97.2234" r="6.5" />
                                                        <circle id="Dot-22" fill="#5FCEA3" cx="546.66383" cy="259.15103" r="6.5" />
                                                        <circle id="Dot-21" fill="#5FCEA3" cx="368.70811" cy="33.19858" r="6.5" />
                                                        <circle id="Dot-20" fill="#5FCEA3" cx="418.70811" cy="283.19858" r="6.5" />
                                                        <circle id="Dot-19" fill="#5FCEA3" cx="96.70393" cy="282.1951" r="6.5" />
                                                        <circle id="Dot-18" fill="#5FCEA3" cx="756.70393" cy="102.1951" r="6.5" />
                                                        <circle id="Dot-17" fill="#FAA74D" cx="546.66883" cy="60.39716" r="6.5" />
                                                        <circle id="Dot-16" fill="#EB7364" cx="566.66883" cy="320.39716" r="6.5" />
                                                        <circle id="Dot-15" fill="#EB7364" cx="116.66883" cy="50.39716" r="6.5" />
                                                        <circle id="Dot-14" fill="#EB7364" cx="367.00418" cy="190" r="6.5" />
                                                        <circle id="Dot-13" fill="#EB7364" cx="186.66883" cy="430.39716" r="6.5" />
                                                        <circle id="Dot-12" fill="#F8DB54" cx="95.48605" cy="6" r="6.5" />
                                                        <circle id="Dot-11" fill="#F8DB54" cx="476.28625" cy="366.79964" r="6.5" />
                                                        <circle id="Dot-10" fill="#F8DB54" cx="656.28625" cy="106.79964" r="6.5" />
                                                        <circle id="Dot-9" fill="#F8DB54" cx="86.28625" cy="206.79964" r="6.5" />
                                                        <circle id="Dot-8" fill="#536EC9" cx="766.25493" cy="42.61348" r="6.5" />
                                                        <circle id="Dot-7" fill="#536EC9" cx="646.25493" cy="362.61347" r="6.5" />
                                                        <circle id="Dot-6" fill="#F8DB54" cx="296.25493" cy="362.61347" r="6.5" />
                                                        <circle id="Dot-5" fill="#536EC9" cx="156.25493" cy="232.61347" r="6.5" />
                                                        <circle id="Dot-4" fill="#536EC9" cx="466.25493" cy="103.61347" r="6.5" />
                                                        <circle id="Dot-3" fill="#F8DB54" cx="6.25493" cy="332.61347" r="6.5" />
                                                        <circle id="Dot-1" fill="#536EC9" cx="66.25493" cy="32.61348" r="6.5" />
                                                        <g id="Message-1">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-1" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="25.232" y="17.3919678">Ryan L. needs a </tspan>
                                                                    <tspan x="69.164" y="45.3919678">cleaner</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-3">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-3" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="9.524" y="17.3919678">Jessica G. needs a </tspan>
                                                                    <tspan x="32.492" y="45.3919678">photographer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-4">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-4" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="3.248" y="17.3919678">Stephanie C. needs </tspan>
                                                                    <tspan x="65.168" y="45.3919678">a mover</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-5">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-5" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="22.964" y="17.3919678">Nate H. needs a </tspan>
                                                                    <tspan x="23.132" y="45.3919678">personal trainer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-6">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-6" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="19.904" y="17.3919678">Jenny P. needs a </tspan>
                                                                    <tspan x="71.3" y="45.3919678">caterer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-7">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-7" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="18.56" y="17.3919678">Claire E. needs a </tspan>
                                                                    <tspan x="51.692" y="45.3919678">handyman</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-8">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-8" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="30.512" y="17.3919678">Eric S. needs a </tspan>
                                                                    <tspan x="8.504" y="45.3919678">general contractor</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-9">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-9" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="7.88" y="17.3919678">Maddie B. needs a </tspan>
                                                                    <tspan x="48.956" y="45.3919678">landscaper</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-10">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-10" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="19.976" y="17.3919678">Elissa K. needs a </tspan>
                                                                    <tspan x="10.028" y="45.3919678">massage therapist</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-11">
                                                            <g transform="translate(4)" class="map__bubble-wrapper">
                                                                <use id="Bubble-11" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="22.628" y="17.3919678">Jeff A. needs an </tspan>
                                                                    <tspan x="34.592" y="45.3919678">animal trainer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-12">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-12" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="20.624" y="17.3919678">Olivia F. needs a </tspan>
                                                                    <tspan x="35.66" y="45.3919678">makeup artist</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-13">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-13" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="16.388" y="17.3919678">Tom W. needs an </tspan>
                                                                    <tspan x="48.872" y="45.3919678">accountant</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-14">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-14" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="28.088" y="17.3919678">Alex F. needs a </tspan>
                                                                    <tspan x="62.504" y="45.3919678">plumber</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-15">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-15" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="27.2" y="17.3919678">Matt L. needs a </tspan>
                                                                    <tspan x="33.236" y="45.3919678">steam cleaner</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-16">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-16" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="16.4" y="17.3919678">George H. needs </tspan>
                                                                    <tspan x="61.148" y="45.3919678">a painter</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-17">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-17" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="29.804" y="17.3919678">Will R. needs a </tspan>
                                                                    <tspan x="48.98" y="45.3919678">DJ and MC</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-18">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-18" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="20.796" y="21">Lauren D. needs a </tspan>
                                                                    <tspan x="0" y="45">lawncare professional</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-19">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-18" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="24.08" y="17.3919678">Kyle M. needs a </tspan>
                                                                    <tspan x="40.352" y="45.3919678">photo booth</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-20">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-18" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="23.672" y="17.3919678">Andrea I. needs </tspan>
                                                                    <tspan x="36.908" y="45.3919678">an electrician</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-21">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-18" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="16.988" y="17.3919678">Andrew R. needs </tspan>
                                                                    <tspan x="20.72" y="45.3919678">computer repair</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-22">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-22" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="22.532" y="17.3919678">Ellen A. needs a </tspan>
                                                                    <tspan x="35.852" y="45.3919678">dog groomer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-23">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-23" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="12.62" y="17.3919678">Melanie W. needs </tspan>
                                                                    <tspan x="32.528" y="45.3919678">transportation</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-24">
                                                            <g transform="translate(4)" class="map__bubble-wrapper">
                                                                <use id="Bubble-24" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="28.94" y="17.3919678">Emily F. needs </tspan>
                                                                    <tspan x="66.644" y="45.3919678">a roofer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-25">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-25" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="30.812" y="17.3919678">Lucas T. needs </tspan>
                                                                    <tspan x="28.124" y="45.3919678">a junk remover</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-26">
                                                            <g transform="translate(4)" class="map__bubble-wrapper">
                                                                <use id="Bubble-26" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="9.248" y="17.3919678">Audrey H. needs a </tspan>
                                                                    <tspan x="14.504" y="45.3919678">wedding officiant</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-27">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-27" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="6.884" y="17.3919678">Jeremy M. needs a </tspan>
                                                                    <tspan x="35.276" y="45.3919678">personal chef</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-28">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-28" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="30.5" y="17.3919678">Joe E. needs a </tspan>
                                                                    <tspan x="33.56" y="45.3919678">fence installer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-29">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-29" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="21.336" y="21">Vickie K. needs a </tspan>
                                                                    <tspan x="0" y="45">flooring professional</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-30">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-30" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="0" y="19">Maurice S. needs an </tspan>
                                                                    <tspan x="18.204" y="47">HVAC technician</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-31">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-31" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="0" y="21">Colleen N. needs an </tspan>
                                                                    <tspan x="22.44" y="49">outdoor cleaner</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-32">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-32" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="11.312" y="17.3919678">Jorge B. needs an </tspan>
                                                                    <tspan x="39.644" y="45.3919678">exterminator</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-33">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-33" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="23.552" y="17.3919678">Alan G. needs a </tspan>
                                                                    <tspan x="34.88" y="45.3919678">videographer</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-34">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-34" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="4.04" y="17.3919678">Whitney D. needs a </tspan>
                                                                    <tspan x="20.804" y="45.3919678">dance instructor</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="Message-35">
                                                            <g class="map__bubble-wrapper">
                                                                <use id="Bubble-35" xlink:href="#chatbubble" class="map__bubble" />
                                                                <text class="map__bubble-text" text-anchor="start">
                                                                    <tspan x="10.652" y="17.3919678">Jenelle K. needs a </tspan>
                                                                    <tspan x="34.028" y="45.3919678">piano teacher</tspan>
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>

                                        </g>
                                    </svg>
                                    <a href="https://www.thumbtack.com/pro-center/get-hired-guide/" class="tp-button tp-button--full tp-button--large map__button tp-display--block--small tp-display--block--medium ">Here’s how to get hired</a>
                                    <p class="tp-text-3--static tp-color--muted map__subtitle tp-display--block--small tp-display--block--medium"> Not a Thumbtack pro yet? <a href="../choose-account" class="tp-link--underline tp-link--muted ">Sign up.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-cta-block">
                        <div class="tp-wrap">
                            <div class="tp-grid">

                                <div class="tp-col tp-col--12 tp-col--md-4 home-cta" dir="rtl">
                                    <a href="https://www.thumbtack.com/pro-center/next-steps/" class="home-cta__wrapper">
                                        <h2 class="tp-heading-4 tp-weight--demi tp-margin-bottom">Next Steps</h2>
                                        <p class="tp-text-1--static home-cta__text">You got your first job. Now get the next 100.</p>
                                    </a>
                                </div>

                                <div class="tp-col tp-col--12 tp-col--md-4 home-cta" dir="rtl">
                                    <a href="https://www.thumbtack.com/pro-center/faq/" class="home-cta__wrapper">
                                        <h2 class="tp-heading-4 tp-weight--demi tp-margin-bottom">FAQ</h2>
                                        <p class="tp-text-1--static home-cta__text">Quick answers to common questions.</p>
                                    </a>
                                </div>

                                <div class="tp-col tp-col--12 tp-col--md-4 home-cta" dir="rtl">
                                    <a href="https://help.thumbtack.com/" class="home-cta__wrapper">
                                        <h2 class="tp-heading-4 tp-weight--demi tp-margin-bottom">Help Center</h2>
                                        <p class="tp-text-1--static home-cta__text">Troubleshoot issues with your account.</p>
                                    </a>
                                </div>

                            </div>
                            <!-- .tp-grid -->
                        </div>
                        <!-- .tp-wrap -->
                    </div>
                    <!-- .home-cta-block -->

                    <div class="pro-tips">
                        <div class="tp-wrap">

                            <div class="tp-grid" dir="rtl">
                                <div class="tp-col tp-col--12">
                                    <a href="stories/index.html">
                                        <h2 class="tp-heading-3 tp-weight--demi pro-tips__title">
                        Pro Tips and Stories                    </h2>
                                    </a>
                                </div>
                                <div class="tp-col tp-col--12">
                                    <a href="stories/index.html">
                                        <p class="tp-text-1--static tp-margin-bottom--triple pro-tips__description">
                                            They’ve grown their business with Thumbtack. Find out how. </p>
                                    </a>
                                </div>
                            </div>

                            <div class="tp-grid articles" dir="rtl">

                                <article id="post-429" class="tp-col tp-col--12 tp-col--md-6 blog-post__wrapper post-332 page type-page status-publish entry" itemscope="" itemtype="http://schema.org/CreativeWork">
                                    <a href="https://www.thumbtack.com/pro-center/stories/what-customers-really-want/">
                                        <div class="blog-post__content">
                                            <h2 class="tp-text-3--static tp-weight--demi tp-margin-bottom tp-text--caps blog-post__upper-text">

                Pro Tips
            </h2>

                                            <img width="598" height="376" src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/what-customers-say-598x376.jpg" class="attachment-rp4wp-thumbnail-post size-rp4wp-thumbnail-post wp-post-image" alt="what-customers-say" />
                                            <h2 class="tp-heading-4 tp-margin-bottom blog-post__title">
                What Customers Really Want: 4 Secrets to Getting Hired on Thumbtack            </h2>

                                        </div>
                                    </a>
                                </article>

                                <article id="post-456" class="tp-col tp-col--12 tp-col--md-6 blog-post__wrapper post-332 page type-page status-publish entry" itemscope="" itemtype="http://schema.org/CreativeWork">
                                    <a href="https://www.thumbtack.com/pro-center/stories/cold-calling-to-mixing-the-perfect-quote/">
                                        <div class="blog-post__content">
                                            <h2 class="tp-text-3--static tp-weight--demi tp-margin-bottom tp-text--caps blog-post__upper-text">

                Pro Interviews · Rosa and Ian · Bartending
            </h2>

                                            <img width="598" height="376" src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Ian-and-Rosa-Bartenders-598x376.png" class="attachment-rp4wp-thumbnail-post size-rp4wp-thumbnail-post wp-post-image" alt="ian-and-rosa-bartending" />
                                            <h2 class="tp-heading-4 tp-margin-bottom blog-post__title">
                From Cold Calling to Mixing the Perfect Quote            </h2>

                                        </div>
                                    </a>
                                </article>

                                <div class="tp-wrap">
                                    <div class="tp-grid">
                                        <div class="tp-col tp-col--12">
                                            <div class="tp-button-row tp-button-row--center">

                                                <a href="{{URL::to('stories')}}" class="tp-button tp-button--large tp-button--tertiary pro-tips__cta">See all stories</a> </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="top-pro">
                        <div class="tp-wrap tp-margin-top--triple">
                            <div class="tp-grid top-pro__wrapper">
                                <div class="tp-col tp-col--12 tp-col--md-6 tp-col--sm-12 top-pro__image-container" dir="rtl">
                                    <a href="https://www.thumbtack.com/top-pro/">
                                        <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/top-pros-image.png" alt="Become a Top Pro" class="tp-img" width="446" height="318" />
                                    </a>
                                </div>
                                <div class="tp-col tp-col--12 tp-col--md-4 tp-col--sm-12 tp-col--offset-1 top-pro__content" dir="rtl">
                                    <a href="https://www.thumbtack.com/top-pro/">
                                        <span class="top-pro__ribbon tp-text-3--static tp-weight--demi">Top Pro</span>
                                        <h1 class="tp-heading-3 tp-weight--demi tp-margin-top--double top-pro__title">Become a Top Pro</h1>
                                    </a>
                                    <p class="tp-text-1--static tp-margin-top--double tp-margin-bottom--double">
                                        Show customers that you’re the best in the business and be listed as a Top Pro.
                                    </p>
                                    <div class="tp-weight--bold">
                                        <a href="https://www.thumbtack.com/top-pro/" class="tp-heading-5">Find out how</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
@endsection
@section('script')

<script src="{{URL::to('public/assets/hoverIntent.min.js')}}"></script>
<script src="{{URL::to('public/assets/superfish.js')}}"></script>
<script src="{{URL::to('public/assets/skip-links.js')}}"></script>
<script src="{{URL::to('public/assets/procenter-signal.js')}}"></script>
<script src="{{URL::to('public/assets/wp-embed.min.js')}}"></script>
<script src="{{URL::to('public/assets/jquery.js')}}"></script>

@endsection


                        
