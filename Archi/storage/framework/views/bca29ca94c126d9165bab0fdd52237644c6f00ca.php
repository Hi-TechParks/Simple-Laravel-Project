<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Process Consultants ltd</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/all.min.css')); ?>">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jquery.fancybox.min.css')); ?>">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/summernote.css')); ?>">

    <!-- Google Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i,700,700i,900,900i" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    
  </head>
  <body data-spy="scroll" data-target="#navbarSupportedContent">
    

    <section id="header-navbar" class="fixed-top">

      <section class="top-navbar">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-left" style="font-size: 18px;">
              Process Consultants ltd.
            </div>
            <div class="col-md-4">
              
            </div>
            <div class="col-md-4">
              <span><i class="fas fa-phone"></i> </span> +88 01855-596628, +88 01537-035027
            </div>
          </div>
        </div>
      </section>

      <!--== Main Navbar Area Start ==-->
      <section class="navbar-main-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" alt="logo"></a>

              <nav class="navbar navbar-expand-lg navbar-light">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo e(Request::path() == '/' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'services' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/services')); ?>">Services</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'books' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/books')); ?>">Book & Publications</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'blogs' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/blogs')); ?>">Blog</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'news' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/news')); ?>">News & Event</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'clients' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/clients')); ?>">Client</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'about' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/about')); ?>">About</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'contact' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact</a>
                    </li>


                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?> -->
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>

                  </ul>
                </div>
              </nav>

            </div>
          </div>
        </div>
      </section>
      <!--== Main Navbar Area End ==-->
    </section>



    <!--== Main Body Area Start ==-->

    <?php echo $__env->yieldContent('content'); ?>

    <!--== Main Body Area End ==-->



    <!--== Main Footer Area Start ==-->
    <section class="section" id="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
          </div>

          <!--== Single Footer Area ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <h4 class="single-footer-title footer-brand"><a href="/"><img src="/assets/img/logo.png" alt="logo"></a></h4>

              <div class="company-slogan">Inspire your Design Solutions</div>

              <ul class="social-links">
                <li><a href="#"><span><i class="fab fa-facebook-f"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-twitter"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-google-plus-g"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-linkedin-in"></i></span></a></li>
              </ul>
              
              
            </div>
          </div>
          <!--== Single Footer Area ==-->

          <!--== Single Footer Area ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <h4 class="single-footer-title">Useful links</h4>

              <ul class="footer-links">
                <li><a href="/blogs">Blog</a></li>
                <li><a href="/news">News & Events</a></li>
                <li><a href="/books">Book & Publications</a></li>
                <li><a href="/clients">Client</a></li>
              </ul>
            </div>
          </div>
          <!--== Single Footer Area ==-->

          <!--== Single Footer Area ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <h4 class="single-footer-title">Services</h4>

              <ul class="footer-links">
                <li><a href="/service/interior">Interior</a></li>
                <li><a href="/service/exterior">Exterior</a></li>
                <li><a href="/service/details">Design</a></li>
                <li><a href="/service/building">Steel Building</a></li>
              </ul>
            </div>
          </div>
          <!--== Single Footer Area ==-->

          <!--== Single Footer Area ==-->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <h4 class="single-footer-title">Terms</h4>

              <ul class="footer-links">
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="#">Terms</a></li>
              </ul>
            </div>
          </div> -->
          <!--== Single Footer Area ==-->
          
        </div>
      </div>

      <!--== Footer Copywrite Area Start ==-->
      <div class="container" id="footer-bottom">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">

          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="copywrite">
              Copyright &copy; 2019 Process Consultants ltd.
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="poweredby">
              Developed by <a href="http://www.biziitech.com/" target="_blank">Biziitech</a>
            </div>
          </div>
        </div>
      </div>
      <!--== Footer Copywrite Area End ==-->

    </section>
    <!--== Main Footer Area End ==-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- Font Awesome JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/all.min.js')); ?>"></script>
    <!-- Fancybox JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.fancybox.min.js')); ?>"></script>
    <!-- Owl Carousel JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <!-- Ckeditor JS -->
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>

  </body>
</html>