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
                <li class="breadcrumb-item"><a href="#">Blog Category</a></li>
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

            <?php $__currentLoopData = $blog_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <a href="/admin/blogcate/edit/<?php echo e($blog_cat->BLOG_CATEGORY_ID); ?>" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="/admin/blogcate/update/<?php echo e($blog_cat->BLOG_CATEGORY_ID); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Category</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="blog_category" value="<?php echo e($blog_cat->CATEGORY_NAME); ?>" placeholder="Category Name">

                      <?php if($errors->has('blog_category')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('blog_category')); ?>

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