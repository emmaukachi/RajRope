<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href='/'>Home</a></li>
          <li><a href="{{URL('pages/about')}}">About Us</a></li>
          <li><a href="{{URL('pages/product')}}">product</a></li>
          <li><a href="{{URL('pages/services')}}">Services</a></li>
          <li><a href="{{Route('faq')}}">FAQ</a></li>
          <li><a href="{{Route('join')}}">Join</a></li>
        {{--   <li class="drop-down"><a href="{{Route('services')}}">Services</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>--}}
          <li><a href="{{URL('pages/contact')}}">Contact Us</a></li> 
        </ul>
      </nav> <!--.main-nav--> 
      
    </div>
  </header><!-- #header -->
