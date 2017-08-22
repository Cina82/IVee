<?php $__env->startSection('css'); ?>
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
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="Hero" data-reactid="13">
   <div class="Hero-tint" style="background-image:url(<?php echo e(URL::To('public/assets/img/about-page-hero_desktop-9b802081.jpg')); ?>)" data-reactid="14"></div>
   <div class="Hero-grid tp-wrap-snap" data-reactid="15">
      <div class="tp-grid tp-grid--center" data-reactid="16">
         <div class="Hero-content tp-col tp-col--12 tp-col--lg-8 tp-color--white" data-reactid="17">
            <h1 class="tp-heading-1 tp-margin-bottom--double" data-reactid="18">
               <!-- react-text: 19 -->We’re building the destination for getting things done<!-- /react-text -->
            </h1>
            <div class="tp-heading-5" data-reactid="20"></div>
         </div>
      </div>
   </div>
</div>
<div class="subhero" data-reactid="21">
   <div class="subhero__wrap" data-reactid="22">
      <h2 class="subhero__title tp-heading-3" data-reactid="23">Solving one big problem</h2>
      <div class="subhero__text" data-reactid="24">
         <p data-reactid="25">In 2009, three friends—Marco, Jonathan, and Sander—noticed a problem. Customers needed help connecting to qualified, local professionals. The same professionals needed customers. As a solution to bring the two together, Thumbtack was born.</p>
         <p data-reactid="26">Since then, we’ve helped millions of customers with their projects and generated more than $1 billion in annual revenue for our pros. We’re reshaping local economies. We’re changing lives. And true to the spirit of our customers and pros, we’re getting things done.</p>
      </div>
   </div>
