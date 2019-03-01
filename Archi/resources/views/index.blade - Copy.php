@extends('layout.master')
@section('content')


    <!--== Slider Area Start ==-->
  	<section class="mt-50" id="slider">
  		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		  <ol class="carousel-indicators">
  		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		  </ol>
  		  <div class="carousel-inner">
  		    <div class="carousel-item active">
  		      <img src="assets/img/slider/slider1.png" class="d-block w-100" alt="...">
              <div class="carousel-caption">
        				<div class="carousel-caption-inner-box">
                  <div>
          					<h2 class="animated zoomIn">
                      We are<br/>
                      Design Solution<br/>
                      Agency
                    </h2>
                    <a href="/contact">Contact Now</a>
                    <div class="slide-arrow">
                      We do Interior Design
                      <span><a  href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fas fa-long-arrow-alt-left"></i></a></span>
                      <span><a  href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fas fa-long-arrow-alt-right"></i></a></span>
                    </div>
                  </div>
        				</div>
              </div>
  		    </div>
  		    <div class="carousel-item">
  		      <img src="assets/img/slider/slider2.png" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <div class="carousel-caption-inner-box">
                  <div>
                    <h2 class="animated zoomIn">
                      We are<br/>
                      Design Solution<br/>
                      Agency
                    </h2>
                    <a href="/contact">Contact Now</a>
                    <div class="slide-arrow">
                      We do Interior Design
                      <span><a  href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fas fa-long-arrow-alt-left"></i></a></span>
                      <span><a  href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fas fa-long-arrow-alt-right"></i></a></span>
                    </div>
                  </div>
                </div>
              </div>
  		    </div>
          <div class="carousel-item">
            <img src="assets/img/slider/slider2.png" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <div class="carousel-caption-inner-box">
                  <div>
                    <h2 class="animated zoomIn">
                      We are<br/>
                      Design Solution<br/>
                      Agency
                    </h2>
                    <a href="/contact">Contact Now</a>
                    <div class="slide-arrow">
                      We do Interior Design
                      <span><a  href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fas fa-long-arrow-alt-left"></i></a></span>
                      <span><a  href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fas fa-long-arrow-alt-right"></i></a></span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
  		  </div>

  		</div>
  	</section>
    <!--== Slider Area End ==-->



    <!--== Service Area Start ==-->
    <section class="section" id="services">
      <div class="container">

        <!--== Section Title Area ==-->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title-area">
              <h2 class="section-title">Services</h2>
              <p class="section-subtitle">We offer a wide Range of services.</p>
            </div>
          </div>
        </div>
        <!--== Section Title Area ==-->

        <div class="row">

          <!--== Single Service ==-->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="assets/img/services/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                <a href="/service/interior">
                  <div class="services-gallery-overlay">
                    <div class="services-gallery-details">
                      
                    </div>
                  </div>
                </a>
              </div>
              <div class="services-title">
                <a href="/service/interior">Interior</a>
              </div>
            </div>
          </div>
          <!--== Single Service ==-->

          <!--== Single Service ==-->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="assets/img/services/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                <a href="/service/exterior">
                  <div class="services-gallery-overlay">
                    <div class="services-gallery-details">
                      
                    </div>
                  </div>
                </a>
              </div>
              <div class="services-title">
                <a href="/service/exterior">Exterior</a>
              </div>
            </div>
          </div>
          <!--== Single Service ==-->

          <!--== Single Service ==-->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="assets/img/services/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                <a href="/service/details">
                  <div class="services-gallery-overlay">
                    <div class="services-gallery-details">
                      <span class="services-gallery-overlay-title">We Do</span>
                      <ul>
                        <li><a href="/service/details"><span><i class="far fa-check-circle"></i></span> Logo Design</a></li>
                        <li><a href="/service/details"><span><i class="far fa-check-circle"></i></span> Corporate Design</a></li>
                        <li><a href="/service/details"><span><i class="far fa-check-circle"></i></span> Billboard Design</a></li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>
              <div class="services-title">
                <a href="/service/details">Design</a>
              </div>
            </div>
          </div>
          <!--== Single Service ==-->

          <!--== Single Service ==-->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="assets/img/services/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                <a href="/service/building">
                  <div class="services-gallery-overlay">
                    <div class="services-gallery-details">
                      
                    </div>
                  </div>
                </a>
              </div>
              <div class="services-title">
                <a href="/service/building">Steel Building</a>
              </div>
            </div>
          </div>
          <!--== Single Service ==-->

        </div>
      </div>
    </section>
    <!--== Service Area End ==-->



    <!--== Blog Area Start ==-->
    <section class="section" id="news-event">
      <div class="container">

        <!--== Section Title Area ==-->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title-area">
              <h2 class="section-title">Blog</h2>
              <p class="section-subtitle">Know about the Some design solutions</p>
            </div>
          </div>
        </div>
        <!--== Section Title Area ==-->

        <div class="row">

          <div class="owl-carousel owl-theme" id="blog">
          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="news-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="news-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->
          </div>

        </div>
		
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<a href="/blogs" class="view-all">View All</a>
    			</div>
    		</div>
      </div>
      
    </section>
    <!--== Blog Area End ==-->



    <!--== News & Event Area Start ==-->
    <section class="section" id="news-event" style="background: rgba(196, 227, 230, 0.5)">
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

          <div class="owl-carousel owl-theme" id="news">
          <!--== Single News Box ==-->
          <div class="">
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
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
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
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
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
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
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
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
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
          </div>
          <!--== Single News Box ==-->

          <!--== Single News Box ==-->
          <div class="">
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
          </div>
          <!--== Single News Box ==-->
          </div>

        </div>
    
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="/news" class="view-all">View All</a>
          </div>
        </div>
      </div>
      
    </section>
    <!--== News & Event Area End ==-->



    <!--== Person Box Area Start ==-->
  	<section class="section" id="person-box">
  	  <div class="container">

        <!--== Section Title Area ==-->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title-area">
              <h2 class="section-title">Feedback</h2>
              <p class="section-subtitle">What People say about us</p>
            </div>
          </div>
        </div>
        <!--== Section Title Area ==-->

  	  	<div class="row">

          <div class="owl-carousel owl-theme" id="review">
            <!--== Single Person Box ==-->
    	  	  <div class="">
      		    <div class="card">
      		      <div class="card-body">
                  <div class="person-box-details">
        		        <div class="person-box-header">
                      <div class="card-icon"><i class="fas fa-quote-left"></i></div>
        		        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        		        </div>
                    <div class="person-box-footer">
                      <div class="person-box-info">
                        <h5 class="card-title">Mr. Abdul Rahman</h5>
                        <p class="card-text">CEO, Dhaka Bank.</p>
                      </div>
                    </div>
                  </div>
                  <div class="person-box-image">
                    <img src="assets/img/feedback/1.png" class="img-fluid mx-auto d-block">
                  </div>
      		      </div>
      		    </div>
      		  </div>
            <!--== Single Person Box ==-->

            <!--== Single Person Box ==-->
            <div class="">
              <div class="card">
                <div class="card-body">
                  <div class="person-box-details">
                    <div class="person-box-header">
                      <div class="card-icon"><i class="fas fa-quote-left"></i></div>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>
                    <div class="person-box-footer">
                      <div class="person-box-info">
                        <h5 class="card-title">Mr. Abdul Rahman</h5>
                        <p class="card-text">CEO, Dhaka Bank.</p>
                      </div>
                    </div>
                  </div>
                  <div class="person-box-image">
                    <img src="assets/img/feedback/1.png" class="img-fluid mx-auto d-block">
                  </div>
                </div>
              </div>
            </div>
            <!--== Single Person Box ==-->

            <!--== Single Person Box ==-->
            <div class="">
              <div class="card">
                <div class="card-body">
                  <div class="person-box-details">
                    <div class="person-box-header">
                      <div class="card-icon"><i class="fas fa-quote-left"></i></div>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>
                    <div class="person-box-footer">
                      <div class="person-box-info">
                        <h5 class="card-title">Mr. Abdul Rahman</h5>
                        <p class="card-text">CEO, Dhaka Bank.</p>
                      </div>
                    </div>
                  </div>
                  <div class="person-box-image">
                    <img src="assets/img/feedback/1.png" class="img-fluid mx-auto d-block">
                  </div>
                </div>
              </div>
            </div>
            <!--== Single Person Box ==-->
          </div>

  	  	</div>
  	  </div>
  		
  	</section>
    <!--== Person Box Area End ==-->



    <!--== Book Area Start ==-->
    <section class="section" id="book">
      <div class="container">

        <!--== Section Title Area ==-->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title-area">
              <h2 class="section-title">Book & Publication</h2>
              <p class="section-subtitle">The more you read, the more you know</p>
            </div>
          </div>
        </div>
        <!--== Section Title Area ==-->

        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="book">
              <div class="book-image">
                <img src="assets/img/books/1.png" class="img-fluid mx-auto d-block" alt="book" />
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="book">
              <div class="book-details">
                <h2 class="book-title">Name of the Book</h2>
                <p>In this work Tim Ingold offers a persuasive approach to 
                  understanding how human beings perceive their surroundings. He argues that what we are used to calling cultural variation consists, in the first place, of variations in skill. Neither innate nor acquired, skills are grown, incorporated into the human organism through practice and training in an environment. They are thus as much biological as cultural. The twenty-three essays comprising this book focus in turn on the procurement of 
                  livelihood, on what it means to 'dwell', and on the nature of skill, weaving together approaches from social anthropology, ecological psychology, developmental biology and phenomenology in a</p>
                <a href="#">Know More</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <a href="/books" class="view-all">View All</a>
          </div>
        </div>
      </div>
    </section>
    <!--== Book Area End ==-->



    <!--== Subscribe Area Start ==-->
    <section class="section" id="subscribe">
      <div class="container">

        <!--== Section Title Area ==-->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title-area">
              <p class="section-subtitle">To get update subscribe to our</p>
              <h2 class="section-title">Newsletter</h2>
            </div>
          </div>
        </div>
        <!--== Section Title Area ==-->

        <div class="row">

          <!--== Subscribe Box ==-->
          <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="" method="" class="subscribe-form">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email address">
                  </div>
                  <button type="submit" class="btn">SUBSCRIBE</button>
                </form>
          </div>
          <!--== Subscribe Box ==-->

        </div>
      </div>
      
    </section>
    <!--== Subscribe Area End ==-->


@endsection