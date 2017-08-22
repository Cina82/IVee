<?php $__env->startSection('content'); ?>
<div class="clearfix"></div>
<div id="titlebar" class="single">
    <div class="container">
        <div class="sixteen columns">
            <h2>Entrepreneurship</h2>
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="">Home</a></li>
                    <li>Entrepreneurship</li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h4 class="text-center">Listed Businesses, Enterprises and Charitable Organisation</h4>
            <p class="text-center">List your business in our Online Directory so that customers and clients can find you easily. List your business by clicking <a href="#table-form">Here</a></p>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Advertising & Marketing</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Affiliate and Partner Programs</a>
                </div>

                <div class="col-md-4">
                    <a href="">Agricultural & Farm</a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <a href="">ATM Machines & Processing</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Audio & Video</a>
                </div>

                <div class="col-md-4">
                    <a href="">Automotive</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Beauty / Personal Care & Cosmetics</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Business and Financial Services</a>
                </div>

                <div class="col-md-4">
                    <a href="">Business for Baby Boomers</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Business Opportunities for Sale</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Business Services, B2B & Business Training</a>
                </div>

                <div class="col-md-4">
                    <a href="">Carpet & Dry Cleaning / Laundry</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Cleaning Services</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Clothing</a>
                </div>

                <div class="col-md-4">
                    <a href="">Coffee</a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <a href="">Computer / Software / IT Consulting</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Consulting</a>
                </div>

                <div class="col-md-4">
                    <a href="">Contractors / Construction</a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <a href="">Copying & Publishing</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Direct Selling</a>
                </div>

                <div class="col-md-4">
                    <a href="">Distributorship</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Education / Tutoring & Personal Development</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Development Energy</a>
                </div>

                <div class="col-md-4">
                    <a href="">Entertainment</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="">Environmental</a>
                </div>
                
                <div class="col-md-4">
                    <a href="">Fast Food</a>
                </div>

                <div class="col-md-4">
                    <a href="">Financial services</a>
                </div>
            </div>


        </div>


        <div class="col-md-4"> 
            <h4 class="text-center">Ideas, Innovations & Partnerships</h4>
            <p class="text-center">Pitch your business ideas; Seek collaborators and funding. You can post your pitch <a href="#table-form">Here</a></p>

            <div class="widget-box" style="text-align: center;">
                <a href="">Seeking Collaborators...
                    <img src="<?php echo e(URL::to('frontend/images/3000thumb-1920-711818.jpg')); ?>" style="width: 100%">
                </a>

            </div>

             <div class="widget text-center">
            <div class="widget-box" style="text-align: center;">
                <a href="" class="btn btn-info btn-block">Donate</a>
            </div>
        </div>


        </div>
    </div>

    <div class="row"> 
        <hr>
        <div class="col-md-6" id="table-form">
            <h4 class="text-center">List Your Business, Enterprise and Charitable Organisation</h4>
            <hr>
            <form method="post" name="contactform" id="contactform">
                <div class="form-group">
                    <label>Company Name:</label>
                    <input name="company_name" type="text" id="company_name" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>    

                <div class="form-group">
                    <label>Phone:</label>
                    <input name="phone" type="text" id="phone" class="form-control" />
                </div>

                <div class="form-group">
                    <label >Email:</label>
                    <input name="email" type="email" id="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Website:</label>
                    <input name="website" type="url" id="website" class="form-control" />
                </div>


                <div class="form-group">
                    <label>Business Details:</label>
                    <textarea name="comment" class="form-control" id="comment" spellcheck="true"></textarea>
                </div>

                <div class="form-group">
                    <label>Company Logo:</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <div class="form-group">
                    <label>&nbsp;</label>
                    <input type="submit" id="submit" class="btn btn-success" value="Submit" />
                </div>
            </form>

        </div>

        <div class="col-md-6">
            <h4 class="text-center">Events and Exhibitions</h4>
            <hr>

        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>