</div>
<div class="stat-gallery" data-reactid="27">
   <div class="tp-grid tp-grid--flush" data-reactid="28">
      <div class="tp-col tp-col--12 tp-col--md-6 tp-col--lg-4" data-reactid="29">
         <div class="stat__item" data-reactid="30">
            <div class="stat__image" style="background-image:url(https://static7.thumbtackstatic.com/_assets/images/release/pages/about-page/submodules/stats-gallery/images/photobooth_1x-97d557b6.jpg);" data-reactid="31"></div>
            <div class="stat__content" data-reactid="32">
               <div class="stat__icon" data-reactid="33">
                  <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" data-reactid="34">
                     <title data-reactid="35">Artboard</title>
                     <g fill="#FFF" fill-rule="evenodd" data-reactid="36">
                        <path d="M30.3 20.6l5 18.7C40.1 35.7 43 30 43 24l-12.7-3.4zM5.1 26.2c.1.9.3 1.8.5 2.7 1.4 5.1 4.7 9.2 8.9 11.6l9.3-9.3-18.7-5zM17.8 20.3L31.6 6.6c-3.8-1.7-8.2-2.1-12.5-.9-1.7.4-3.2 1.1-4.6 1.9l3.3 12.7zM42.9 21.9c-.1-.9-.3-1.8-.5-2.8C41 14 37.7 10 33.5 7.5l-9.3 9.3 18.7 5.1zM30.2 27.7L16.5 41.4c3.8 1.6 8.1 2.1 12.4.9 1.7-.4 3.2-1.1 4.6-1.9l-3.3-12.7zM17.7 27.5l-5-18.7C7.9 12.3 5 18 5 24.1l12.7 3.4z" data-reactid="37"></path>
                     </g>
                  </svg>
               </div>
               <div class="stat__title tp-heading-3" data-reactid="38">98,789</div>
               <div class="stat__subtitle tp-heading-5" data-reactid="39">photobooths rented</div>
            </div>
         </div>
      </div>
      <div class="tp-col tp-col--12 tp-col--md-6 tp-col--lg-4" data-reactid="40">
         <div class="stat__item" data-reactid="41">
            <div class="stat__image" style="background-image:url(https://static1.thumbtackstatic.com/_assets/images/release/pages/about-page/submodules/stats-gallery/images/voicelesson_1x-023f13bd.jpg);" data-reactid="42"></div>
            <div class="stat__content" data-reactid="43">
               <div class="stat__icon" data-reactid="44">
                  <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" data-reactid="45">
                     <title data-reactid="46">Page 1</title>
                     <path d="M21.912 25.044v1.565s3.316-1.565 6.007-1.565c1.838 0 3.384 1.565 3.384 1.565v-1.565s-1.547-1.565-3.387-1.565c-2.69 0-6.004 1.565-6.004 1.565zm0-7.826v1.565s3.316-1.565 6.007-1.565c1.838 0 3.384 1.565 3.384 1.565v-1.565s-1.547-1.566-3.387-1.566c-2.69 0-6.004 1.566-6.004 1.566zm12.521 16.4c-1.945-.727-4.93-1.584-8.185-1.584-3.013 0-5.811 1.037-7.48 1.81V3.766l.024-.015c.038-.021 3.784-2.186 7.682-2.186 3.426 0 6.538 1.184 7.96 1.818V33.62zm-17.201.226c-1.671-.772-4.467-1.81-7.483-1.81-3.253 0-6.238.857-8.184 1.585V3.383C2.987 2.75 6.1 1.565 9.525 1.565c3.898 0 7.645 2.165 7.68 2.186l.027.016v30.077zM26.474 0c-4.396 0-8.475 2.4-8.475 2.4S13.921 0 9.525 0C4.382 0 0 2.4 0 2.4V36s4.545-2.4 9.75-2.4C14.06 33.6 18 36 18 36s3.938-2.4 8.248-2.4c5.204 0 9.75 2.4 9.75 2.4V2.4S31.618 0 26.474 0zM4.696 17.218v1.565s1.547-1.565 3.383-1.565c2.692 0 6.007 1.565 6.007 1.565v-1.565s-3.312-1.566-6.004-1.566c-1.838 0-3.386 1.566-3.386 1.566zm0 7.826v1.565s1.547-1.565 3.383-1.565c2.692 0 6.007 1.565 6.007 1.565v-1.565s-3.312-1.565-6.004-1.565c-1.838 0-3.386 1.565-3.386 1.565zm0-15.652v1.566S6.243 9.392 8.08 9.392c2.692 0 6.007 1.566 6.007 1.566V9.392s-3.312-1.565-6.004-1.565c-1.838 0-3.386 1.565-3.386 1.565zm17.216 1.566s3.316-1.566 6.007-1.566c1.838 0 3.384 1.566 3.384 1.566V9.392s-1.547-1.565-3.387-1.565c-2.69 0-6.004 1.565-6.004 1.565v1.566z" fill="#8D9494" fill-rule="evenodd" data-reactid="47"></path>
                  </svg>
               </div>
               <div class="stat__title tp-heading-3" data-reactid="48">38,793</div>
               <div class="stat__subtitle tp-heading-5" data-reactid="49">voice lessons taught</div>
            </div>
         </div>
      </div>
      <div class="tp-col tp-col--12 tp-col--md-6 tp-col--lg-4" data-reactid="50">
         <div class="stat__item" data-reactid="51">
            <div class="stat__image" style="background-image:url(https://static8.thumbtackstatic.com/_assets/images/release/pages/about-page/submodules/stats-gallery/images/homespainted_1x-26803b06.jpg);" data-reactid="52"></div>
            <div class="stat__content" data-reactid="53">
               <div class="stat__icon" data-reactid="54">
                  <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" data-reactid="55">
                     <title data-reactid="56">home_48</title>
                     <path d="M9.85 20.47h2.818v2.824H9.85V20.47zm-1.4 4.236h5.673v-5.647H8.45v5.647zm22.598 8.473c0 .78-.632 1.412-1.412 1.412h-2.83V19.06h-9.86V34.59H5.635c-.779 0-1.411-.632-1.411-1.412V13.461L17.637 2.274 31.048 13.46V33.18zm-5.65 1.41h-7.043V20.47h7.043v14.117zM18.328 1.11a.65.65 0 0 0-.15-.238.66.66 0 0 0-.542-.182.658.658 0 0 0-.54.182.648.648 0 0 0-.15.238L2.812 12.9l-.004-9.99v9.993l-2.613 2.18a.671.671 0 0 0 .949.948l1.664-1.388v19.151A2.21 2.21 0 0 0 5.027 36h25.195a2.212 2.212 0 0 0 2.218-2.206V14.622l1.69 1.41a.67.67 0 1 0 .947-.95L18.33 1.11z" fill="#8D9494" fill-rule="evenodd" data-reactid="57"></path>
                  </svg>
               </div>
               <div class="stat__title tp-heading-3" data-reactid="58">152,931</div>
               <div class="stat__subtitle tp-heading-5" data-reactid="59">homes painted</div>
            </div>
         </div>
      </div>
      <div class="tp-col tp-col--12 tp-col--md-6 tp-col--lg-4" data-reactid="60">
         <div class="stat__item" data-reactid="61">
            <div class="stat__image" style="background-image:url(https://static1.thumbtackstatic.com/_assets/images/release/pages/about-page/submodules/stats-gallery/images/weddings_1x-6adb7369.jpg);" data-reactid="62"></div>
            <div class="stat__content" data-reactid="63">
               <div class="stat__icon" data-reactid="64">
                  <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" data-reactid="65">
                     <title data-reactid="66">wedding_48</title>
                     <path d="M42 20h-4c-2.067 0-3.748 1.574-3.958 3.586C33.212 27.244 29.33 30 25 30c-1.103 0-2 .897-2 2s.897 2 2 2c3.434 0 6.616-1.213 9-3.217V40h12V24a4 4 0 0 0-4-4zm-26.042 3.585C15.748 21.574 14.068 20 12 20H8a4 4 0 0 0-4 4v16h12v-9.216a13.734 13.734 0 0 0 5.301 2.728A3.972 3.972 0 0 1 21 32c0-.943.342-1.8.89-2.484-2.964-.945-5.308-3.183-5.932-5.93zM25 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-15 2a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm30 0a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-12 0h-6c-1.517 0-2.821.855-3.5 2.1-.319.743-.5 1.552-.5 2.4 0 1.766.765 3.368 2 4.54V22l5 2 5-2v5.04c1.235-1.172 2-2.774 2-4.54 0-.848-.181-1.657-.5-2.4-.679-1.245-1.983-2.1-3.5-2.1z" fill="#FFF" fill-rule="evenodd" data-reactid="67"></path>
                  </svg>
               </div>
               <div class="stat__title tp-heading-3" data-reactid="68">154,975</div>
               <div class="stat__subtitle tp-heading-5" data-reactid="69">weddings officiated</div>
            </div>
         </div>
      </div>
      <div class="tp-col tp-col--12 tp-col--md-6 tp-col--lg-4" data-reactid="70">
         <div class="stat__item" data-reactid="71">
            <div class="stat__image" style="background-image:url(https://static2.thumbtackstatic.com/_assets/images/release/pages/about-page/submodules/stats-gallery/images/workout_1x-82cf880b.jpg);" data-reactid="72"></div>
            <div class="stat__content" data-reactid="73">
               <div class="stat__icon" data-reactid="74">
                  <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" data-reactid="75">
                     <title data-reactid="76">body_48</title>
                     <g transform="translate(9 5)" fill="#FFF" fill-rule="evenodd" data-reactid="77">
                        <path d="M31.1 8H.9c-.5 0-.9.4-.9.9v.2c0 .5.4.9.9.9L12 11v26.1c0 .5.4.9.9.9h.3c.5 0 .8-.3.9-.8L16 23h1l4.8 3.4-4.8.5c-.6.1-1 .5-1 1.1 0 .6.5 1 1 1h6.8c1 0 1.8-.7 2-1.7V27c.1-.6-.1-1.3-.6-1.7L20 20v-9l11.1-.9c.5 0 .9-.4.9-.9V9c0-.6-.4-1-.9-1z" data-reactid="78"></path>
                        <circle cx="16" cy="3" r="3" data-reactid="79"></circle>
                     </g>
                  </svg>
               </div>
               <div class="stat__title tp-heading-3" data-reactid="80">154,214</div>
               <div class="stat__subtitle tp-heading-5" data-reactid="81">bodies toned</div>
            </div>
         </div>
      </div>
      <div class="tp-col tp-col--12 tp-col--md-6 tp-col--lg-4" data-reactid="82">
         <div class="stat__item" data-reactid="83">
            <div class="stat__image" style="background-image:url(https://static5.thumbtackstatic.com/_assets/images/release/pages/about-page/submodules/stats-gallery/images/dogs_1x-9de7c0ca.jpg);" data-reactid="84"></div>
            <div class="stat__content" data-reactid="85">
               <div class="stat__icon" data-reactid="86">
                  <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" data-reactid="87">
                     <title data-reactid="88">dogs_48</title>
                     <g fill="#FFF" fill-rule="evenodd" data-reactid="89">
                        <path d="M15 22.114A3.886 3.886 0 0 1 11.114 26h-.228A3.886 3.886 0 0 1 7 22.114v-2.228A3.886 3.886 0 0 1 10.886 16h.228A3.886 3.886 0 0 1 15 19.886v2.228zM41 19.886A3.886 3.886 0 0 0 37.114 16h-.228A3.886 3.886 0 0 0 33 19.886v2.228A3.886 3.886 0 0 0 36.886 26h.228A3.886 3.886 0 0 0 41 22.114v-2.228zM23 11.886A3.886 3.886 0 0 0 19.114 8h-.228A3.886 3.886 0 0 0 15 11.886v2.228A3.886 3.886 0 0 0 18.886 18h.228A3.886 3.886 0 0 0 23 14.114v-2.228zM33 11.886A3.886 3.886 0 0 0 29.114 8h-.228A3.886 3.886 0 0 0 25 11.886v2.228A3.886 3.886 0 0 0 28.886 18h.228A3.886 3.886 0 0 0 33 14.114v-2.228zM32.226 26.792c-.741-.386-1.293-1.08-1.542-1.878a7.003 7.003 0 0 0-13.368 0c-.249.799-.8 1.492-1.542 1.878a7.001 7.001 0 0 0-3.654 7.524c.508 2.787 2.752 5.04 5.538 5.559a7.017 7.017 0 0 0 4.762-.768 3.239 3.239 0 0 1 3.16 0 7.017 7.017 0 0 0 4.762.768c2.786-.519 5.03-2.772 5.538-5.56a7.001 7.001 0 0 0-3.654-7.523z" data-reactid="90"></path>
                     </g>
                  </svg>
               </div>
               <div class="stat__title tp-heading-3" data-reactid="91">98,524</div>
               <div class="stat__subtitle tp-heading-5" data-reactid="92">dogs trained</div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="impact" data-reactid="93">
   <div class="tp-wrap-snap" data-reactid="94">
      <div class="impact__wrap" data-reactid="95">
         <div class="impact__wrap__title tp-heading-3" data-reactid="96">Creating impact</div>
         <p data-reactid="97">The success of our customers and pros inspires us. That’s why we’re constantly growing and innovating to help them accomplish more.</p>
      </div>
      <div class="tp-grid impact-grid" data-reactid="98">
         <div class="tp-col tp-col--12 tp-col--md-6" data-reactid="99">
            <div class="impact__item" data-reactid="100">
               <div class="impact__item__title" data-reactid="101">Over 1,000</div>
               <div class="impact__item__subtitle" data-reactid="102">types of services</div>
            </div>
         </div>
         <div class="tp-col tp-col--12 tp-col--md-6" data-reactid="103">
            <div class="impact__item" data-reactid="104">
               <div class="impact__item__title" data-reactid="105">250,000+</div>
               <div class="impact__item__subtitle" data-reactid="106">active professionals</div>
            </div>
         </div>
         <div class="tp-col tp-col--12 tp-col--md-6" data-reactid="107">
            <div class="impact__item" data-reactid="108">
               <div class="impact__item__title" data-reactid="109">Millions</div>
               <div class="impact__item__subtitle" data-reactid="110">of projects annually</div>
            </div>
         </div>
         <div class="tp-col tp-col--12 tp-col--md-6" data-reactid="111">
            <div class="impact__item" data-reactid="112">
               <div class="impact__item__title" data-reactid="113">Over $1B</div>
               <div class="impact__item__subtitle" data-reactid="114">annual pro revenue</div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="Hero" data-reactid="115">
   <div class="Hero-tint" style="background-image:url(https://static4.thumbtackstatic.com/_assets/images/release/pages/about-page/submodules/quotes-slider/images/quote_iris_md-a1a8bd75.jpg);" data-reactid="116"></div>
   <div class="Hero-grid tp-wrap-snap" data-reactid="117">
      <div class="tp-grid tp-grid--center" data-reactid="118">
         <div class="Hero-content tp-col tp-col--12 tp-col--lg-8 tp-color--white" data-reactid="119">
            <h1 class="tp-heading-1 tp-margin-bottom--double" data-reactid="120">
               <!-- react-text: 121 -->“My ultimate mission through my practice is to see us all live unapologetically.”<!-- /react-text -->
            </h1>
            <div class="tp-heading-5" data-reactid="122"></div>
         </div>
      </div>
   </div>
