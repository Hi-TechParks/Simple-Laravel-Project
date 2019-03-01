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
                <li class="breadcrumb-item active" aria-current="page">Create</li>
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

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                      {{ Session::get('success') }}
                    </div>
                    @endif
                    
                  </div>
                  <div class="col-md-2">
                    <a href="{{ URL('/admin/blog/create')}}" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="{{url('/admin/blog/store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Category</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="blog_category">
                        <option value="">Select Category</option>
                        @foreach( $blog_cats as $blog_cat )
                        <option value="{{ $blog_cat->BLOG_CATEGORY_ID }}">{{ $blog_cat->CATEGORY_NAME }}</option>
                        @endforeach
                      </select>

                      @if ($errors->has('blog_category'))
                          <span class="error_msg">
                            {{ $errors->first('blog_category') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="blog_title" placeholder="Blog Title">

                      @if ($errors->has('blog_title'))
                          <span class="error_msg">
                            {{ $errors->first('blog_title') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="content" placeholder="Blog Content" rows="15"></textarea>

                      @if ($errors->has('content'))
                          <span class="error_msg">
                            {{ $errors->first('content') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="blog_image" placeholder="Blog Image">

                      @if ($errors->has('blog_image'))
                          <span class="error_msg">
                            {{ $errors->first('blog_image') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Blog Author</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="blog_author" placeholder="Blog Author">

                      @if ($errors->has('blog_author'))
                          <span class="error_msg">
                            {{ $errors->first('blog_author') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publish Start</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="publish_start" placeholder="Publish Start">

                      @if ($errors->has('publish_start'))
                          <span class="error_msg">
                            {{ $errors->first('publish_start') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publish End</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="publish_end" placeholder="Publish End">

                      @if ($errors->has('publish_end'))
                          <span class="error_msg">
                            {{ $errors->first('publish_end') }}
                          </span>
                      @endif
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

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection