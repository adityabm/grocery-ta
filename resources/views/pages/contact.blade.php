@extends('layouts.app')

@section('content')
<!-- Inner Header -->
<section class="section-padding bg-dark inner-header">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
             <h1 class="mt-0 mb-3 text-white">Contact Us</h1>
             <div class="breadcrumbs">
                <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-success">Contact Us</span></p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Inner Header -->
 <!-- Contact Us -->
 <section class="section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-md-4">
             <h3 class="mt-1 mb-5">Get In Touch</h3>
             <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
             <p>Jl. Cikutra No.204A, Sukapada, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40125</p>
             <h6 class="text-dark"><i class="mdi mdi-phone"></i> Phone :</h6>
             <p>(022) 7275855</p>
             <h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
             <p>aditya.dewantara@widyatama.ac.id</p>
             <h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6>
             <p>adit-playground.dev</p>
             <div class="footer-social"><span>Follow : </span>
                <a href="https://www.facebook.com/aditya.dewantara.f"><i class="mdi mdi-facebook"></i></a>
                <a href="https://www.instagram.com/adityaxt"><i class="mdi mdi-instagram"></i></a>
                <a href="https://twitter.com/dwntradit"><i class="mdi mdi-twitter"></i></a>
             </div>
          </div>
          <div class="col-lg-8 col-md-8">
             <div class="card">
                <div class="card-body">
                   <iframe src="https://maps.google.com/maps?q=widyatama&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Contact Us -->
 <!-- Contact Me -->
 <section class="section-padding  bg-white">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 section-title text-left mb-4">
             <h2>Contact Us</h2>
          </div>
          <form class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate>
             <div class="control-group form-group">
                <div class="controls">
                   <label>Full Name <span class="text-danger">*</span></label>
                   <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                   <p class="help-block"></p>
                </div>
             </div>
             <div class="row">
                <div class="control-group form-group col-md-6">
                   <label>Phone Number <span class="text-danger">*</span></label>
                   <div class="controls">
                      <input type="tel" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                   </div>
                </div>
                <div class="control-group form-group col-md-6">
                   <div class="controls">
                      <label>Email Address <span class="text-danger">*</span></label>
                      <input type="email" placeholder="Email Address"  class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                   </div>
                </div>
             </div>
             <div class="control-group form-group">
                <div class="controls">
                   <label>Message <span class="text-danger">*</span></label>
                   <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
             </div>
             <div id="success"></div>
             <!-- For success/fail messages -->
             <button type="submit" class="btn btn-success">Send Message</button>
          </form>
       </div>
    </div>
 </section>
 <!-- End Contact Me -->
@endsection