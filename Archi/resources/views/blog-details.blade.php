@extends('layout.master')
@section('content')

    @foreach( $blogs as $blog )
    <!--== Page Header Start ==-->
    <section class="section mt-50" id="page-header" style="background-image:url('/uploads/images/blog/{{ $blog->BLOG_IMAGE }}')">
      
    </section>
    <!--== Page Header End ==-->


    <!--== Details Page Start ==-->
    <section class="section" id="details-page">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <h1>{{ $blog->BLOG_TITLE }}</h1>
            <div class="blog-box-meta">
              <span class="date"><i class="far fa-clock"></i> : {{ date('d M', strtotime($blog->PUBLISH_START_DATE)) }}</span>
              <span class="author"><i class="fas fa-user"></i> : {{ $blog->BLOG_AUTHOR }}</span>
            </div>
            <p>{!! $blog->BLOG_CONTENT !!}</p>

          </div>

        </div>
      </div>
    </section>
    <!--== Details Page End ==-->
    @endforeach


@endsection