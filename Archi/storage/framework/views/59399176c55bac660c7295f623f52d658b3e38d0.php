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
                <li class="breadcrumb-item"><a href="#">Image</a></li>
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
                    <a href="<?php echo e(URL('/admin/image/create')); ?>" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="<?php echo e(url('/admin/image/store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Name</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="service_title">
                        <option value="">Select Service</option>
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($service->SERVICE_ID); ?>"><?php echo e($service->SERVICE_NAME); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>

                      <?php if($errors->has('service_title')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('service_title')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Image Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="image_title" placeholder="Image Title">

                      <?php if($errors->has('image_title')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('image_title')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="image_file" placeholder="Image">

                      <?php if($errors->has('image_file')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('image_file')); ?>

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