@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div id="titlebar" class="single">
    <div class="container">
        <div class="sixteen columns">
            <h2>Our Services</h2>
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="">Home</a></li>
                    <li>Services</li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
            <h4>Free Services</h4>
            
            <p>Myjobo.com offers free job advertising. You can register as an Employer and start advertising jobs immediately.  There is no limit for the number of jobs you can advertise.  As a registered Employer, you are automatically included in our Online Directory making your brand visible to throusands out there.</p> 

            <h4>Premium Services</h4>
            <p>We offer a wide range of premium recruitment solutions for employers and recruiters. Our Premium Services are of high quality and carried out by professionals. Details of our Premium Services are explained in detail below.</p>
            
            </div>
            
            <div class="row"> 
                <img src="{{ URL::to('frontend/images/ValidiHire.png') }}" alt="" style="height: 30px;" />       
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">What is ValidiHire?</a>
                </div>

                <div class="col-md-4">
                    <a href="">ValidiHire CV Search</a>
                </div>

                <div class="col-md-4">
                    <a href="">ValidiHire Recruit Package</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Why choose Myjobo.com’s ValidiHire</a>
                </div>
            </div>

            <div class="row"> 
                <img src="{{ URL::to('frontend/images/ValidiChecks.jpg') }}" alt="" style="height: 30px;" />       
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">What is ValidiChecks?</a>
                </div>

                <div class="col-md-4">
                    <a href="">Our ValidiChecks Premium services</a>
                </div>

                <div class="col-md-4">
                    <a href="">Reference Checks</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Educational Verification Checks</a>
                </div>

                <div class="col-md-4">
                    <a href="">Professional Verification</a>
                </div>

                <div class="col-md-4">
                    <a href="">Employment History Verification</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Why choose Myjobo.com’s ValidiChecks</a>
                </div>

                <div class="col-md-4">
                    <a href="">ValidiHire CV Search</a>
                </div>

                <div class="col-md-4">
                    <a href="">Why we are recommending ValidiChecks for you?</a>
                </div>
            </div>


        </div>    
    
        <div class="col-md-4">
            <div class="widget text-center">
                <div class="widget-box" style="text-align: center;">
                    <p>Advertise Jobs <br> It's Free</p>
                    <a href="" class="btn btn-success btn-block">Click Here</a>

                    <p>Upload your CV <br> It's Free</p>
                    <a href="" class="btn btn-success btn-block">Click Here</a>

                </div>
            </div>

            <div class="widget text-center">
                <div class="widget-box" style="text-align: center;">
                    <a href="" class="btn btn-info btn-block">Support our Activities</a>
                    <a href="" class="btn btn-primary btn-block">Testimonials</a>
                </div>
            </div>
        </div>    
    </div>


    <div class="col-md-12 text-center">
        <hr>
        <h1>Why choose our Premium Services</h1>
        <p>&nbsp;</p>
        <div class="row">

            <div class="col-md-3">
                <span class="ln ln-icon-User" style="font-size: 50px;"></span>
                <h4>Industry Leader</h4>
                <p>We are Malawi's largest online job-site. We have the largest online CV database in Malawi. We meet international standards for confidentiality and data integrity.</p>
            </div>

            <div class="col-md-3">
                <span class="ln ln-icon-Money-Bag" style="font-size: 50px;"></span>        
                <h4>Value for Money</h4>
                <p>Our low fees save you money while assuring you of timely, professional, quality services. Our services are accurate and reliable carried out by domestic and international professionals.</p>
            </div>

            <div class="col-md-3">
                <span class="ln ln-icon-Timer-2" style="font-size: 50px;"></span>        
                <h4>Saves you Time</h4>
                <p>Our online system is accessible 24/7 and our team works long hours everyday. Our promise is that we will cut your recruitment time by at least 50%.</p>
            </div>

            <div class="col-md-3">
                <span class="ln ln-icon-Lock-2" style="font-size: 50px;"></span>        
                <h4>Excellent Customer Care</h4>
                <p>We provide unmatched customer care that even surprises us. Our team are passionate, professional and respond to your queries promptly.</p>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <hr>
            <a href="" class="btn btn-success">Get started for free</a>
            <br>
            <p>As featured in:</p>
        </div>    
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="one carousel column">
                <div id="showbiz_left_2" class="sb-navigation-left-2">
                    <i class="fa fa-angle-left"></i>
                </div>
            </div>
            <div id="our-clients" class="showbiz-container fourteen carousel columns" >
                <div class="showbiz our-clients" data-left="#showbiz_left_2" data-right="#showbiz_right_2">
                <div class="overflowholder">
                    <ul>
                        <!-- Item -->
                        <li><a href="">
                            <img src="{{ URL::to('frontend/images/logo-01.png') }}" alt="" />
                        </a></li>
                        <li><a href="">
                            <img src="{{ URL::to('frontend/images/logo-02.png') }}" alt="" />
                        </a></li>
                        <li><a href="">
                            <img src="{{ URL::to('frontend/images/logo-03.png') }}" alt="" />
                        </a></li>
                        <li><a href="">    
                            <img src="{{ URL::to('frontend/images/logo-04.png') }}" alt="" />
                        </a></li>
                        <li><a href="">    
                            <img src="{{ URL::to('frontend/images/logo-05.png') }}" alt="" />
                        </a></li>
                        <li><a href="">    
                            <img src="{{ URL::to('frontend/images/logo-06.png') }}" alt="" />
                        </a></li>
                        <li><a href="">    
                            <img src="{{ URL::to('frontend/images/logo-07.png') }}" alt="" />
                        </a></li>    
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                </div>
            </div>
            <div class="one carousel column">
                <div id="showbiz_right_2" class="sb-navigation-right-2">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
        <div class="margin-bottom-40"></div>
    </div>    
</div>
@endsection