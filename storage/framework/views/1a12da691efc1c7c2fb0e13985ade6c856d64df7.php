<?php $__env->startSection('content'); ?>
<div class="clearfix"></div>
<div id="titlebar" class="single">
    <div class="container">
        <div class="sixteen columns">
            <h2>Contact Us</h2>
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="container">

    <div class="eleven columns">
        <h3 class="margin-bottom-15">Contact Form</h3>
        <section id="" class="padding-right">
            
            <form method="post" name="contactform" id="contactform">
                <div class="form-group">
                    <label>Name:<span>*</span></label>
                    <input name="name" type="text" id="name" class="form-control" />
                </div>

                <div class="form-group">
                    <label >Email: <span>*</span></label>
                    <input name="email" type="email" id="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Phone: <span>*</span></label>
                    <input name="phone" type="text" id="phone" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="comment" class="form-control" id="comment" spellcheck="true"></textarea>
                </div>

                <div class="form-group">
                    <label>&nbsp;</label>
                    <input type="submit" id="submit" class="btn btn-success" value="Send Message" />
                </div>
            </form>
            <br>    
        </section>
    </div>
    
    <div class="five columns">
        <h3 class="margin-bottom-10">Information</h3>
        <div class="widget-box" style="padding: 32px 15px;">
            <p>Tell us what you think. You can also contact us by phone:</p>
            <p>Lilongwe: +265 884597387</p>   
            <p>Blantyre: +265 991023288</p>
            <p>Email Address : <a href="mailto:info@myjobo.com">info@myjobo.com</a></p>
            <p>Our Postal Address is:</p>
            <p>P.O. Box 30511, Lilongwe 3, Malawi.</p>    
        </div>
</div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>