@extends('layout.master')
@section('content')


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
                <li class="breadcrumb-item active" aria-current="page">View</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--== Dashboard Breadcrumb End ==-->

        <div class="row">
          <!--== Dashboard Sidebar Start ==-->
          <aside class="col-md-3">
            @include('admin.inc.sidebar')
          </aside>
          <!--== Dashboard Sidebar End ==-->

          <!--== Dashboard Main Start ==-->
          <main class="col-md-9">

            <!--== Data View Card Start ==-->
            @foreach( $blogs as $blog )
            <div class="card">
              <img src="/uploads/images/blog/{{ $blog->BLOG_IMAGE }}" class="card-img-top" alt="Event">
              <div class="card-body">
                <h5 class="card-title">{{ $blog->BLOG_TITLE }}</h5>
                <p class="card-text">{!! $blog->BLOG_CONTENT !!}</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Author: {{ $blog->BLOG_AUTHOR }}</li>
                <li class="list-group-item">Category: {{ $blog->CATEGORY_NAME }}</li>
                <li class="list-group-item">Publish Start: {{ $blog->PUBLISH_START_DATE }}</li>
                <li class="list-group-item">Publish End: {{ $blog->PUBLISH_END_DATE }}</li>
                <li class="list-group-item">
                  @if( $blog->ACTIVE_STATUS == '1' )
                    <p class="active_status">Active</p>
                  @else
                    <p class="inactive_status">Inactive</p>
                  @endif
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/blog/edit/{{ $blog->BLOG_ID }}" class="btn btn-primary">Edit</a>
              </div>
            </div>
            @endforeach
            <!--== Data View Card End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection