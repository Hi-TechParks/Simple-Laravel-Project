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
                <li class="breadcrumb-item"><a href="#">Service</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
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

            @foreach ($services as $service)
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    
                    @include('admin.inc.message')
                    
                  </div>
                  <div class="col-md-2">
                    <a href="/admin/service/edit/{{ $service->SERVICE_ID }}" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="/admin/service/update/{{ $service->SERVICE_ID }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="service_title" value="{{ $service->SERVICE_NAME }}" placeholder="Service Title">

                      @if ($errors->has('service_title'))
                          <span class="error_msg">
                            {{ $errors->first('service_title') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Parent Service (optional)</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="parent_service">
                        <option value="">Select Parent</option>
                        @foreach( $parent_services as $parent_service )
                        <option value="{{ $parent_service->SERVICE_ID }}" @if( $parent_service->SERVICE_ID == $service->PARENT_SERVICE_ID ) selected @endif>{{ $parent_service->SERVICE_NAME }}</option>
                        @endforeach
                      </select>

                      @if ($errors->has('parent_service'))
                          <span class="error_msg">
                            {{ $errors->first('parent_service') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="content" placeholder="Service Content" rows="15">{{ $service->SERVICE_DESC }}</textarea>

                      @if ($errors->has('content'))
                          <span class="error_msg">
                            {{ $errors->first('content') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="service_image" placeholder="Service Image">

                      @if ($errors->has('service_image'))
                          <span class="error_msg">
                            {{ $errors->first('service_image') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Show On Home</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="show_on_home" required="">
                        <option value="1" @if( $service->HOME_PAGE_SHOW == 1) selected @endif>Yes</option>
                        <option value="0" @if( $service->HOME_PAGE_SHOW == 0) selected @endif>No</option>
                      </select>

                      @if ($errors->has('show_on_home'))
                          <span class="error_msg">
                            {{ $errors->first('show_on_home') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Serial No</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="serial_no" value="{{ $service->SL_NO }}" placeholder="Serial No">

                      @if ($errors->has('serial_no'))
                          <span class="error_msg">
                            {{ $errors->first('serial_no') }}
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
            @endforeach

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection