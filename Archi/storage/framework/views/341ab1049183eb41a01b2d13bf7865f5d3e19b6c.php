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
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
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

            <!--== Data View Card Start ==-->
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
              <img src="/uploads/images/blog/<?php echo e($blog->BLOG_IMAGE); ?>" class="card-img-top" alt="Event">
              <div class="card-body">
                <h5 class="card-title"><?php echo e($blog->BLOG_TITLE); ?></h5>
                <p class="card-text"><?php echo $blog->BLOG_CONTENT; ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Author: <?php echo e($blog->BLOG_AUTHOR); ?></li>
                <li class="list-group-item">Category: <?php echo e($blog->CATEGORY_NAME); ?></li>
                <li class="list-group-item">Publish Start: <?php echo e($blog->PUBLISH_START_DATE); ?></li>
                <li class="list-group-item">Publish End: <?php echo e($blog->PUBLISH_END_DATE); ?></li>
                <li class="list-group-item">
                  <?php if( $blog->ACTIVE_STATUS == '1' ): ?>
                    <p class="active_status">Active</p>
                  <?php else: ?>
                    <p class="inactive_status">Inactive</p>
                  <?php endif; ?>
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/blog/edit/<?php echo e($blog->BLOG_ID); ?>" class="btn btn-primary">Edit</a>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--== Data View Card End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>