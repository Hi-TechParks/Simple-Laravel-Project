@extends('layout.master')
@section('content')


    <!--== Details Page Start ==-->
    <section class="section mt-50" id="details-page">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            @foreach( $services as $service )

            <h2>{{ $service->SERVICE_NAME }}</h2>

            <p>{!! $service->SERVICE_DESC !!}</p>

            @endforeach
          </div>
        </div>


        <div class="row">
          
          <div class="col-md-12 text-center">
            @if(count($sub_services) > 0)
            <h3>Sub Services in This Category</h3>
            @endif
          </div>

          @foreach( $sub_services as $sub_service )
          <!--== Single Service ==-->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-services-area">
              <div class="single-services-gallery">
                <img src="/uploads/images/service/{{ $sub_service->THUMBNAIL_IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="Photo">
                <a href="/services/single/{{ $sub_service->SERVICE_ID }}">
                  <div class="services-gallery-overlay">
                    <div class="services-gallery-details">
                      
                    </div>
                  </div>
                </a>
              </div>
              <div class="services-title">
                <a href="/services/single/{{ $sub_service->SERVICE_ID }}">{{ $sub_service->SERVICE_NAME }}</a>
              </div>
            </div>
          </div>
          <!--== Single Service ==-->
          @endforeach

        </div>


        <div class="row">

          <div class="col-md-12 text-center">
            @if(count($images) > 0)
            <h3>Service Portfolio Gallery</h3>
            @endif
          </div>

          @foreach( $images as $image )
          <!--== Single Image ==-->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-service-gallery">
              <img src="/uploads/images/service/{{ $image->IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="Photo">
              <a data-fancybox="gallery" href="/uploads/images/service/fullsize/{{ $image->IMAGE_PATH }}" class="fancybox">
                <div class="service-gallery-overlay">
                  <div class="service-gallery-icon">
                    <i class="fas fa-search-plus"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!--== Single Service ==-->
          @endforeach

          <!--== Single Service ==-->
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="single-service-gallery">
              <img src="/assets/img/services/1.png" class="img-fluid mx-auto d-block" alt="Photo">
              <a data-fancybox="gallery" href="/assets/img/services/1.png" class="fancybox">
                <div class="service-gallery-overlay">
                  <div class="service-gallery-icon">
                    <i class="fas fa-search-plus"></i>
                  </div>
                </div>
              </a>
            </div>
          </div> -->
          <!--== Single Image ==-->

        </div>

      </div>
    </section>
    <!--== Details Page End ==-->


@endsection