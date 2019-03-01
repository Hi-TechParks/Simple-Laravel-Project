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
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
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

            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    
                    <?php echo $__env->make('admin.inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                  </div>
                  <div class="col-md-2">
                    <a href="/admin/service/edit/<?php echo e($service->SERVICE_ID); ?>" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="/admin/service/update/<?php echo e($service->SERVICE_ID); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="service_title" value="<?php echo e($service->SERVICE_NAME); ?>" placeholder="Service Title">

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
                        <option value="<?php echo e($parent_service->SERVICE_ID); ?>" <?php if( $parent_service->SERVICE_ID == $service->PARENT_SERVICE_ID ): ?> selected <?php endif; ?>><?php echo e($parent_service->SERVICE_NAME); ?></option>
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
                      <textarea class="form-control" name="content" placeholder="Service Content" rows="15"><?php echo e($service->SERVICE_DESC); ?></textarea>

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
                        <option value="1" <?php if( $service->HOME_PAGE_SHOW == 1): ?> selected <?php endif; ?>>Yes</option>
                        <option value="0" <?php if( $service->HOME_PAGE_SHOW == 0): ?> selected <?php endif; ?>>No</option>
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
                      <input type="number" class="form-control" name="serial_no" value="<?php echo e($service->SL_NO); ?>" placeholder="Serial No">

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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>