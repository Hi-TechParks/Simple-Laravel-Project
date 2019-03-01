@extends('layout.master')
@section('content')

    
    <!--== Blog Area Start ==-->
    <section class="section mt-50" id="news-event">
      <div class="container">

        <!--== Section Title Area ==-->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title-area">
              <h2 class="section-title">Blog</h2>
              <p class="section-subtitle">Know about the Some design solutions</p>
            </div>
          </div>
        </div>
        <!--== Section Title Area ==-->

        <div class="row sub-page-title-box">
          <div class="col-lg-8 col-md-6 col-xs-12">
              <nav class="navbar navbar-expand-lg blog-category-navbar">
                  <!--== Program Dropdown Nav Start ==-->
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle blog-dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      All Services
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      @foreach( $blog_cats as $blog_cat )
                      <a class="dropdown-item" href="/blogs/category/{{ $blog_cat->BLOG_CATEGORY_ID }}">
                        {{ $blog_cat->CATEGORY_NAME }}
                      </a>
                      @endforeach
                    </div>
                  </div>
                  <!--== Program Dropdown Nav End ==-->
              </nav>
            <br/>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <form action="/blogs" method="get" class="form-inline">
              <input class="form-control" type="search" name="blog_title" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit">Search</button>
            </form>
          </div>
        </div>

        <div class="row">

          <!-- ===  Text Shorten Code  ====  -->
          <?php
            // code for shortening the big content fetched from database
             function BlogtextShorten($text, $limit = 150){
                $text = $text." ";
                $text = substr($text, 0, $limit);
                $text = substr($text, 0, strrpos($text, " "));
                $text = $text;
                return $text;
            }
          ?> 
          <!-- ===  Text Shorten Code  ====  -->


          @foreach( $blogs as $blog )
          <!--== Single News Box ==-->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="/uploads/images/blog/{{ $blog->BLOG_IMAGE }}" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="/blog/single/{{ $blog->BLOG_ID }}">{{ $blog->BLOG_TITLE }}</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : {{ date('d M', strtotime($blog->PUBLISH_START_DATE)) }}</span>
                      <span class="author"><i class="fas fa-user"></i> : {{ $blog->BLOG_AUTHOR }}</span>
                    </div>
                    <p class="card-text">{!! BlogtextShorten($blog->BLOG_CONTENT) !!}</p>

                    <a class="read-more" href="/blog/single/{{ $blog->BLOG_ID }}">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Single News Box ==-->
          @endforeach

          <!--== Single News Box ==-->
          <!-- <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="news-box-header">
                  <img src="assets/img/events/1.png" class="img-fluid mx-auto d-block" alt="Photo">
                  
                </div>
                <div class="news-box-footer">
                  <div class="news-box-info">
                    <h5 class="card-title"><a href="blog-details.html">What are the 7 elements of interior design?</a></h5>
                    <div class="blog-box-meta">
                      <span class="date"><i class="far fa-clock"></i> : 04 Jan</span>
                      <span class="author"><i class="fas fa-user"></i> : Admin</span>
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>

                    <a class="read-more" href="blog-details.html">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
 -->          <!--== Single News Box ==-->

        </div>

        <!--== Pagination section ==-->
        <div class="pagination-section">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $blogs->links() }}
            </ul>
          </nav>
        </div>  
        <!--== Pagination section ==-->
      </div>
      
    </section>
    <!--== Blog Area End ==-->


@endsection