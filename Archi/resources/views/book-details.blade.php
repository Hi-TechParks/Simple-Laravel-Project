@extends('layout.master')
@section('content')


    <!--== Details Page Start ==-->
    <section class="section mt-50" id="details-page">
      <div class="container">
        <div class="row">
          
          <div class="col-md-4">
            <img src="/assets/img/books/1.png" class="img-fluid mx-auto d-block" alt="book">
          </div>
          <div class="col-md-8">
            <h2>Name of the Book</h2>
            <div class="blog-box-meta">
              <span class="author"><i class="fas fa-user"></i> Writer : Writer Full Name</span>
            </div>

            <a class="download" href="book-details.html" download>Download <span><i class="fas fa-arrow-alt-circle-down"></i></span></a>

            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </p>
          </div>

        </div>
      </div>
    </section>
    <!--== Details Page End ==-->


@endsection