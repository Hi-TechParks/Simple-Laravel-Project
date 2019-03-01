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
                <form action="{{ url('/admin/blog') }}" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="blog_title" placeholder="Blog Title">
                    </div>
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
                <caption>List of Blogs</caption>
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publish Start</th>
                    <th scope="col">Publish End</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $blogs as $blog )
                  <tr>
                    <td>{{ $blog->BLOG_TITLE }}</td>
                    <td>{{ $blog->CATEGORY_NAME }}</td>
                    <td>{{ $blog->BLOG_AUTHOR }}</td>
                    <td>{{ $blog->PUBLISH_START_DATE }}</td>
                    <td>{{ $blog->PUBLISH_END_DATE }}</td>
                    <td>
                      @if( $blog->ACTIVE_STATUS == '1' )
                        <a href="/admin/blog/status/{{ $blog->BLOG_ID }}" class="active_status">Active</a>
                      @else
                        <a href="/admin/blog/status/{{ $blog->BLOG_ID }}" class="inactive_status">Inactive</a>
                      @endif
                    </td>
                    <td>
                      <a href="/admin/blog/show/{{ $blog->BLOG_ID }}" class="btn btn-success">View</a>
                      <a href="/admin/blog/edit/{{ $blog->BLOG_ID }}" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            {{ $blogs->links() }}
            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection