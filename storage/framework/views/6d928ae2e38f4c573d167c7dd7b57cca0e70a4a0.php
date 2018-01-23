<?php $__env->startSection('contents'); ?>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        About Us
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <div class="box-body pad">
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a data-toggle="tab" href="#tab_1" aria-expanded="true">Section 1</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#tab_2" aria-expanded="false">Section 2</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#tab_3" aria-expanded="false">Section 3</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#tab_4" aria-expanded="false">Section 4</a>
                    </li>
                  </ul>
  
                  <div class="tab-content">


                    <div id="tab_1" class="tab-pane active">
                       <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('admin/about_us')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <?php $__currentLoopData = $about1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <textarea id="editor1" name="aboutus" rows="10" cols="80"><?php echo e($a1->contents); ?></textarea>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group">  
                          <br>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </form>  
                      <script>
                        CKEDITOR.replace('editor1');
                      </script>
                    </div>
                    




                    <div id="tab_2" class="tab-pane ">
                      <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('admin/about_us2')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                        <?php $__currentLoopData = $about2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group col-md-12">
                          <label>Description</label>
                          <input type="text" name="title" class="form-control" value="<?php echo e($a2->contents); ?>">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                        <div class="col-md-4">
                          <?php $__currentLoopData = $about3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name1" class="form-control" value="<?php echo e(json_decode($a3->contents)->name); ?>">
                          </div>

                          <div class="form-group">
                            <label>qualification</label>
                            <input type="text" name="qua1" class="form-control" value="<?php echo e(json_decode($a3->contents)->qua); ?>">
                          </div>
                          
                          <div class="form-group">
                            <label>designation</label>
                            <input type="text" name="des1" class="form-control" value="<?php echo e(json_decode($a3->contents)->des); ?>">
                          </div>

                          <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email1" class="form-control" value="<?php echo e(json_decode($a3->contents)->email); ?>">
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

                          <div class="form-group">
                            <input type="file" name="image1">
                          </div>
                          <?php $__currentLoopData = $about6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a6): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($a6->contents); ?>" style="width: 100%;">
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                       

                        <div class="col-md-4">
                          <?php $__currentLoopData = $about4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name2" class="form-control" value="<?php echo e(json_decode($a4->contents)->name); ?>">
                          </div>

                          <div class="form-group">
                            <label>qualification</label>
                            <input type="text" name="qua2" class="form-control" value="<?php echo e(json_decode($a4->contents)->qua); ?>">
                          </div>
                          
                          <div class="form-group">
                            <label>designation</label>
                            <input type="text" name="des2" class="form-control" value="<?php echo e(json_decode($a4->contents)->des); ?>">
                          </div>

                          <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email2" class="form-control" value="<?php echo e(json_decode($a4->contents)->email); ?>">
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <div class="form-group">
                            <input type="file" name="image2">
                          </div>
                           <?php $__currentLoopData = $about7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a7): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($a7->contents); ?>" style="width: 100%;">
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        

                        
                        <div class="col-md-4">
                          <?php $__currentLoopData = $about5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name3" class="form-control" value="<?php echo e(json_decode($a5->contents)->name); ?>">
                          </div>

                          <div class="form-group">
                            <label>qualification</label>
                            <input type="text" name="qua3" class="form-control" value="<?php echo e(json_decode($a5->contents)->qua); ?>">
                          </div>
                          
                          <div class="form-group">
                            <label>designation</label>
                            <input type="text" name="des3" class="form-control" value="<?php echo e(json_decode($a5->contents)->des); ?>">
                          </div>

                          <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email3" class="form-control" value="<?php echo e(json_decode($a5->contents)->email); ?>">
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <div class="form-group">
                            <input type="file" name="image3">
                          </div>
                           <?php $__currentLoopData = $about8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a8): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($a8->contents); ?>" style="width: 100%;">
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="form-group col-md-12">  
                          <br>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                        </div>
                      </form>  
                    </div>  
                    



                    <div id="tab_3" class="tab-pane ">
                      <h3>Why you should Advertise Your Jobs with Myjobo.com</h3>
                      <hr>
                       <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('admin/about_us3')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">

                          <?php $__currentLoopData = $about9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a9): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-12 form-group">  
                            <label>Title 1</label>
                            <input type="text" name="title1" class="form-control" value="<?php echo e(json_decode($a9->contents)->title); ?>">
                          </div>
                          <div class="col-md-12 form-group">  
                            <label>Description 1</label>
                            <textarea name="dec1" class="form-control"><?php echo e(json_decode($a9->contents)->dec); ?></textarea>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <?php $__currentLoopData = $about10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a10): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-12 form-group">  
                            <label>Title 2</label>
                            <input type="text" name="title2" class="form-control" value="<?php echo e(json_decode($a10->contents)->title); ?>">
                          </div>
                          <div class="col-md-12 form-group">  
                            <label>Description 2</label>
                            <textarea name="dec2" class="form-control"><?php echo e(json_decode($a10->contents)->dec); ?></textarea>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <?php $__currentLoopData = $about11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a11): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-12 form-group">  
                            <label>Title 3</label>
                            <input type="text" name="title3" class="form-control" value="<?php echo e(json_decode($a11->contents)->title); ?>">
                          </div>
                          <div class="col-md-12 form-group">  
                            <label>Description 3</label>
                            <textarea name="dec3" class="form-control"><?php echo e(json_decode($a11->contents)->dec); ?></textarea>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <?php $__currentLoopData = $about12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-12 form-group">  
                            <label>Title 4</label>
                            <input type="text" name="title4" class="form-control" value="<?php echo e(json_decode($a12->contents)->title); ?>">
                          </div>
                          <div class="col-md-12 form-group">  
                            <label>Description 4</label>
                            <textarea name="dec4" class="form-control"><?php echo e(json_decode($a12->contents)->dec); ?></textarea>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                      

                        <div class="form-group col-md-12">  
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                        </div>
                      </form>  
                  
                    </div>  



                    <div id="tab_4" class="tab-pane ">
                      <h3>As featured in</h3>  
                      <hr>
                      <div class="row">
                      <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('admin/about_us4')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label>Image:</label>
                            <input type="file" name="img">
                          </div>
                          <div class="col-md-12 form-group">
                            <label>Link:</label>
                            <input type="text" name="link" class="form-control">
                          </div>
                          <div class="col-md-12 form-group">  
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </form>  
                       <div class="col-md-12">
                          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $__currentLoopData = $about13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a13): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($a13->image); ?>" style="width: 50px; height: 50px;"></td>
                                    <td><?php echo e($a13->link); ?></td>
                                    <td>
                                      <a href="<?php echo e(URL::to('admin/aboutdelete')); ?>/<?php echo e($a13->f_id); ?>">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 15px;"></i>
                                      </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                              </tbody>
                            </table>    
                       </div>
                      </div>
                    </div>
                  </div>  
                </div>  
              </div>
          </div>
      </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>