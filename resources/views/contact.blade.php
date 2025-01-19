@extends('home')




@section('content')

<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
             <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="{{url('/')}}" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="{{url('contact')}}" class="text-white-50">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact form start -->
  <section class="contact-form-wrap section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                   <form id="contact-form" class="contact__form" method="post" action="mail.php">
                   <!-- form message -->
                      <div class="row">
                          <div class="col-12">
                              <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                  Your message was sent successfully.
                              </div>
                          </div>
                      </div>
                      <!-- end message -->
                      <span class="text-color">Send a message</span>
                      <h3 class="text-md mb-4">Contact Form</h3>
                      <div class="form-group">
                          <input name="name" type="text" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="form-group">
                          <input name="email" type="email" class="form-control" placeholder="Email Address">
                      </div>
                      <div class="form-group-2 mb-4">
                          <textarea name="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                      </div>
                      <button class="btn btn-main" name="submit" type="submit">Send Message</button>
                  </form>
              </div>
  
              <div class="col-lg-5 col-sm-12">
                  <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                      <span class="text-muted">We are Professionals</span>
                      <h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>
  
                      <ul class="address-block list-unstyled">
                          <li>
                              <i class="ti-direction mr-3"></i>North Main Street,Brooklyn Australia
                          </li>
                          <li>
                            <a href="mailto:leensabti@lagunavco.com" ><i class="ti-email mr-3"></i><span>leensabti@lagunavco.com</span></a>

                           </li>
                          <li>
                              <i class="ti-mobile mr-3"></i>Phone:+962 797992323
                          </li>
                      </ul>
  
                      <ul class="social-icons list-inline mt-5">
                          <li class="list-inline-item">
                              <a target="_blank" href="https://www.facebook.com/lagunavco"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a target="_blank" href="https://www.instagram.com/lagunavco/"><i class="ti-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a target="_blank"  href="https://www.linkedin.com/company/laguna-visual-communications/""><i class="fab fa-linkedin-in"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  @endsection