</div>
<div class="subhero" data-reactid="123">
   <div class="subhero__wrap" data-reactid="124">
      <h2 class="subhero__title tp-heading-3" data-reactid="125">Sign-up with Thumbtack</h2>
      <div class="subhero__text" data-reactid="126">
         <p data-reactid="127">Need to hire a great professional? Want to grow your own business? We can help.</p>
         <p data-reactid="128"><a href="http://www.thumbtack.com/login" data-reactid="129">Already have an account? Log in »</a></p>
      </div>
      <div class="tp-grid tp-margin-top--quad" data-reactid="130">
         <div class="tp-col tp-col--12 tp-col--sm-6" data-reactid="131"><a class="tp-button tp-button--full" href="http://www.thumbtack.com/register" data-reactid="132">Customer Sign-up</a></div>
         <div class="tp-col tp-col--12 tp-col--sm-6" data-reactid="133"><a class="tp-button tp-button--full" href="http://www.thumbtack.com/pro" data-reactid="134">Professional Sign-up</a></div>
      </div>
   </div>
</div>
<div class="join-team" data-reactid="135" dir="">
   <div class="tp-wrap-snap" data-reactid="136">
      <div class="join-team-wrap" data-reactid="137">
         <div class="join-team__text" data-reactid="138">
            <div class="join-team__small-title" data-reactid="139" dir="rtl">Join our team</div>
            <h3 class="join-team__title tp-heading-4" data-reactid="140" dir="rtl">Do great work</h3>
            <p data-reactid="141" dir="rtl">We’re solving hard problems and making a meaningful difference in the lives of customers and professionals.</p>
            <p data-reactid="142" dir="rtl">Want to join our fast-growing team? Let’s talk.</p>
            <p data-reactid="143" dir="rtl"><a href="http://www.thumbtack.com/jobs" data-reactid="144">Check out jobs at Thumbtack</a></p>
         </div>
         <img class="join-team__image" src="https://static1.thumbtackstatic.com/_assets/svg/release/about_join_us-fed3c4fd.svg" alt="" data-reactid="145" />
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>


                        

<?php echo $__env->make('layouts.thumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>