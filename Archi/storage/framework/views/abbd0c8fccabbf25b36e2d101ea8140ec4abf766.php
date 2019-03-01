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
                <li class="breadcrumb-item active" aria-current="page">List</li>
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
                <!--== Search Form Start ==-->
                <form action="<?php echo e(url('/admin/image')); ?>" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="image_title" placeholder="Image Title">
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-success">Search</button>
                    </div>
                  </div>
                </form>
                <!--== Search Form End ==-->
              </div>
            </div>

            <!--== Data table Start ==-->
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped">
                <caption>List of Blogs</caption>
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Service</th>
                    <th scope="col">Image</th>
                    <th scope="col">Serial No</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($image->IMAGE_TITLE); ?></td>
                    <td><?php echo e($image->SERVICE_NAME); ?></td>
                    <td>
                      <img src="/uploads/images/service/<?php echo e($image->IMAGE_PATH); ?>" alt="service" style="margin:0 auto; max-width: 80px; height: auto; display: block;">
                    </td>
                    <td><?php echo e($image->SL_NO); ?></td>
                    <td>
                      <?php if( $image->ACTIVE_STATUS == '1' ): ?>
                        <a href="/admin/image/status/<?php echo e($image->SERVICE_IMAGE_ID); ?>" class="active_status">Active</a>
                      <?php else: ?>
                        <a href="/admin/image/status/<?php echo e($image->SERVICE_IMAGE_ID); ?>" class="inactive_status">Inactive</a>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="/admin/image/show/<?php echo e($image->SERVICE_IMAGE_ID); ?>" class="btn btn-success">View</a>
                      <a href="/admin/image/edit/<?php echo e($image->SERVICE_IMAGE_ID); ?>" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>

            <?php echo e($images->links()); ?>

            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>