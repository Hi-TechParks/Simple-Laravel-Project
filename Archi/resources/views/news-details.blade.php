@extends('layout.master')
@section('content')

    @foreach( $events as $event )
    <!--== Page Header Start ==-->
    <section class="section mt-50" id="page-header" style="background-image:url('/uploads/images/event/{{ $event->IMAGE_PATH }}')">
      
    </section>
    <!--== Page Header End ==-->


    <!--== Details Page Start ==-->
    <section class="section" id="details-page">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <h1>{{ $event->EVENT_TITLE }}</h1>
            <div class="news-box-meta">
              {{ date('d, M', strtotime($event->EVENT_DATE )) }}
            </div>
            <p>{!! $event->EVENT_DESC !!}</p>

          </div>

        </div>
      </div>
    </section>
    <!--== Details Page End ==-->
    @endforeach


@endsection