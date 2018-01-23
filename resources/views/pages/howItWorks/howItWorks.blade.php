@extends('layouts.thumb')

@section('css')

<link rel="stylesheet" href="{{URL::to('public/assets/app.js')}}"/>
<style>
        @font-face {
            font-family: Avenir;
            font-weight: 400;
            src: url(https://thumbprint.thumbtack.com/asset/font/721263/2cd55546-ec00-4af9-aeca-4a3cd186da53.woff2) format("woff2"), url(https://thumbprint.thumbtack.com/asset/font/721263/1e9892c0-6927-4412-9874-1b82801ba47a.woff) format("woff")
        }
        @font-face {
            font-family: Avenir;
            font-weight: 500;
            src: url(https://thumbprint.thumbtack.com/asset/font/721275/627fbb5a-3bae-4cd9-b617-2f923e29d55e.woff2) format("woff2"), url(https://thumbprint.thumbtack.com/asset/font/721275/f26faddb-86cc-4477-a253-1e1287684336.woff) format("woff")
        }
        @font-face {
            font-family: Avenir;
            font-weight: 600;
            src: url(https://thumbprint.thumbtack.com/asset/font/721269/aad99a1f-7917-4dd6-bbb5-b07cedbff64f.woff2) format("woff2"), url(https://thumbprint.thumbtack.com/asset/font/721269/91b50bbb-9aa1-4d54-9159-ec6f19d14a7c.woff) format("woff")
        }
        html {
            box-sizing: border-box
        }
        
        *,
        :after,
        :before {
            box-sizing: inherit
        }
        
        .tp-button,
        .tp-col,
        .tp-grid {
            box-sizing: border-box
        }
        
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        ul {
            margin: 0;
            padding: 0
        }
        
        ul {
            list-style: none
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 400;
            font-size: inherit
        }
        
        img {
            font-style: italic
        }
        
        [type=text]:active,
        [type=text]:focus,
        [type=password]:active,
        [type=password]:focus,
        [type=email]:active,
        [type=email]:focus,
        [type=number]:active,
        [type=number]:focus,
        [type=search]:active,
        [type=search]:focus,
        [type=url]:active,
        [type=url]:focus {
            cursor: text;
            outline: 0
        }
        
        a {
            text-decoration: none
        }
        
        a:active,
        a:hover {
            outline: 0
        }
        
        b {
            font-weight: 600
        }
        
        button[disabled],
        html input[disabled] {
            cursor: default
        }
        
        button {
            text-transform: none
        }
        
        button,
        input {
            font-family: inherit;
            font-size: 100%;
            margin: 0
        }
        
        button::-moz-focus-inner {
            padding: 0;
            border: 0
        }
        
        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }
        
        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer
        }
        
        [required] {
            box-shadow: none
        }
        
        body {
            margin: 0;
            color: #4e4d4d;
            font-family: Avenir, Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        
        .tp-link,
        .tp-link:active,
        a,
        a:active {
            color: #3f93f3
        }
        
        .tp-heading-1 {
            font-size: 32px;
            line-height: 1.3;
            font-weight: 500
        }
        
        @media (min-width:700px) {
            .tp-heading-1 {
                font-size: 48px;
                line-height: 1.1;
                font-weight: 500
            }
        }
        
        .tp-heading-2 {
            font-size: 32px;
            line-height: 1.3;
            font-weight: 500
        }
        
        @media (min-width:700px) {
            .tp-heading-2 {
                font-size: 40px;
                line-height: 1.1;
                font-weight: 500
            }
        }
        
        .tp-heading-3 {
            font-size: 24px;
            line-height: 1.5;
            font-weight: 500
        }
        
        @media (min-width:700px) {
            .tp-heading-3 {
                font-size: 32px;
                line-height: 1.3;
                font-weight: 500
            }
        }
        
        .tp-heading-4 {
            font-size: 20px;
            line-height: 1.6;
            font-weight: 500
        }
        
        @media (min-width:700px) {
            .tp-heading-4 {
                font-size: 24px;
                line-height: 1.5;
                font-weight: 500
            }
        }
        
        .tp-heading-5 {
            font-size: 16px;
            line-height: 1.6;
            font-weight: 500
        }
        
        @media (min-width:700px) {
            .tp-heading-5 {
                font-size: 20px;
                line-height: 1.5;
                font-weight: 500
            }
        }
        
        .tp-heading-6 {
            font-size: 14px;
            line-height: 1.6;
            font-weight: 500
        }
        
        @media (min-width:700px) {
            .tp-heading-6 {
                font-size: 16px;
                line-height: 1.6;
                font-weight: 500
            }
        }
        
        .tp-link,
        a {
            fill: #3f93f3;
            cursor: pointer
        }
        
        .tp-link:hover,
        a:hover {
            color: #6faef6
        }
        
        .tp-link--muted {
            color: #8d9494;
            fill: #8d9494;
            cursor: pointer
        }
        
        .tp-link--muted:active {
            color: #8d9494
        }
        
        .tp-link--muted:hover {
            color: #3f93f3
        }
        
        .tp-button,
        .tp-button:active {
            color: #fff
        }
        
        .tp-button {
            display: inline-block;
            vertical-align: middle;
            white-space: nowrap;
            font-family: inherit;
            cursor: pointer;
            margin: 0;
            line-height: 38px;
            border-width: 1px;
            border-style: solid;
            font-size: 14px;
            font-weight: 500;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border-radius: 4px;
            height: 38px;
            padding: 0 24px;
            background-color: #3f93f3;
            border-color: #3f93f3;
            transition: all .2s
        }
        
        .tp-button:focus,
        .tp-button:hover {
            background-color: #287ddd;
            color: #fff
        }
        
        .tp-button--full {
            width: 100%;
            text-align: center
        }
        
        .tp-button--small {
            font-size: 11px;
            font-weight: 500;
            border-radius: 2px;
            line-height: 28px;
            height: 28px;
            padding: 0 16px
        }
        
        .tp-button--large {
            font-size: 16px;
            font-weight: 500;
            border-radius: 4px;
            line-height: 46px;
            height: 48px;
            padding: 0 32px
        }
        
        .tp-button--icon {
            line-height: 1.4
        }
        
        .tp-button--icon .tp-icon {
            vertical-align: sub
        }
        
        .tp-button[disabled],
        .tp-button[disabled]:active,
        .tp-button[disabled]:focus,
        .tp-button[disabled]:hover,
        .tp-button[disabled]:visited {
            cursor: default;
            background-color: #ddd;
            border-color: #ddd
        }
        
        .tp-button[disabled]:active.tp-button--bad-news,
        .tp-button[disabled]:active.tp-button--secondary,
        .tp-button[disabled]:active.tp-button--tertiary,
        .tp-button[disabled]:focus.tp-button--bad-news,
        .tp-button[disabled]:focus.tp-button--secondary,
        .tp-button[disabled]:focus.tp-button--tertiary,
        .tp-button[disabled]:hover.tp-button--bad-news,
        .tp-button[disabled]:hover.tp-button--secondary,
        .tp-button[disabled]:hover.tp-button--tertiary,
        .tp-button[disabled]:visited.tp-button--bad-news,
        .tp-button[disabled]:visited.tp-button--secondary,
        .tp-button[disabled]:visited.tp-button--tertiary {
            background-color: #fff;
            color: #ccc
        }
        
        .tp-text-input {
            transition: border-color .3s;
            width: 100%;
            border: 1px solid #e1e3e3;
            border-radius: 4px;
            padding: 6px 12px;
            vertical-align: middle;
            line-height: 1.5
        }
        
        .tp-text-input--small {
            padding-top: 2px;
            padding-bottom: 2px
        }
        
        .tp-text-input:hover {
            border-color: #bdc4c4
        }
        
        .tp-text-input:focus {
            border-color: #70acf1
        }
        
        .tp-text-input[disabled] {
            background: #fafafa;
            color: #bdc4c4;
            cursor: default
        }
        
        .tp-text-input[disabled]:focus,
        .tp-text-input[disabled]:hover {
            border-color: #e1e3e3
        }
        
        .tp-text-input--large {
            padding-top: 11px;
            padding-bottom: 11px
        }
        
        .tp-input-icon {
            position: relative
        }
        
        .tp-input-icon__icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }
        
        .Hero,
        .tp-input-wrap {
            position: relative
        }
        
        .tp-input-icon--left .tp-text-input {
            padding-left: 40px
        }
        
        .tp-input-icon--left .tp-input-icon__icon {
            left: 16px
        }
        
        .tp-input-icon--right .tp-text-input {
            padding-right: 40px
        }
        
        .tp-input-icon--right .tp-input-icon__icon {
            right: 16px
        }
        
        .tp-grid {
            display: flex;
            flex: 0 1 auto;
            flex-direction: row;
            flex-wrap: wrap;
            margin: -8px
        }
        
        .tp-grid--flush {
            margin: 0
        }
        
        .tp-wrap,
        .tp-wrap-snap {
            margin-left: auto;
            margin-right: auto;
            width: 100%
        }
        
        .tp-margin-bottom,
        .tp-margin-ends {
            margin-bottom: 8px!important
        }
        
        .tp-grid--flush .tp-col {
            padding: 0
        }
        
        .tp-grid--center {
            justify-content: center;
            text-align: center
        }
        
        .tp-grid--top {
            align-items: flex-start
        }
        
        .tp-grid--bottom {
            align-items: flex-end
        }
        
        .tp-col {
            flex: 0 0 auto;
            padding: 8px
        }
        
        .tp-padding-ends,
        .tp-padding-top {
            padding-top: 8px!important
        }
        
        .tp-padding-bottom,
        .tp-padding-ends {
            padding-bottom: 8px!important
        }
        
        .tp-col--1 {
            flex-basis: 8.33333333%;
            max-width: 8.33333333%
        }
        
        .tp-col--2 {
            flex-basis: 16.66666667%;
            max-width: 16.66666667%
        }
        
        .tp-col--3 {
            flex-basis: 25%;
            max-width: 25%
        }
        
        .tp-col--4 {
            flex-basis: 33.33333333%;
            max-width: 33.33333333%
        }
        
        .tp-col--5 {
            flex-basis: 41.66666667%;
            max-width: 41.66666667%
        }
        
        .tp-col--6 {
            flex-basis: 50%;
            max-width: 50%
        }
        
        .tp-col--7 {
            flex-basis: 58.33333333%;
            max-width: 58.33333333%
        }
        
        .tp-col--8 {
            flex-basis: 66.66666667%;
            max-width: 66.66666667%
        }
        
        .tp-col--9 {
            flex-basis: 75%;
            max-width: 75%
        }
        
        .tp-col--10 {
            flex-basis: 83.33333333%;
            max-width: 83.33333333%
        }
        
        .tp-col--11 {
            flex-basis: 91.66666667%;
            max-width: 91.66666667%
        }
        
        .tp-col--12 {
            flex-basis: 100%;
            max-width: 100%
        }
        
        .tp-col--first {
            order: -1
        }
        
        .tp-col--flex {
            flex: 1 auto
        }
        
        @media (min-width:481px) {
            .tp-grid--sm-center {
                justify-content: center;
                text-align: center
            }
            .tp-grid--sm-top {
                align-items: flex-start
            }
            .tp-grid--sm-bottom {
                align-items: flex-end
            }
            .tp-col--sm {
                flex-grow: 1;
                flex-basis: 0;
                max-width: 100%
            }
            .tp-col--sm-1 {
                flex-basis: 8.33333333%;
                max-width: 8.33333333%
            }
            .tp-col--sm-2 {
                flex-basis: 16.66666667%;
                max-width: 16.66666667%
            }
            .tp-col--sm-3 {
                flex-basis: 25%;
                max-width: 25%
            }
            .tp-col--sm-4 {
                flex-basis: 33.33333333%;
                max-width: 33.33333333%
            }
            .tp-col--sm-5 {
                flex-basis: 41.66666667%;
                max-width: 41.66666667%
            }
            .tp-col--sm-6 {
                flex-basis: 50%;
                max-width: 50%
            }
            .tp-col--sm-7 {
                flex-basis: 58.33333333%;
                max-width: 58.33333333%
            }
            .tp-col--sm-8 {
                flex-basis: 66.66666667%;
                max-width: 66.66666667%
            }
            .tp-col--sm-9 {
                flex-basis: 75%;
                max-width: 75%
            }
            .tp-col--sm-10 {
                flex-basis: 83.33333333%;
                max-width: 83.33333333%
            }
            .tp-col--sm-11 {
                flex-basis: 91.66666667%;
                max-width: 91.66666667%
            }
            .tp-col--sm-12 {
                flex-basis: 100%;
                max-width: 100%
            }
            .tp-col--sm-first {
                order: -1
            }
        }
        
        @media (min-width:700px) {
            .tp-grid--md-center {
                justify-content: center;
                text-align: center
            }
            .tp-grid--md-top {
                align-items: flex-start
            }
            .tp-grid--md-bottom {
                align-items: flex-end
            }
            .tp-col--md {
                flex-grow: 1;
                flex-basis: 0;
                max-width: 100%
            }
            .tp-col--md-1 {
                flex-basis: 8.33333333%;
                max-width: 8.33333333%
            }
            .tp-col--md-2 {
                flex-basis: 16.66666667%;
                max-width: 16.66666667%
            }
            .tp-col--md-3 {
                flex-basis: 25%;
                max-width: 25%
            }
            .tp-col--md-4 {
                flex-basis: 33.33333333%;
                max-width: 33.33333333%
            }
            .tp-col--md-5 {
                flex-basis: 41.66666667%;
                max-width: 41.66666667%
            }
            .tp-col--md-6 {
                flex-basis: 50%;
                max-width: 50%
            }
            .tp-col--md-7 {
                flex-basis: 58.33333333%;
                max-width: 58.33333333%
            }
            .tp-col--md-8 {
                flex-basis: 66.66666667%;
                max-width: 66.66666667%
            }
            .tp-col--md-9 {
                flex-basis: 75%;
                max-width: 75%
            }
            .tp-col--md-10 {
                flex-basis: 83.33333333%;
                max-width: 83.33333333%
            }
            .tp-col--md-11 {
                flex-basis: 91.66666667%;
                max-width: 91.66666667%
            }
            .tp-col--md-12 {
                flex-basis: 100%;
                max-width: 100%
            }
            .tp-col--md-first {
                order: -1
            }
        }
        
        @media (min-width:1025px) {
            .tp-grid--lg-center {
                justify-content: center;
                text-align: center
            }
            .tp-grid--lg-top {
                align-items: flex-start
            }
            .tp-grid--lg-bottom {
                align-items: flex-end
            }
            .tp-col--lg {
                flex-grow: 1;
                flex-basis: 0;
                max-width: 100%
            }
            .tp-col--lg-1 {
                flex-basis: 8.33333333%;
                max-width: 8.33333333%
            }
            .tp-col--lg-2 {
                flex-basis: 16.66666667%;
                max-width: 16.66666667%
            }
            .tp-col--lg-3 {
                flex-basis: 25%;
                max-width: 25%
            }
            .tp-col--lg-4 {
                flex-basis: 33.33333333%;
                max-width: 33.33333333%
            }
            .tp-col--lg-5 {
                flex-basis: 41.66666667%;
                max-width: 41.66666667%
            }
            .tp-col--lg-6 {
                flex-basis: 50%;
                max-width: 50%
            }
            .tp-col--lg-7 {
                flex-basis: 58.33333333%;
                max-width: 58.33333333%
            }
            .tp-col--lg-8 {
                flex-basis: 66.66666667%;
                max-width: 66.66666667%
            }
            .tp-col--lg-9 {
                flex-basis: 75%;
                max-width: 75%
            }
            .tp-col--lg-10 {
                flex-basis: 83.33333333%;
                max-width: 83.33333333%
            }
            .tp-col--lg-11 {
                flex-basis: 91.66666667%;
                max-width: 91.66666667%
            }
            .tp-col--lg-12 {
                flex-basis: 100%;
                max-width: 100%
            }
            .tp-col--lg-first {
                order: -1
            }
        }
        
        .tp-wrap {
            max-width: 946px;
            padding-left: 16px;
            padding-right: 16px
        }
        
        @media (min-width:481px) {
            .tp-wrap {
                padding-left: 32px;
                padding-right: 32px
            }
        }
        
        @media (min-width:1010px) {
            .tp-wrap {
                padding-left: 0;
                padding-right: 0
            }
        }
        
        .tp-wrap-snap {
            padding-left: 16px;
            padding-right: 16px
        }
        
        @media (min-width:481px) {
            .tp-wrap-snap {
                max-width: 449px;
                padding-left: 0;
                padding-right: 0
            }
        }
        
        @media (min-width:700px) {
            .tp-wrap-snap {
                max-width: 668px
            }
        }
        
        @media (min-width:1025px) {
            .tp-wrap-snap {
                max-width: 946px
            }
        }
        
        .impact__wrap,
        .subhero__wrap {
            max-width: 600px
        }
        
        .tp-input-wrap+.tp-input-wrap {
            margin-top: 8px
        }
        
        .tp-margin-ends,
        .tp-margin-top {
            margin-top: 8px!important
        }
        
        ::-webkit-input-placeholder {
            color: #bdc4c4
        }
        
        ::-moz-placeholder {
            color: #bdc4c4
        }
        
        :-ms-input-placeholder {
            color: #bdc4c4
        }
        
        .tp-background--white {
            background-color: #fff!important
        }
        
        .tp-background--light {
            background-color: #f4f4f4!important
        }
        
        .footer,
        .header {
            background: #fff
        }
        
        .tp-margin {
            margin: 8px!important
        }
        
        .tp-margin-right {
            margin-right: 8px!important
        }
        
        .tp-margin-left {
            margin-left: 8px!important
        }
        
        .tp-margin-ends--double,
        .tp-margin-top--double {
            margin-top: 16px!important
        }
        
        .tp-margin-bottom--double,
        .tp-margin-ends--double {
            margin-bottom: 16px!important
        }
        
        .tp-margin--double {
            margin: 16px!important
        }
        
        .tp-margin-right--double {
            margin-right: 16px!important
        }
        
        .tp-margin-left--double {
            margin-left: 16px!important
        }
        
        .tp-margin-ends--triple,
        .tp-margin-top--triple {
            margin-top: 24px!important
        }
        
        .tp-margin-bottom--triple,
        .tp-margin-ends--triple {
            margin-bottom: 24px!important
        }
        
        .tp-margin--triple {
            margin: 24px!important
        }
        
        .tp-margin-right--triple {
            margin-right: 24px!important
        }
        
        .tp-margin-left--triple {
            margin-left: 24px!important
        }
        
        .tp-margin-ends--quad,
        .tp-margin-top--quad {
            margin-top: 32px!important
        }
        
        .tp-margin-bottom--quad,
        .tp-margin-ends--quad {
            margin-bottom: 32px!important
        }
        
        .tp-margin--quad {
            margin: 32px!important
        }
        
        .tp-margin-right--quad {
            margin-right: 32px!important
        }
        
        .tp-margin-left--quad {
            margin-left: 32px!important
        }
        
        .tp-margin-ends--none,
        .tp-margin-top--none {
            margin-top: 0!important
        }
        
        .tp-margin-bottom--none,
        .tp-margin-ends--none {
            margin-bottom: 0!important
        }
        
        .tp-margin--none {
            margin: 0!important
        }
        
        .tp-margin-right--none {
            margin-right: 0!important
        }
        
        .tp-margin-left--none {
            margin-left: 0!important
        }
        
        .tp-padding {
            padding: 8px!important
        }
        
        .tp-padding-right {
            padding-right: 8px!important
        }
        
        .tp-padding-left {
            padding-left: 8px!important
        }
        
        .tp-padding-ends--double,
        .tp-padding-top--double {
            padding-top: 16px!important
        }
        
        .tp-padding-bottom--double,
        .tp-padding-ends--double {
            padding-bottom: 16px!important
        }
        
        .tp-padding--double {
            padding: 16px!important
        }
        
        .tp-padding-right--double {
            padding-right: 16px!important
        }
        
        .tp-padding-left--double {
            padding-left: 16px!important
        }
        
        .tp-padding-ends--triple,
        .tp-padding-top--triple {
            padding-top: 24px!important
        }
        
        .tp-padding-bottom--triple,
        .tp-padding-ends--triple {
            padding-bottom: 24px!important
        }
        
        .tp-padding--triple {
            padding: 24px!important
        }
        
        .tp-padding-right--triple {
            padding-right: 24px!important
        }
        
        .tp-padding-left--triple {
            padding-left: 24px!important
        }
        
        .tp-padding-ends--quad,
        .tp-padding-top--quad {
            padding-top: 32px!important
        }
        
        .tp-padding-bottom--quad,
        .tp-padding-ends--quad {
            padding-bottom: 32px!important
        }
        
        .tp-padding--quad {
            padding: 32px!important
        }
        
        .tp-padding-right--quad {
            padding-right: 32px!important
        }
        
        .tp-padding-left--quad {
            padding-left: 32px!important
        }
        
        .tp-padding-ends--none,
        .tp-padding-top--none {
            padding-top: 0!important
        }
        
        .tp-padding-bottom--none,
        .tp-padding-ends--none {
            padding-bottom: 0!important
        }
        
        .tp-padding--none {
            padding: 0!important
        }
        
        .tp-padding-right--none {
            padding-right: 0!important
        }
        
        .tp-padding-left--none {
            padding-left: 0!important
        }
        
        .tp-text-1,
        .tp-text-1--static {
            font-size: 20px!important;
            line-height: 1.6!important
        }
        
        @media (min-width:700px) {
            .tp-text-1 {
                font-size: 24px!important;
                line-height: 1.5!important
            }
        }
        
        .tp-text-2--static {
            font-size: 16px!important;
            line-height: 1.6!important
        }
        
        .tp-text-3--static {
            font-size: 14px!important;
            line-height: 1.6!important
        }
        
        .tp-text-4--static {
            font-size: 12px!important;
            line-height: 1.6!important
        }
        
        .tp-color--base {
            color: #4e4d4d!important;
            fill: #4e4d4d!important
        }
        
        .tp-color--muted {
            color: #8d9494!important;
            fill: #8d9494!important
        }
        
        .tp-color--white {
            color: #fff!important;
            fill: #fff!important
        }
        
        .tp-weight--light {
            font-weight: 300!important
        }
        
        .tp-weight--normal {
            font-weight: 400!important
        }
        
        .tp-text--normal {
            font-style: normal!important
        }
        
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: none;
            border-bottom: 1px solid #e1e3e3;
            padding: 20px 32px
        }
        
        @media (min-width:1025px) {
            .header {
                justify-content: space-between
            }
        }
        
        .header__logo {
            display: block;
            height: 30px;
            width: 180px
        }
        
        .header__links {
            display: none
        }
        
        @media (min-width:700px) {
            .header__links {
                display: block
            }
        }
        
        .header__links__item {
            margin-left: 16px
        }
        
        .footer {
            border-top: solid 1px #e1e3e3;
            padding-top: 48px;
            padding-bottom: 48px
        }
        
        .footer .footer__item {
            border-top: 1px solid #e1e3e3
        }
        
        .footer .footer__item__title {
            cursor: pointer;
            font-size: 20px;
            font-weight: 500;
            padding-top: 8px
        }
        
        .footer .tp-col:first-child .footer__item {
            border-top: 0
        }
        
        .footer .tp-col:first-child .footer__item__title {
            padding-top: 0
        }
        
        .footer .footer__item__links {
            margin-top: 8px
        }
        
        .footer .footer__item__links a {
            color: #8d9494;
            fill: #8d9494;
            cursor: pointer;
            display: block;
            padding-bottom: 8px;
            padding-top: 8px
        }
        
        .footer .footer__item__links a:active {
            color: #8d9494
        }
        
        .footer .footer__item__links a:hover {
            color: #3f93f3
        }
        
        .footer .footer__social {
            display: flex;
            align-items: baseline;
            justify-content: space-between
        }
        
        .footer .footer__social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            background: #f4f4f4;
            border-radius: 50%
        }
        
        .footer .footer__social a:hover path,
        .footer .footer__social a:hover svg {
            fill: #f27802
        }
        
        .footer .footer__social svg {
            width: 24px;
            height: 24px
        }
        
        .footer .footer__social path,
        .footer .footer__social svg {
            fill: #bdc4c4
        }
        
        .footer .footer__logos .footer__item {
            border: 0;
            padding-top: 32px;
            flex-wrap: wrap
        }
        
        .footer .footer__logos .footer__logo {
            margin-bottom: 24px
        }
        
        .footer .footer__logos .footer__guarantee {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 24px;
            margin-top: 32px;
            width: 100%;
            line-height: 1.3;
            border-top: 1px solid #e1e3e3;
            color: #8d9494;
            font-size: 14px
        }
        
        .footer .footer__logos .footer__guarantee__icon {
            margin-right: 8px
        }
        
        @media (min-width:481px) {
            .footer .footer__logos .footer__item {
                display: flex
            }
            .footer .footer__logos .footer__logo {
                margin-left: 0;
                margin-bottom: 0
            }
            .footer .footer__logos .footer__social a {
                margin-left: 8px
            }
        }
        
        @media (min-width:1025px) {
            .footer .footer__item {
                border-top: 0
            }
            .footer .footer__item__title {
                cursor: default;
                font-size: 16px;
                padding-top: 0;
                padding-bottom: 16px
            }
            .footer .footer__item__links {
                margin-top: 0
            }
            .footer .footer__item__links a {
                font-size: 14px;
                padding-bottom: 4px;
                padding-top: 4px
            }
            .footer .footer__logos {
                order: -1
            }
            .footer .footer__logos .footer__item {
                padding-top: 0
            }
            .footer .footer__logos .footer__logo {
                margin-bottom: 24px
            }
            .footer .footer__logos .footer__social a {
                margin-left: 0;
                margin-right: 8px
            }
            .footer .footer__logos .footer__guarantee {
                border-top: 0;
                margin-left: 0;
                justify-content: flex-start;
                margin-top: 0
            }
        }
        
        .impact__wrap,
        .join-team__image,
        .subhero__wrap {
            margin-left: auto;
            margin-right: auto
        }
        
        .Hero {
            display: flex;
            align-items: center;
            background: #312f2f;
            min-height: 380px;
            padding: 64px 0
        }
        
        .Hero-grid {
            z-index: 2
        }
        
        .Hero-tint {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            z-index: 1;
            background-size: cover;
            background-position: top center;
            opacity: .65
        }
        
        .Hero-content,
        .stat__item {
            position: relative;
            text-align: center
        }
        
        .Hero-content {
            display: block
        }
        
        .Hero-content-title {
            padding-bottom: 5px
        }
        
        .Hero-content-subtitle {
            padding-bottom: 35px
        }
        
        .subhero {
            background: #fff;
            padding: 64px 16px;
            text-align: center
        }
        
        .subhero__text {
            color: #8d9494
        }
        
        .subhero__text p {
            margin-bottom: 12px
        }
        
        .subhero__title {
            margin-bottom: 24px
        }
        
        .stat__item {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #312f2f
        }
        
        @media (min-width:700px) {
            .Hero {
                min-height: 540px
            }
            .stat__item {
                height: 320px
            }
        }
        
        .stat__icon {
            margin-bottom: 8px
        }
        
        .stat__icon path,
        .stat__icon svg {
            fill: #fff
        }
        
        .stat__image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            opacity: .7
        }
        
        .stat__content {
            position: relative;
            color: #fff
        }
        
        .impact {
            padding-top: 64px;
            padding-bottom: 64px;
            background: #fff
        }
        
        .impact__wrap {
            text-align: center;
            margin-bottom: 64px
        }
        
        .impact__wrap__title {
            margin-bottom: 24px
        }
        
        .impact__wrap p {
            color: #8d9494
        }
        
        .impact__item {
            height: 150px;
            background: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            line-height: 1.2
        }
        
        .impact__item__title {
            font-size: 40px;
            color: #f27802
        }
        
        .join-team p,
        .join-team__small-title {
            margin-bottom: 12px;
            color: #8d9494
        }
        
        .impact__item__subtitle {
            font-size: 20px
        }
        
        .join-team {
            background: #f4f4f4;
            padding-top: 72px
        }
        
        .join-team__small-title {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            font-weight: 500
        }
        
        .join-team__title {
            margin-bottom: 12px
        }
        
        .join-team__image {
            display: block;
            max-width: 100%
        }
        
        @media (min-width:700px) {
            .impact__item {
                height: 220px
            }
            .join-team__image {
                margin: 0 16px 0 0
            }
            .join-team .join-team-wrap {
                display: flex;
                justify-content: space-between;
                flex-direction: row-reverse
            }
            .join-team .join-team__text {
                padding-top: 8px;
                max-width: 50%
            }
        }
        
        .how-it-works,
        .how-it-works-cta {
            padding-top: 64px;
            padding-bottom: 64px
        }
        
        .how-it-works {
            background: #fff
        }
        
        .how-it-works__header {
            text-align: center;
            margin-bottom: 48px
        }
        
        .how-it-works__stack {
            margin-bottom: 64px
        }
        
        .how-it-works__stack:last-child {
            margin-bottom: 0
        }
        
        .how-it-works__stack__title {
            color: #f27802;
            margin-bottom: 12px
        }
        
        .how-it-works__stack__content {
            display: flex;
            justify-content: center;
            flex-direction: column
        }
        
        .how-it-works__stack__img-wrap {
            margin-bottom: 32px
        }
        
        .how-it-works__stack__img-wrap img {
            width: 100%;
            display: block
        }
        
        .how-it-works__stack p {
            margin-bottom: 12px
        }
        
        .how-it-works__stack p:last-child {
            margin-bottom: 0
        }
        
        @media (min-width:700px) {
            .how-it-works__stack {
                display: flex;
                justify-content: space-between
            }
            .how-it-works__stack:nth-child(odd) {
                flex-direction: row-reverse
            }
            .how-it-works__stack__content,
            .how-it-works__stack__img-wrap {
                max-width: 45%;
                margin-bottom: 0
            }
        }
        
        .how-it-works-cta {
            background-color: #f4f4f4
        }
        
        @media (max-width:700px) {
            .how-it-works-cta {
                padding-top: 36px;
                padding-bottom: 36px
            }
        }
        
        .how-it-works-cta__header {
            text-align: center;
            margin-bottom: 32px
        }
    </style>
