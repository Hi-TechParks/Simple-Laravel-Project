            <nav id="column_left">  
              <ul class="nav nav-list">
                  <li><h4>Dashboard</h4></li> 
                  <li class="<?php echo e(Request::path() == 'admin/blogcate' ? 'active' : ''); ?> <?php echo e(Request::path() == 'admin/blogcate/create' ? 'active' : ''); ?>">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#blogcate">
                        <span class="nav-header-primary">Blog Category <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="blogcate">
                      <li><a href="<?php echo e(url('/admin/blogcate')); ?>">Category List</a></li>
                      <li><a href="<?php echo e(url('/admin/blogcate/create')); ?>">Create Category</a></li>
                    </ul>
                  </li>
                  <li class="<?php echo e(Request::path() == 'admin/blog' ? 'active' : ''); ?> <?php echo e(Request::path() == 'admin/blog/create' ? 'active' : ''); ?>">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#blogs">
                        <span class="nav-header-primary">Blog <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="blogs">
                      <li><a href="<?php echo e(url('/admin/blog')); ?>">Blog List</a></li>
                      <li><a href="<?php echo e(url('/admin/blog/create')); ?>">Create Blog</a></li>
                    </ul>
                  </li>
                  <li class="<?php echo e(Request::path() == 'admin/news' ? 'active' : ''); ?> <?php echo e(Request::path() == 'admin/news/create' ? 'active' : ''); ?>">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#news_event">
                        <span class="nav-header-primary">News & Event <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="news_event">
                      <li><a href="<?php echo e(url('/admin/news')); ?>">News List</a></li>
                      <li><a href="<?php echo e(url('/admin/news/create')); ?>">Create News</a></li>
                    </ul>
                  </li>
                  <li class="<?php echo e(Request::path() == 'admin/service' ? 'active' : ''); ?> <?php echo e(Request::path() == 'admin/service/create' ? 'active' : ''); ?>">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#service">
                        <span class="nav-header-primary">Services <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="service">
                      <li><a href="<?php echo e(url('/admin/service')); ?>">Service List</a></li>
                      <li><a href="<?php echo e(url('/admin/service/create')); ?>">Create Service</a></li>
                    </ul>
                  </li>
                  <li class="<?php echo e(Request::path() == 'admin/image' ? 'active' : ''); ?> <?php echo e(Request::path() == 'admin/image/create' ? 'active' : ''); ?>">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#image">
                        <span class="nav-header-primary">Service Images <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="image">
                      <li><a href="<?php echo e(url('/admin/image')); ?>">Images List</a></li>
                      <li><a href="<?php echo e(url('/admin/image/create')); ?>">Create Image</a></li>
                    </ul>
                  </li>
              </ul>
            </nav>