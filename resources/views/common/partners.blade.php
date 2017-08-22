@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div id="titlebar" class="single">
    <div class="container">
        <div class="sixteen columns">
            <h2>Our Partners</h2>
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="">Home</a></li>
                    <li>Partners</li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <a href="">Advertising and Marketing </a>(7)    
            </div>

            <div class="col-md-4">
                <a href="">Agriculture, Forestry & Fishing </a>(17)    
            </div>

            <div class="col-md-4">
                <a href="">Automotive, Cars </a>(4)    
            </div>
        </div>

        <div class="row">    
            <div class="col-md-4">
                <a href="">Banking, Finance, Tax & Insurance </a>(5)    
            </div>

            <div class="col-md-4">
                <a href="">Beauty and Fitness </a>(1)    
            </div>

            <div class="col-md-4">
                <a href="">Business Services including Consulting </a>(33)    
            </div>
        </div>
        
        <div class="row">    
            <div class="col-md-4">
                <a href="">Construction and Infrastructural development </a>(10)    
            </div>

            <div class="col-md-4">
                <a href="">Education (University, Secondary, Primary, Nursery etc) </a>(13)    
            </div>

            <div class="col-md-4">
                <a href="">Healthcare and Medical Services </a>(12)    
            </div>
        </div>
        
        <div class="row">    

            <div class="col-md-4">
                <a href="">Human Resources; Recruitment Services </a>(5)    
            </div>
            
        </div>    
        <div class="margin-bottom-40"></div>
    </div>
    <!-- Blog Posts / End -->


    <!-- Widgets -->
    <div class="col-md-4">

        <div class="widget">
            <div class="widget-box">
                <a href="">
                    <img src="{{ URL::to('frontend/images/7157new2.jpg') }}" style="width: 100%">
                </a>
            </div>    
        </div>

        <div class="widget">
            <div class="widget-box">
                add
            </div>    
        </div>
    </div>

</div>
@endsection