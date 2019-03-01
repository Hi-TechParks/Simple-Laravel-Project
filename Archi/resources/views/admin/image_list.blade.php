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
                <li class="breadcrumb-item active" aria-current="page">List</li>
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
                <!--== Search Form Start ==-->
                <form action="{{ url('/admin/image') }}" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="image_title" placeholder="Image Title">
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-success">Search</button>
                    </div>
                  </div>
                </form>
                <!--== Search Form End ==-->
              </div>
            </div>

            <!--== Data table Start ==-->
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped">
                <caption>List of Blogs</caption>
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Service</th>
                    <th scope="col">Image</th>
                    <th scope="col">Serial No</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $images as $image )
                  <tr>
                    <td>{{ $image->IMAGE_TITLE }}</td>
                    <td>{{ $image->SERVICE_NAME }}</td>
                    <td>
                      <img src="/uploads/images/service/{{ $image->IMAGE_PATH }}" alt="service" style="margin:0 auto; max-width: 80px; height: auto; display: block;">
                    </td>
                    <td>{{ $image->SL_NO }}</td>
                    <td>
                      @if( $image->ACTIVE_STATUS == '1' )
                        <a href="/admin/image/status/{{ $image->SERVICE_IMAGE_ID }}" class="active_status">Active</a>
                      @else
                        <a href="/admin/image/status/{{ $image->SERVICE_IMAGE_ID }}" class="inactive_status">Inactive</a>
                      @endif
                    </td>
                    <td>
                      <a href="/admin/image/show/{{ $image->SERVICE_IMAGE_ID }}" class="btn btn-success">View</a>
                      <a href="/admin/image/edit/{{ $image->SERVICE_IMAGE_ID }}" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            {{ $images->links() }}
            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection