<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--== Page Header Start ==-->
    <section class="section mt-50" id="page-header" style="background-image:url('/uploads/images/blog/<?php echo e($blog->BLOG_IMAGE); ?>')">
      
    </section>
    <!--== Page Header End ==-->


    <!--== Details Page Start ==-->
    <section class="section" id="details-page">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <h1><?php echo e($blog->BLOG_TITLE); ?></h1>
            <div class="blog-box-meta">
              <span class="date"><i class="far fa-clock"></i> : <?php echo e(date('d M', strtotime($blog->PUBLISH_START_DATE))); ?></span>
              <span class="author"><i class="fas fa-user"></i> : <?php echo e($blog->BLOG_AUTHOR); ?></span>
            </div>
            <p><?php echo $blog->BLOG_CONTENT; ?></p>

          </div>

        </div>
      </div>
    </section>
    <!--== Details Page End ==-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>