@endsection
@section('content')
<div class="Hero" data-reactid="13">
                        <div class="Hero-tint" style="background-image:url(https://static5.thumbtackstatic.com/_assets/images/release/pages/how-it-works-page/images/hero-0cc683f5.jpg);" data-reactid="14"></div>
                        <div class="Hero-grid tp-wrap-snap" data-reactid="15">
                            <div class="tp-grid tp-grid--center" data-reactid="16">
                                <div class="Hero-content tp-col tp-col--12 tp-col--lg-8 tp-color--white" data-reactid="17">
                                    <h1 class="tp-heading-1 tp-margin-bottom--double" data-reactid="18"><!-- react-text: 19 -->Accomplish (almost) anything<!-- /react-text --></h1>
                                    <div class="tp-heading-5" data-reactid="20">
                                        <!-- react-text: 21 -->Book a DJ for your wedding. Remodel your first home. Meet the perfect dog-sitter. You can do it all—and much, much more—with Ivee. Just tell us what you need, and we&#x27;ll introduce you to several qualified professionals. Then, compare and hire the pro that&#x27;s right for you. It&#x27;s that easy.
                                        <!-- /react-text -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="how-it-works" data-reactid="22">
                        <div class="tp-wrap-snap" data-reactid="23">
                            <h2 class="how-it-works__header tp-heading-3" data-reactid="24"><!-- react-text: 25 -->How does Ivee work?<!-- /react-text --></h2>
                            <div class="how-it-works__stack" data-reactid="26">
                                <div class="how-it-works__stack__img-wrap" data-reactid="27"><img src="https://static2.thumbtackstatic.com/_assets/images/release/pages/how-it-works-page/images/step-1-a207e271.jpg" data-reactid="28" /></div>
                                <div class="how-it-works__stack__content" data-reactid="29" dir="rtl">
                                    <h3 class="tp-heading-4 how-it-works__stack__title" data-reactid="30"><!-- react-text: 31 -->We introduce you to pros<!-- /react-text --></h3>
                                    <p data-reactid="32">
                                        <p>.Answer a few specific questions about what you need</p>
                                        <p>We'll share those details with experienced professionals who can complete your project</p>
                                        <p>.We'll keep your email and number private, so no spam</p>
                                    </p>
                                </div>
                            </div>
                            <div class="how-it-works__stack" data-reactid="33">
                                <div class="how-it-works__stack__img-wrap" data-reactid="34"><img src="https://static6.thumbtackstatic.com/_assets/images/release/pages/how-it-works-page/images/step-2-1bb525a0.jpg" data-reactid="35" /></div>
                                <div class="how-it-works__stack__content" data-reactid="36" dir="rtl">
                                    <h3 class="tp-heading-4 how-it-works__stack__title" data-reactid="37"><!-- react-text: 38 -->Compare professionals<!-- /react-text --></h3>
                                    <p data-reactid="39">
                                        <p>Within hours, interested and available professionals will pay to send you custom quotes. You'll receive up to 5 quotes to your inbox.</p>
                                    </p>
                                </div>
                            </div>
                            <div class="how-it-works__stack" data-reactid="40">
                                <div class="how-it-works__stack__img-wrap" data-reactid="41"><img src="https://static3.thumbtackstatic.com/_assets/images/release/pages/how-it-works-page/images/step-3-b87a0efa.jpg" data-reactid="42" /></div>
                                <div class="how-it-works__stack__content" data-reactid="43" dir="rtl">
                                    <h3 class="tp-heading-4 how-it-works__stack__title" data-reactid="44"><!-- react-text: 45 -->Hire the best professional<!-- /react-text --></h3>
                                    <p data-reactid="46">
                                        <p>Call or message professionals if you need more information.</p>
                                        <p>When you're ready, hire an experienced professional at a price that's right for you.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="how-it-works-cta" data-reactid="47" dir="rtl">
                        <div class="tp-wrap-snap" data-reactid="48">
                            <h2 class="how-it-works-cta__header tp-heading-3" data-reactid="49">?Ready to give it a try</h2>
                            <form action="http://www.thumbtack.com/request" method="get" data-reactid="50">
                                <div class="tp-grid" data-reactid="51">
                                    <input type="hidden" name="origin" value="how it works" data-reactid="52" />
                                    <div class="tp-col tp-col--flex" data-reactid="53" dir="rtl">
                                        <input type="text" required="" name="query" class="tp-text-input tp-text-input--large" placeholder="?What service do you need" data-reactid="54" />
                                    </div>
                                    <div class="tp-col tp-col--flex" data-reactid="55" dir="rtl">
                                        <input type="text" name="zipCode" class="tp-text-input tp-text-input--large" placeholder="?Zip Code" pattern="[0-9]*" data-reactid="56" />
                                    </div>
                                    <div class="tp-col tp-col--12 tp-col--md-3" data-reactid="57">
                                        <input type="submit" class="tp-button tp-button--highlight tp-button--large tp-button--full" value="Get Started" data-reactid="58" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

@endsection

@section('script')

@endsection


                        
