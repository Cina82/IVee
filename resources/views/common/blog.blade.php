@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div id="titlebar" class="single">
    <div class="container">
        <div class="sixteen columns">
            <h2>Blog</h2>
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="">Home</a></li>
                    <li>Blog</li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="eleven columns">
        <div class="padding-right">

            <div class="container"> 
                  <div class="sixteen columns">
                  add
                  </div>  
            </div>

            <div class="post-container">
                <div class="post-content">
                    <a href="blog.html#"><h3>Hey Job Seeker, It’s Time To Get Up And Get Hired</h3></a>
                    <div class="meta-tags">
                        <span>October 10, 2015</span>
                        <span><a href="blog.html#">0 Comments</a></span>
                    </div>
                    <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>
                    <a class="btn btn-success" href="blog-single-post.html">Read More</a>
                </div>
            </div>

            <!-- Post -->
            <div class="post-container">
                <div class="post-content">
                    <a href="blog.html#"><h3>How to "Woo" a Recruiter and Land Your Dream Job</h3></a>
                    <div class="meta-tags">
                        <span>September 12, 2015</span>
                        <span><a href="blog.html#">0 Comments</a></span>
                    </div>
                    <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>
                    <a class="btn btn-success" href="blog-single-post.html">Read More</a>
                </div>
            </div>

            <!-- Post -->
            <div class="post-container">
                <div class="post-content">
                    <a href="blog.html#"><h3>11 Tips to Help You Get New Clients Through Cold Calling</h3></a>
                    <div class="meta-tags">
                        <span>August 27, 2015</span>
                        <span><a href="blog.html#">0 Comments</a></span>
                    </div>
                    <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>
                    <a class="btn btn-success" href="blog-single-post.html">Read More</a>
                </div>
            </div>
        </div>
        <div class="margin-bottom-40"></div>
    </div>
    <!-- Blog Posts / End -->


    <!-- Widgets -->
    <div class="five columns blog">

        <div class="widget">
            <div class="widget-box">
                <a href="" class="btn btn-warning btn-block">Blog Features</a>
                <a href="" class="btn btn-warning btn-block">In the Media</a>
                <a href="" class="btn btn-warning btn-block">Career Development</a>
                <a href="" class="btn btn-warning btn-block">CV & Cover Letters</a>
                <a href="" class="btn btn-warning btn-block">Interviews</a>
                <a href="" class="btn btn-warning btn-block">Tools</a>
                <a href="" class="btn btn-warning btn-block">Helpful Links/Resources</a>
            </div>    
        </div>

        <div class="widget">
            <div class="widget-box">
                <a href="" class="btn btn-info btn-block"><b>Donate</b></a>
            </div>    
        </div>

        <div class="widget">
            <div class="widget-box">
                add
            </div>    
        </div>

        

    </div>
    <!-- Widgets / End -->

</div>
@endsection