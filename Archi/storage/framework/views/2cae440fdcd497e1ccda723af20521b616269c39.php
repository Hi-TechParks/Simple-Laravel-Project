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

            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <a href="/admin/blog/edit/<?php echo e($blog->BLOG_ID); ?>" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="/admin/blog/update/<?php echo e($blog->BLOG_ID); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Category</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="blog_category">
                        <option value="">Select Category</option>
                        <?php $__currentLoopData = $blog_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($blog_cat->BLOG_CATEGORY_ID); ?>" <?php if($blog_cat->BLOG_CATEGORY_ID == $blog->BLOG_CATEGORY_ID): ?> selected <?php endif; ?>><?php echo e($blog_cat->CATEGORY_NAME); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>

                      <?php if($errors->has('blog_category')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('blog_category')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="blog_title" value="<?php echo e($blog->BLOG_TITLE); ?>" placeholder="Blog Title">

                      <?php if($errors->has('blog_title')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('blog_title')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="content" placeholder="Blog Content" rows="15"><?php echo e($blog->BLOG_CONTENT); ?></textarea>

                      <?php if($errors->has('content')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('content')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="blog_image" placeholder="Blog Image">

                      <?php if($errors->has('blog_image')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('blog_image')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Author</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="blog_author" value="<?php echo e($blog->BLOG_AUTHOR); ?>" placeholder="Blog Author">

                      <?php if($errors->has('blog_author')): ?>
                          <span class="error_msg">
                            <?php echo e($errors->first('blog_author')); ?>

                          </span>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publish Start</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="publish_start" value="<?php echo e($blog->PUBLISH_START_DATE); ?>" placeholder="Publish Start">

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
                      <input type="date" class="form-control" name="publish_end" value="<?php echo e($blog->PUBLISH_END_DATE); ?>" placeholder="Publish End">

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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>