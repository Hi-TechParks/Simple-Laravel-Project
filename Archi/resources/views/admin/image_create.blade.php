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
                <li class="breadcrumb-item"><a href="#">Image</a></li>
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

                    @include('admin.inc.message')
                    
                  </div>
                  <div class="col-md-2">
                    <a href="{{ URL('/admin/image/create')}}" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="{{url('/admin/image/store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Service Name</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="service_title">
                        <option value="">Select Service</option>
                        @foreach( $services as $service )
                        <option value="{{ $service->SERVICE_ID }}">{{ $service->SERVICE_NAME }}</option>
                        @endforeach
                      </select>

                      @if ($errors->has('service_title'))
                          <span class="error_msg">
                            {{ $errors->first('service_title') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Image Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="image_title" placeholder="Image Title">

                      @if ($errors->has('image_title'))
                          <span class="error_msg">
                            {{ $errors->first('image_title') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="image_file" placeholder="Image">

                      @if ($errors->has('image_file'))
                          <span class="error_msg">
                            {{ $errors->first('image_file') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Serial No</label>
                    <div class="col-sm-8">
                      @foreach( $serial_nos as $serial_no )
                      <input type="number" class="form-control" name="serial_no" placeholder="Serial No" value="{{ $serial_no->SL_NO + 1 }}">
                      @endforeach
              
                      @if($serial_nos->isEmpty())
                      <input type="number" class="form-control" name="serial_no" placeholder="Serial No" value="1">
                      @endif

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

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection