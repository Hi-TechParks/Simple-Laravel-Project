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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--== Dashboard Breadcrumb End ==-->

        <div class="row">
          <!--== Dashboard Sidebar Start ==-->
          <aside class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="true">Home</a>
              <a class="nav-link" data-toggle="pill" href="table.html" role="tab" aria-controls="" aria-selected="false">Table</a>
              <a class="nav-link" data-toggle="pill" href="form.html" role="tab" aria-controls="" aria-selected="false">Form</a>
              <a class="nav-link" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">Nav</a>
            </div>
          </aside>
          <!--== Dashboard Sidebar End ==-->

          <!--== Dashboard Main Start ==-->
          <main class="col-md-9">

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    <div class="alert alert-success" role="alert">
                      A simple success alert—check it out!
                    </div>
                  </div>
                  <div class="col-md-2">
                    <a href="#" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="" method="">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Example select</label>
                    <div class="col-sm-8">
                      <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
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