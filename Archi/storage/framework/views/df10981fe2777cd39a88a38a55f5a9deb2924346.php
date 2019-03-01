<?php $__env->startSection('content'); ?>

    
    <!--== News & Event Area Start ==-->
    <section class="section mt-50" id="news-event">
      <div class="container">

        <!--== Section Title Area ==-->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title-area">
              <h2 class="section-title">News & Events</h2>
              <p class="section-subtitle">Some news about our activities</p>
            </div>
          </div>
        </div>
        <!--== Section Title Area ==-->

        <div class="row">

          <!-- ===  Text Shorten Code  ====  -->
          <?php
            // code for shortening the big content fetched from database
             function EventtextShorten($text, $limit = 150){
                $text = $text." ";
                $text = substr($text, 0, $limit);
                $text = substr($text, 0, strrpos($text, " "));
                $text = $text;
                return $text;
            }
          ?> 
          <!-- ===  Text Shorten Code  ====  -->

          <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!--== Single News Box ==-->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="/uploads/images/event/<?php echo e($event->IMAGE_PATH); ?>" class="img-fluid mx-auto d-block" alt="Photo">
                  <div class="news-box-meta">
                    <?php echo e(date('d', strtotime($event->EVENT_DATE))); ?>

                    <br/><span><?php echo e(date('M', strtotime($event->EVENT_DATE))); ?></span>
                  </div>
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="/news/single/<?php echo e($event->  EVENT_ID); ?>"><?php echo e($event->EVENT_TITLE); ?></a></h5>
                    <p class="card-text"><?php echo EventtextShorten($event->EVENT_DESC); ?></p>

                    <a class="read-more" href="/news/single/<?php echo e($event->  EVENT_ID); ?>">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <!--== Single News Box ==-->
          <!-- <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  <div class="news-box-meta">
                    04<br/><span>Jan</span>
                  </div>
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!--== Single News Box ==-->

        </div>

        <!--== Pagination section ==-->
        <div class="pagination-section">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <?php echo e($events->links()); ?>

            </ul>
          </nav>
        </div>  
        <!--== Pagination section ==-->
      </div>
      
    </section>
    <!--== News & Event Area End ==-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>