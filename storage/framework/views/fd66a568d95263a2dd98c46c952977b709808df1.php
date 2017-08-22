<?php $__env->startSection('content'); ?>

  <div class="col-md-5 col-md-offset-4 center-block" style="margin: 0 auto; float: none;">
            <h2 class="text-center">Welcome back</h1>
            <div class="panel panel-default">
                
                <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="<?php echo e(URL::to('register')); ?>">
                        <?php echo e(csrf_field()); ?>

                         <div class="form-group">
                        <div class="col-md-6">
                        <label for="name" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">First Name</label>
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                                 <input type="hidden" name="id" value="4">   
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <label for="familyName" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">Family Name</label>
                        <div class="form-group<?php echo e($errors->has('familyName') ? ' has-error' : ''); ?>">
                            
                            <div class="col-md-12">
                                <input id="familyName" type="text" class="form-control" name="familyName" required autofocus>

                                <?php if($errors->has('familyName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('familyName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <label for="phoneNumber" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">Phone Number</label>

                        <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                            
                            <div class="col-md-12">
                                <input id="mobile" type="text" class="form-control" name="mobile" required>
                                <?php if($errors->has('mobile')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('mobile')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <label for="zipCode" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">Zip Code</label>

                        <div class="form-group<?php echo e($errors->has('zipCode') ? ' has-error' : ''); ?>">
                            
                            <div class="col-md-12">
                                <input id="zipCode" type="text" class="form-control" name="zipCode" required>
                                <?php if($errors->has('zipCode')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('zipCode')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        

                        <div class="col-md-12">
                        <label for="email" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">Email</label>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <label for="password" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">Password</label>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        
                        
                            <div class="col-md-12">
                                <button type="submit" class="mybtn btn-block btn-lg" style="background-color: #3f93f3 !important; color: #fff">
                                    Create Account
                                </button>

                            </div>
                        
                       <?php echo $__env->make('partials.socials-icons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </form>
                </div>
            </div>
            <div class="col-md-12"></div>
            <div class="form-group text-center">Don't have an account?<a href="" style="text-decoration: none;">Sign up</a>.</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>