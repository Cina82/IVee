@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div id="titlebar" class="single">
    <div class="container">
        <div class="sixteen columns">
            <h2>Jobs</h2>
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="">Home</a></li>
                    <li>Jobs</li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4>Job Opportunities</h4>
            <div class="form-group">
                <select name="category" class="form-control">
                    <option value="">Search by Job Category</option>
                    <option value="Accounting, Auditing, Banking, Finance and Taxation">Accounting, Auditing, Banking, Finance and Taxation</option>
                    <option value="Administrative, Clerical and Secretarial">Administrative, Clerical and Secretarial</option>
                </select>
            </div>


            <ul class="job-list">
                <li class="highlighted">
                    <a href="job-page.html">
                        <img src="{{ URL::to('frontend/images/job-list-logo-01.png') }}" alt="">
                        <div class="job-list-content">
                            <h4>Marketing Coordinator - SEO / SEM Experience <span class="full-time">Full-Time</span></h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> King</span>
                                <span><i class="fa fa-map-marker"></i> Sydney</span>
                                <span><i class="fa fa-money"></i> $100 / hour</span>
                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                </li>

                <li>
                    <a href="job-page.html">
                        <img src="{{ URL::to('frontend/images/job-list-logo-02.png') }}" alt="">
                        <div class="job-list-content">
                            <h4>Core PHP Developer for Site Maintenance <span class="part-time">Part-Time</span></h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> Cubico</span>
                                <span><i class="fa fa-map-marker"></i> London</span>
                                <span><i class="fa fa-money"></i> $50 / hour</span>
                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                </li>

                <li>
                    <a href="job-page.html">
                        <img src="{{ URL::to('frontend/images/job-list-logo-03.png') }}" alt="">
                        <div class="job-list-content">
                            <h4>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> King</span>
                                <span><i class="fa fa-map-marker"></i> Sydney</span>
                                <span><i class="fa fa-money"></i> $15 / hour</span>
                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                </li>

                <li>
                    <a href="job-page.html">
                        <img src="{{ URL::to('frontend/images/job-list-logo-04.png') }}" alt="">
                        <div class="job-list-content">
                            <h4>Power Systems User Experience Designer  <span class="internship">Internship</span></h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> Hexagon</span>
                                <span><i class="fa fa-map-marker"></i> London</span>
                                <span><i class="fa fa-money"></i> $75 / hour</span>
                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                </li>

                <li>
                    <a href="job-page.html">
                        <img src="{{ URL::to('frontend/images/job-list-logo-05.png') }}" alt="">
                        <div class="job-list-content">
                            <h4>iPhone / Android Music App Development <span class="temporary">Temporary</span></h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> Mates</span>
                                <span><i class="fa fa-map-marker"></i> New York</span>
                                <span><i class="fa fa-money"></i> $115 / hour</span>
                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                </li>
            </ul>

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
                    <a href="" class="btn btn-primary btn-block">Job Archives</a>
                </div>
            </div>

            <div class="widget">
                <div class="widget-box">
                    <a href="">
                        <img src="{{ URL::to('frontend/images/7157new2.jpg') }}" style="width: 100%">
                    </a>
                </div>    
            </div>


            <div class="widget">
                <div class="widget-box">
                    <h5>Featured Partners</h5>
                    <a class="btn btn-warning btn-block">ACTION AGAINST HUNGER</a>
                    <a class="btn btn-warning btn-block">Pacific Limited</a>
                    <a class="btn btn-warning btn-block">Geo Development Consultants</a>

                    <a href="">Browse all Partners</a>
                </div>    
            </div>

            <div class="widget">
                <div class="widget-box">
                  add
                </div>    
            </div>


        </div>    
    </div>    
</div>
@endsection