@extends('layouts.partials.master')
@section('main-content')
<section id="contact">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
   @endif

      <div class="container-fluid">

        <div class="section-header">
          <h3>Join Us</h3>
        </div>

        <div class="row wow fadeInUp">
        
            <!---Google map here----->
         
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
            <!---Success message----->
             
                 

            <div class="form">             
              <div>
                  @if(session('success'))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>{!! Session('success') !!}</strong>
                    </div>
                  @endif
              </div>
              <!--div id="errormessage"></div-->
              <form action="{{url('/pages/add-join')}}"" method="post" role="form" >

                {{csrf_field()}}

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
                  <input type="text" class="form-control" name="contact" id="contact" placeholder="Your Contact" data-rule="minlen:4" data-msg="Please give us your contact" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="address" rows="5" data-rule="required" data-msg="Please enter your address" placeholder="Address"></textarea>
                  <div class="validation"></div>
                </div>

                <div class="text-center"><button type="submit" title="Register">Register</button></div>

              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #join us -->
  @endsection


