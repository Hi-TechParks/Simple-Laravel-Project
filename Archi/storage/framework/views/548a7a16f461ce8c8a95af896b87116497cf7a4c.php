<?php $__env->startSection('content'); ?>


    <!--== Dashboard Area Start ==-->
    <section class="section mt-50" id="deshboard">
      <div class="container">
        <!--== Dashboard Breadcrumb Start ==-->
        <div class="row">
          <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Service</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--== Dashboard Breadcrumb End ==-->

        <div class="row">
          <!--== Dashboard Sidebar Start ==-->
          <aside class="col-md-3">
            <?php echo $__env->make('admin.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </aside>
          <!--== Dashboard Sidebar End ==-->

          <!--== Dashboard Main Start ==-->
          <main class="col-md-9">

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    
                    <?php echo $__env->make('admin.inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                  </div>
                  <div class="col-md-2">
                    <a href="<?php echo e(URL('/admin/service/create')); ?>" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="<?php echo e(url('/admin/service/store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="service_title" placeholder="Service Title">

                      <?php if($errors->has('service_title')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('service_title')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Parent Service (optional)</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="parent_service">
                        <option value="">Select Parent</option>
                        <?php $__currentLoopData = $parent_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($parent_service->SERVICE_ID); ?>"><?php echo e($parent_service->SERVICE_NAME); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>

                      <?php if($errors->has('parent_service')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('parent_service')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="content" placeholder="Service Content" rows="15"></textarea>

                      <?php if($errors->has('content')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('content')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="service_image" placeholder="Service Image">

                      <?php if($errors->has('service_image')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('service_image')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Show On Home</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="show_on_home" required="">
                        <option value="">Select</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>

                      <?php if($errors->has('show_on_home')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('show_on_home')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Serial No</label>
                    <div class="col-sm-8">
                      <?php $__currentLoopData = $serial_nos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serial_no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <input type="number" class="form-control" name="serial_no" placeholder="Serial No" value="<?php echo e($serial_no->SL_NO + 1); ?>">
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
                      <?php if($serial_nos->isEmpty()): ?>
                      <input type="number" class="form-control" name="serial_no" placeholder="Serial No" value="1">
                      <?php endif; ?>

                      <?php if($errors->has('serial_no')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('serial_no')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
                <!--== Data Form End ==-->
              </div>
            </div>

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>