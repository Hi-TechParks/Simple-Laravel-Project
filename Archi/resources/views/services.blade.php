@extends('layout.master')
@section('content')


    <!--== Service Area Start ==-->
    <section class="section mt-50" id="services">
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

          @foreach( $services as $service )
          <!--== Single Service ==-->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="/uploads/images/service/{{ $service->THUMBNAIL_IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="Photo">
                <a href="/services/single/{{ $service->SERVICE_ID }}">
                  <div class="services-gallery-overlay">
                    <div class="services-gallery-details">
                      
                    </div>
                  </div>
                </a>
              </div>
              <div class="services-title">
                <a href="/services/single/{{ $service->SERVICE_ID }}">{{ $service->SERVICE_NAME }}</a>
              </div>
            </div>
          </div>
          <!--== Single Service ==-->
          @endforeach

          <!--== Single Service ==-->
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="/assets/img/services/interior.png" class="img-fluid mx-auto d-block" alt="Photo">
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
          </div> -->
          <!--== Single Service ==-->

          <!--== Single Service ==-->
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="/assets/img/services/exterior.png" class="img-fluid mx-auto d-block" alt="Photo">
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
          </div> -->
          <!--== Single Service ==-->

          <!--== Single Service ==-->
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="/assets/img/services/design.png" class="img-fluid mx-auto d-block" alt="Photo">
                <a href="/design/details">
                  <div class="services-gallery-overlay">
                    <div class="services-gallery-details">
                      <span class="services-gallery-overlay-title"></span>
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
                <a href="/design/details">Design</a>
              </div>
            </div>
          </div> -->
          <!--== Single Service ==-->

          <!--== Single Service ==-->
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="/assets/img/services/steel_building.png" class="img-fluid mx-auto d-block" alt="Photo">
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
          </div> -->
          <!--== Single Service ==-->

        </div>
      </div>
    </section>
    <!--== Service Area End ==-->


@endsection