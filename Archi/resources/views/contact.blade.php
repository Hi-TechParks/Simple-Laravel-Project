@extends('layout.master')
@section('content')

    
    <!--== Contact us Area Start ==-->
    <section class="section mt-50" id="about-us">
      <div class="container">
    
      <!-- ==========================  Start Contact Section  =============================  -->
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <!-- ===  Contact Form  ====  -->
              <div class="contact_form">
                  <div class="contact-header">
                    <h4>Contact Us For Service</h4>
                  </div>
                  <form action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Contact">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Youremail@mail.com">
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="">
                        <option value="">Select Service</option>
                        <option value="">Interior</option>
                        <option value="">Exterior</option>
                        <option value="">Design</option>
                        <option value="">Steel Building</option>
                        option
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Write Somthing..." id="contact"></textarea>
                    </div>
                      <input type="submit" class="btn btn-default" value="Send">
                  </form>
              </div>
              <!-- ===  Contact Form  ====  -->
            </div>

            <div class="col-md-6 col-sm-12">
              <!-- ===  Contact Info  ====  -->
              <div class="contact_info_table">
                <div class="contact-header">
                  <h4>Find us here</h4>
                </div>
                <div class="con_infos">
                    <div class="con_content">
                        <span><i class="fas fa-map-marker-alt"></i></span> House #57, Road #5, Block C, Mansurabad RA Adabor, Dhaka 1207, Bangladesh
                    </div>
                </div>
                <div class="con_infos">
                    <div class="con_content">
                        <span><i class="fas fa-phone"></i> </span> Contact : +88 01855-596628, +88 01537-035027
                    </div>
                </div>
                <div class="con_infos">
                    <div class="con_content">
                        <span><i class="fas fa-envelope"></i></span> Email : info@processconsultantsltd.com
                    </div>
                </div>
              </div>
              <!-- ===  Contact Info  ====  -->
            </div>
          </div>
          <!-- ==========================  End Contact Section  =============================  -->
        
      </div>
    </section>
    <!--== Contact us Area End ==-->


@endsection