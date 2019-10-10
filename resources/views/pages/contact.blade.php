@extends('layouts.partials.master')
@section('main-content')
<section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com.ng/search?sxsrf=ACYBGNSAhEaMmU2gzVh8D_BmENZksz8Jqg%3A1570719085122&ei=bUWfXYyTB-G68gKS162QCg&q=43+ONIBUORE+STREET%2C+SURULERE+LAGOS+STATE+NIGERIA&oq=43+ONIBUORE+STREET%2C+SURULERE+LAGOS+STATE+NIGERIA&gs_l=psy-ab.3...379.12173..13115...0.0..0.0.0.......0....1..gws-wiz.SZDUXLRYicU&ved=0ahUKEwjM_fDI-JHlAhVhnVwKHZJrC6IQ4dUDCAs&uact=5#" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>43, Onibuore Street, LA 101283</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>wecare@Rajnig.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+234 (081) 7703 6948, +234 (090) 6248 5422</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
  @endsection

