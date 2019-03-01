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
                <form action="<?php echo e(url('/admin/news')); ?>" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="event_title" placeholder="News / Event Title">
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
                <caption>List of Events</caption>
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Event Date</th>
                    <th scope="col">Publish Start</th>
                    <th scope="col">Publish End</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($event->EVENT_TITLE); ?></td>
                    <td><?php echo e($event->EVENT_DATE); ?></td>
                    <td><?php echo e($event->PUBLISH_START_DATE); ?></td>
                    <td><?php echo e($event->PUBLISH_END_DATE); ?></td>
                    <td>
                      <?php if( $event->ACTIVE_STATUS == '1' ): ?>
                        <a href="/admin/news/status/<?php echo e($event->EVENT_ID); ?>" class="active_status">Active</a>
                      <?php else: ?>
                        <a href="/admin/news/status/<?php echo e($event->EVENT_ID); ?>" class="inactive_status">Inactive</a>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="/admin/news/show/<?php echo e($event->EVENT_ID); ?>" class="btn btn-success">View</a>
                      <a href="/admin/news/edit/<?php echo e($event->EVENT_ID); ?>" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>

            <?php echo e($events->links()); ?>

            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>