<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--== Page Header Start ==-->
    <section class="section mt-50" id="page-header" style="background-image:url('/uploads/images/event/<?php echo e($event->IMAGE_PATH); ?>')">
      
    </section>
    <!--== Page Header End ==-->


    <!--== Details Page Start ==-->
    <section class="section" id="details-page">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <h1><?php echo e($event->EVENT_TITLE); ?></h1>
            <div class="news-box-meta">
              <?php echo e(date('d, M', strtotime($event->EVENT_DATE ))); ?>

            </div>
            <p><?php echo $event->EVENT_DESC; ?></p>

          </div>

        </div>
      </div>
    </section>
    <!--== Details Page End ==-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>