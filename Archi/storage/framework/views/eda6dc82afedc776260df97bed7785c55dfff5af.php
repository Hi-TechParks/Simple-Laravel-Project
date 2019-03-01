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
                <li class="breadcrumb-item"><a href="#">News & Event</a></li>
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
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                    
                  </div>
                  <div class="col-md-2">
                    <a href="<?php echo e(URL('/admin/news/create')); ?>" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="<?php echo e(url('/admin/news/store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Event Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="event_title" placeholder="Event Title">

                      <?php if($errors->has('event_title')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('event_title')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Event Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="content" placeholder="Event Content" rows="15"></textarea>

                      <?php if($errors->has('content')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('content')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Event Date</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="event_date" placeholder="Event Date">

                      <?php if($errors->has('event_date')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('event_date')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Event Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="event_image" placeholder="Event Image">

                      <?php if($errors->has('event_image')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('event_image')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publish Start</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="publish_start" placeholder="Publish Start">

                      <?php if($errors->has('publish_start')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('publish_start')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publish End</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="publish_end" placeholder="Publish End">

                      <?php if($errors->has('publish_end')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('publish_end')); ?>

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