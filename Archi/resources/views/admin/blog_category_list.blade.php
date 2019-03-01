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
                <li class="breadcrumb-item"><a href="#">Blog Category</a></li>
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
                <form action="{{ url('/admin/blogcate') }}" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="blog_category" placeholder="Category Name">
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
                <caption>List of Blog Categorys</caption>
                <thead>
                  <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $blog_cats as $blog_cat )
                  <tr>
                    <td>{{ $blog_cat->CATEGORY_NAME }}</td>
                    <td>
                      @if( $blog_cat->ACTIVE_STATUS == '1' )
                        <a href="/admin/blogcate/status/{{ $blog_cat->BLOG_CATEGORY_ID }}" class="active_status">Active</a>
                      @else
                        <a href="/admin/blogcate/status/{{ $blog_cat->BLOG_CATEGORY_ID }}" class="inactive_status">Inactive</a>
                      @endif
                    </td>
                    <td><a href="/admin/blogcate/edit/{{ $blog_cat->BLOG_CATEGORY_ID }}" class="btn btn-primary">Edit</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            {{ $blog_cats->links() }}
            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection