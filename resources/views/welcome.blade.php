{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MiSchool</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div>
                <img src="{{ asset('assets/images/logo/logo-miscool.png') }}" alt="">
            </div>
        </div>

        
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/codely/all-demo/06-codely-landing-page-get-started-hero/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2024 02:06:20 GMT -->
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Get Started Hero</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="{{ asset('landing_assets/css/icofont.min.css') }}">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="{{ asset('landing_assets/css/animate.min.css') }}">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="{{ asset('landing_assets/css/owl.carousel.min.css') }}">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="{{ asset('landing_assets/css/bootstrap.min.css') }}">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="{{ asset('landing_assets/css/aos.css') }}">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="{{ asset('landing_assets/css/style.css') }}">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="{{ asset('landing_assets/css/responsive.css') }}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('landing_assets/images/favicon.png') }}" type="image/x-icon">

</head>

<body>


  <!-- Page-wrapper-Start -->
  <div class="page_wrapper">

    <!-- Preloader -->
    <div id="preloader">
      <!-- <div id="loader"></div> -->
      <div class="circle-border">
        <div class="circle-core"></div>
      </div>
    </div>

    <!-- Top Banner Start-->
    <div class="top_home_wraper white_option">

      <div class="container">
          <!-- vertical line animation -->
          <div class="anim_line dark_bg">
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
          </div>
      </div>

      <!-- Header Start -->
      <header class="fixed">
        <!-- container start -->
        <div class="container">
          <!-- navigation bar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
              <img src="{{ asset('landing_assets/images/new/logo_white.png') }}" alt="image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                <div class="toggle-wrap">
                  <span class="toggle-bar"></span>
                </div>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.html">Testimonial</a>
                </li>
                <!-- secondery menu start -->
                <li class="nav-item has_dropdown">
                  <a class="nav-link" href="#">Services</a>
                  <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                  <div class="sub_menu">
                    <ul>
                      <li><a href="service-list-1.html">Service List 1</a></li>
                      <li><a href="service-list-2.html">Service List 2</a></li>
                      <li><a href="service-detail.html">Service Details</a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item has_dropdown">
                  <a class="nav-link" href="#">Blog </a>
                  <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                  <div class="sub_menu">
                    <ul>
                      <li><a href="blog-list.html">Blog List</a></li>
                      <li><a href="blog-detail.html">Single Blog</a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item has_dropdown">
                  <a class="nav-link" href="#">Pages </a>
                  <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                  <div class="sub_menu">
                    <ul>
                      <li><a href="pricing.html">Pricing </a></li>
                      <li><a href="sign-in.html">Sign In </a></li>
                      <li><a href="sign-up.html">Sign Up </a></li>
                      <li><a href="error.html">Error 404 </a></li>
                      <li><a href="faq.html">Faq </a></li>
                    </ul>
                  </div>
                </li>

                <!-- secondery menu end -->
                <li class="nav-item">
                  <a class="nav-link" href="contact-us.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dark_btn" href="#getstarted">TRY IT FREE <i class="icofont-arrow-right"></i></a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- navigation end -->
        </div>
        <!-- container end -->
      </header>

      <!-- Banner-Section-Start -->
      <section class="banner_section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12">
            <div class="banner_text">
            <div class="ban_inner_text" data-aos="fade-up" data-aos-duration="1500">
              <span><i class="icofont-rocket-alt-2"></i> Powerful, easier and faster</span>
              <h1>Build your network <br> <span>faster with apper</span></h1>
              <p>The World's simplest and fast platform that brings everything together</p>
            </div>

            <form action="https://kalanidhithemes.com/live-preview/landing-page/codely/all-demo/06-codely-landing-page-get-started-hero/submit" data-aos="fade-up" data-aos-duration="1500">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn_main">GET STARTED <i class="icofont-arrow-right"></i></button>
              </div>
            </form>

            <div class="offers" data-aos="fade-up" data-aos-duration="1500">
              <span><i class="icofont-check-circled"></i> Free trial 14 days</span>
              <span><i class="icofont-check-circled"></i> No credit card require</span>
            </div>
            </div>
            </div>

            <div class="col-lg-6 col-md-12">
            <div class="banner_image" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ asset('landing_assets/images/new/hero_image.png') }}" alt="image">
            </div>
            </div>
        </div>

        </div>
      </section>

    </div>
    <!-- Top Banner End-->

    <!-- Unique features Start -->
    <section class="row_am unique_section">
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2>Unique features </h2>
          <!-- p -->
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus <br> orem Ipsum has beenthe
            standard dummy text ever since</p>
        </div>
        <div class="features_inner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
          <!-- card -->
          <div class="feature_card">
            <div class="icons">
              <img src="images/new/features_icon_01.svg" alt="image">
              <div class="dot_block">
                <span class="dot_anim"></span>
                <span class="dot_anim"></span>
                <span class="dot_anim"></span>
              </div>
            </div>
            <div class="inner_text">
              <h3>Highly customizable</h3>
              <p>Lorem Ipsum is simply dummy text ofthe printing and type setting indus ideas orem Ipsum has beenthe.
              </p>
              <a href="service-detail.html" class="btn text_btn">DISCOVER MORE <i class="icofont-arrow-right"></i></a>
            </div>
          </div>
          <!-- card -->
          <div class="feature_card">
            <div class="icons">
              <img src="{{ asset('landing_assets/images/new/features_icon_02.svg') }}" alt="image">
              <div class="dot_block">
                <span class="dot_anim"></span>
                <span class="dot_anim"></span>
                <span class="dot_anim"></span>
              </div>
            </div>
            <div class="inner_text">
              <h3>Pixel perfect design</h3>
              <p>Lorem Ipsum is simply dummy text ofthe printing and type setting indus ideas orem Ipsum has beenthe.
              </p>
              <a href="service-detail.html" class="btn text_btn">DISCOVER MORE <i class="icofont-arrow-right"></i></a>
            </div>
          </div>
          <!-- card -->
          <div class="feature_card">
            <div class="icons">
              <img src="{{ asset('landing_assets/images/new/features_icon_03.svg') }}" alt="image">
              <div class="dot_block">
                <span class="dot_anim"></span>
                <span class="dot_anim"></span>
                <span class="dot_anim"></span>
              </div>
            </div>
            <div class="inner_text">
              <h3>Lifetime free updates</h3>
              <p>Lorem Ipsum is simply dummy text ofthe printing and type setting indus ideas orem Ipsum has beenthe.
              </p>
              <a href="service-detail.html" class="btn text_btn">DISCOVER MORE <i class="icofont-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Unique features End -->

    <!-- Analyze Section Strat -->
    <section class="row_am analyze_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="analyze_text" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
              <span class="icon"><img src="{{ asset('landing_assets/images/new/Analyze_Icon.svg') }}" alt="image"></span>
              <div class="section_title">
                <h2>Analyze your data with powerful tool</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and types
                  etting industry lorem Ipsum has been the industrys standard dummy text ever since the when an unknown
                  printer took a galley of type and.</p>
              </div>
              <ul>
                <li data-aos="fade-up" data-aos-duration="2000">
                  <h3>Carefully designed</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typ esetting industry lorem Ipsum has.</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="2000">
                  <h3>Seamless Sync</h3>
                  <p>Simply dummy text of the printing and typesetting inustry lorem Ipsum has Lorem dollar summit.</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="analyze_image" data-aos="fade-in" data-aos-duration="1000">
              <img data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100" class="moving_animation"
                src="images/new/analyze-data-01.png" alt="image">
              <img data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100" class="moving_animation"
                src="images/new/analyze-data-02.png" alt="image">
              <img data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100" class=""
                src="images/new/analyze-data-03.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Analyze Section End -->

    <!-- Collaborate Section Strat -->
    <section class="row_am collaborate_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="collaborate_image" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
              <div class="img_block" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                <img class="icon_img moving_animation" src="{{ asset('landing_assets/images/new/Collaborate-icon_1.png') }}" alt="image">
                <img src="images/new/Collaborate-01.png" alt="image">
              </div>
              <div class="img_block" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                <img src="images/new/Collaborate-02.png" alt="image">
                <img class="icon_img moving_animation" src="{{ asset('landing_assets/images/new/Collaborate-icon_2.png') }}" alt="image">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collaborate_text" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
              <span class="icon"><img src="images/new/securely.svg" alt="image"></span>
              <div class="section_title">
                <h2>Collaborate securely everything</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and types
                  etting industry lorem Ipsum has been the indu has been the industrys standard dummy text ever since
                  the when an unknown printer took a galley of type and.</p>
              </div>
              <ul>
                <li data-aos="fade-up" data-aos-duration="2000">
                  <h3>Sync followers</h3>
                  <p>Simply dummy text of the printing and typesetting
                    inustry lorem Ipsum has Lorem dollar summit.</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="2000">
                  <h3>Globally connected</h3>
                  <p>Simply dummy text of the printing and typesetting
                    inustry lorem Ipsum has Lorem dollar summit.</p>
                </li>
              </ul>
              <a href="service-detail.html" data-aos="fade-up" data-aos-duration="2000" class="btn btn_main">READ MORE <i
                  class="icofont-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Analyze Section End -->

    <!-- Communication Section Strat -->
    <section class="row_am communication_section">
      <div class="communication_inner">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="communication_text" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                <span class="icon"><img src="{{ asset('landing_assets/images/new/comunication.svg') }}" alt="image"></span>
                <div class="section_title">
                  <h2>Easy communication wherever you are live</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and types
                    etting industry lorem Ipsum has been the industrys standard dummy text ever since the when an unknown
                    printer took a galley of type and.</p>
                </div>
                <ul>
                  <li data-aos="fade-up" data-aos-duration="2000">
                    <h3>Carefully designed</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typ esetting industry lorem Ipsum has.</p>
                  </li>
                  <li data-aos="fade-up" data-aos-duration="2000">
                    <h3>Seamless Sync</h3>
                    <p>Simply dummy text of the printing and typesetting inustry lorem Ipsum has Lorem dollar summit.</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="communication_image" data-aos="fade-in" data-aos-duration="1000">
                <img data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100" class="moving_animation"
                  src="{{ asset('landing_assets/images/new/cominication-data-03.png') }}" alt="image">
                <img data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100" class="moving_animation"
                  src="{{ asset('landing_assets/images/new/cominication-data-02.png') }}" alt="image">
                <img data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100" class=""
                  src="{{ asset('landing_assets/images/new/cominication-data-01.png') }}" alt="image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Communication Section End -->

    <!-- Advance Feature-section-Start  -->
    <section class="row_am advance_feature_section" id="getstarted">
      <!-- container start -->
      <div class="container">
        <div class="advance_feature_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">

          <!-- vertical line animation -->
          <div class="anim_line dark_bg">
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('landing_assets/images/anim_line_2.png') }}" alt="anim_line"></span>
          </div>

          <!-- Section Title -->
          <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <h2>Advaced features</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus orem Ipsum has beenthe standard
              dummy text ever since.</p>
          </div>
          <!-- row start -->
          <div class="row">
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="1500">
              <div class="feature_block">
                <div class="icon">
                  <img src="{{ asset('landing_assets/images/new/Secure-data.svg') }}" alt="image">
                </div>
                <div class="text_info">
                  <h3>Secure data</h3>
                  <p>Lorem Ipsum is simply dummy text of the prin
                    ting and type setting indus ideas orem Ipsum has beenthe standard dummy text ever since the when an
                    type setting indus ideas own.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="1500">
              <div class="feature_block">
                <div class="icon">
                  <img src="images/new/Fully-functional.svg" alt="image">
                </div>
                <div class="text_info">
                  <h3>Fully functional</h3>
                  <p>Simply dummy text of the printing and type se
                    tting indus ideas orem Ipsum has beenthe stanard dummy text ever since the when an type setting
                    indus iLorem Ipsum is.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="1500">
              <div class="feature_block">
                <div class="icon">
                  <img src="images/new/Live-chat.svg" alt="image">
                </div>
                <div class="text_info">
                  <h3>Live chat</h3>
                  <p>Lorem Ipsum is simply dummy text of the prin
                    ting and type setting indus ideas orem Ipsum has beenthe standard dummy text ever since the when an
                    type setting indus ideas own.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="1500">
              <div class="feature_block">
                <div class="icon">
                  <img src="images/new/24-7-Support.svg" alt="image">
                </div>
                <div class="text_info">
                  <h3>24-7 Support</h3>
                  <p>Lorem Ipsum is simply dummy text of the prin
                    ting and type setting indus ideas orem Ipsum has beenthe standard dummy text ever since the when an
                    type setting indus ideas own.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
      </div>
      <!-- container end -->
    </section>

    <!-- Powerful solution for your business Section Start -->
    <section class="powerful_solution" data-aos="fade-in" data-aos-duration="1000">
      
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1000">
          <h2>Powerful solution for your business</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus orem Ipsum has beenthe standard
            dummy text ever since.</p>
        </div>
        <div class="quality_lable" data-aos="fade-up" data-aos-duration="1000">
          <ul>
            <li>
              <p><i class="icofont-check-circled"></i>
                Highly customizable</p>
            </li>
            <li>
              <p><i class="icofont-check-circled"></i>
                Pixel perfect design</p>
            </li>
            <li>
              <p><i class="icofont-check-circled"></i>
                Worldwide support</p>
            </li>
          </ul>
        </div>
        <div class="counters_block" data-aos="fade-up" data-aos-duration="1000">
          <ul class="app_statstic" id="counter" data-aos="fade-in" data-aos-duration="1500">
            <li>
              <div class="text">
                <p><span class="counter-value" data-count="450">0</span><span>+</span></p>
                <p>Million of client logins monthly</p>
              </div>
            </li>
            <li>
              <div class="text">
                <p><span class="counter-value" data-count="120">0 </span><span>+</span></p>
                <p>Languages and countries</p>
              </div>
            </li>
            <li>
              <div class="text">
                <p><span class="counter-value" data-count="135">1500</span><span>+</span></p>
                <p>Percent yearly turnover increase</p>
              </div>
            </li>
            <li>
              <div class="text">
                <p><span class="counter-value" data-count="324">0</span><span>+</span></p>
                <p>Million active accounts</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="images_gallery_block row">
          <div class="gl_block col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="img"><img src="images/new/Powerful-solution-01.png" alt="image"></div>
            <div class="img"><img src="images/new/Powerful-solution-02.png" alt="image"></div>
          </div>
          <div class="gl_block col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="img"><img src="images/new/Powerful-solution-03.png" alt="image"></div>
            <div class="img"><img src="images/new/Powerful-solution-04.png" alt="image"></div>
            <div class="img"><img src="images/new/Powerful-solution-05.png" alt="image"></div>
          </div>
          <div class="gl_block col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
            <div class="img"><img src="images/new/Powerful-solution-06.png" alt="image"></div>
            <div class="img"><img src="images/new/Powerful-solution-07.png" alt="image"></div>
          </div>
          <div class="gl_block col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="img"><img src="images/new/Powerful-solution-08.png" alt="image"></div>
            <div class="img"><img src="images/new/Powerful-solution-09.png" alt="image"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Powerful solution for your business Section End -->

    <!-- Easy integration Section Start -->
    <section class="row_am integration_section">
      <div class="integration_section_inner">
        <div class="container">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1000">
            <h2>Easy integration <br> with popular platforms</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus orem Ipsum has beenthe standard
              dummy.</p>
          </div>
          <div class="platforms_list">
            <div class="row">
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_01.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Mailchimp</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_02.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Google Drive</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_03.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Whatsapp</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_02.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Google Drive</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_04.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Mailchimp</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_05.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Dropbox</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_06.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Skype</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_07.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Wordpress</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_08.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Smashing</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_09.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Firefox</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_10.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Yahoo</p>
                  </div>
                </div>
              </div>
              <!-- list Block Strat -->
              <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="list_block">
                  <div class="icon">
                    <img src="images/new/platforms_11.png" alt="image" >
                  </div>
                  <div class="caption">
                    <p>Bing</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Easy integration Section End -->

    <!-- What Our Coustomer Section Start-->
    <section class="what_coustomer_says">
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
          <h2>What our customer says</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus <br> orem Ipsum has beenthe
            standard dummy text ever since.</p>
        </div>
        <div id="coustomer_slider_white" class="owl-carousel owl-theme" data-aos="fade-in" data-aos-duration="1500">
          <div class="item">
            <div class="coustomer_slide_box">
              <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
              </div>
              <p>Lorem Ipsum is simply dummy text of the print ing and typese tting us orem Ipsum has been.</p>
              <div class="avtar_profil">
                <div class="avatr">
                  <img src="images/new/testi_01.png" alt="image">
                </div>
                <div class="text">
                  <h3>Shayna john</h3>
                  <span>Careative inc.</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="coustomer_slide_box">
              <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
              </div>
              <p>Simply dummy text of the print ing and typese tting us orem Ipsum has been lorem Ipsum.</p>
              <div class="avtar_profil">
                <div class="avatr">
                  <img src="images/new/testi_02.png" alt="image">
                </div>
                <div class="text">
                  <h3>Mark </h3>
                  <span>Careative inc.</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="coustomer_slide_box">
              <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
              </div>
              <p>Lorem Ipsum is simply dummy text of the print ing and typese tting us orem Ipsum has been.</p>
              <div class="avtar_profil">
                <div class="avatr">
                  <img src="images/new/testi_01.png" alt="image">
                </div>
                <div class="text">
                  <h3>Willium Joe</h3>
                  <span>Careative inc.</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="coustomer_slide_box">
              <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
              </div>
              <p>Lorem Ipsum is simply dummy text of the print ing and typese tting us orem Ipsum has been.</p>
              <div class="avtar_profil">
                <div class="avatr">
                  <img src="images/new/testi_03.png" alt="image">
                </div>
                <div class="text">
                  <h3>Shayna john</h3>
                  <span>Careative inc.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="review_summery">
          <div class="rating">
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
            <span><i class="icofont-star"></i></span>
          </div>
          <p><span>5.0 / 5.0 -</span> <a href="testimonial.html">3689 Total User Reviews <i class="icofont-arrow-right"></i></a></p>
        </div>
      </div>
    </section>
    <!-- What Our Coustomer Section End-->

    <!-- Trusted Section start -->
    <section class="row_am trusted_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <h2>Trusted by <span>150+</span> companies</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
            standard dummy.</p>
        </div>
        <!-- logos slider start -->
        <div class="company_logos" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <div id="company_slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="logo">
                <img src="images/paypal.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/spoty.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/shopboat.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/slack.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/envato.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/paypal.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/spoty.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/shopboat.png" alt="image">
              </div>
            </div>
          </div>
        </div>
        <!-- logos slider end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Trusted Section ends -->

    <!-- Pricing-Section -->
    <section class="row_am pricing_section" id="pricing" data-aos="fade-in" data-aos-duration="1000">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <h2>Best plans, pay what you use</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus <br> orem Ipsum has beenthe
            standard dummy text ever since.</p>
        </div>
        <!-- toggle button -->
        <div class="toggle_block" data-aos="fade-up" data-aos-duration="1500">
          <span class="month active">Monthly</span>
          <div class="tog_block">
            <span class="tog_btn"></span>
          </div>
          <span class="years">Yearly</span>
          <span class="offer">50% off</span>
        </div>

        <!-- pricing box  monthly start -->
        <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
          <!-- row start -->
          <div class="row">
            <!-- pricing box 1 -->
            <div class="col-md-4">
              <div class="pricing_block blockwhite">
                <div class="icon">
                  <img src="images/new/Free-Trial-01.svg" alt="image">
                  <div class="dot_block">
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                  </div>
                </div>
                <div class="pkg_name">
                  <h3>Free Trial</h3>
                  <span>For the basics</span>
                </div>
                <span class="price">$0<span>/Month</span></span>
                <ul class="benifits">
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>7 Days free trial</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>2 platform of your choice</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>10 GB Dedicated Hosting free</p>
                  </li>
                  <li class="exclude">
                    <p><i class="icofont-close-circled"></i>Unlimited updates</p>
                  </li>
                  <li class="exclude">
                    <p><i class="icofont-close-circled"></i>Live support</p>
                  </li>
                </ul>
                <a href="#" class="btn btn_main">BUY NOW <i class="icofont-arrow-right"></i></a>
              </div>
            </div>

            <!-- pricing box 2 -->
            <div class="col-md-4">
              <div class="pricing_block highlited_block">
                <div class="icon">
                  <img src="images/new/unlimited.png" alt="image">
                  <div class="dot_block">
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                  </div>
                </div>
                <div class="pkg_name">
                  <h3>Unlimited</h3>
                  <span>For the professionals</span>
                </div>
                <span class="price">$99<span>/Month</span></span>
                <ul class="benifits">
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>7 Days free trial</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>2 platform of your choice</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>10 GB Dedicated Hosting free</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>Unlimited updates</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>Live support</p>
                  </li>
                </ul>
                <a href="#" class="btn btn_main">BUY NOW <i class="icofont-arrow-right"></i></a>
              </div>
            </div>

            <!-- pricing box 3 -->
            <div class="col-md-4">
              <div class="pricing_block blockwhite">
                <div class="icon">
                  <img src="images/new/Premium.svg" alt="image">
                  <div class="dot_block">
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                  </div>
                </div>
                <div class="pkg_name">
                  <h3>Premium</h3>
                  <span>For small team</span>
                </div>
                <span class="price">$55<span>/Month</span></span>
                <ul class="benifits">
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>7 Days free trial</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>2 platform of your choice</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>10 GB Dedicated Hosting free</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>Unlimited updates</p>
                  </li>
                  <li class="exclude">
                    <p><i class="icofont-close-circled"></i>Live support</p>
                  </li>
                </ul>
                <a href="#" class="btn btn_main">BUY NOW <i class="icofont-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- pricing box monthly end -->

        <!-- pricing box yearly start -->
        <div class="pricing_pannel yearly_plan" data-aos="fade-up" data-aos-duration="1500">
          <div class="row">

            <!-- pricing box 1 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="icon">
                  <img src="images/new/Free-Trial-01.svg" alt="image">
                  <div class="dot_block">
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                  </div>
                </div>
                <div class="pkg_name">
                  <h3>Free Trial</h3>
                  <span>For the basics</span>
                </div>
                <span class="price">$0<span>/Year</span></span>
                <ul class="benifits">
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>7 Days free trial</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>2 platform of your choice</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>10 GB Dedicated Hosting free</p>
                  </li>
                  <li class="exclude">
                    <p><i class="icofont-close-circled"></i>Unlimited updates</p>
                  </li>
                  <li class="exclude">
                    <p><i class="icofont-close-circled"></i>Live support</p>
                  </li>
                </ul>
                <a href="#" class="btn btn_main">BUY NOW <i class="icofont-arrow-right"></i></a>
              </div>
            </div>

            <!-- pricing box 2 -->
            <div class="col-md-4">
              <div class="pricing_block highlited_block">
                <div class="icon">
                  <img src="images/new/unlimited.png" alt="image">
                  <div class="dot_block">
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                  </div>
                </div>
                <div class="pkg_name">
                  <h3>Unlimited</h3>
                  <span>For the professionals</span>
                </div>
                <span class="price">$999<span>/Year</span></span>
                <ul class="benifits">
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>7 Days free trial</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>2 platform of your choice</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>10 GB Dedicated Hosting free</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>Unlimited updates</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>Live support</p>
                  </li>
                </ul>
                <a href="#" class="btn btn_main">BUY NOW <i class="icofont-arrow-right"></i></a>
              </div>
            </div>

            <!-- pricing box 3 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="icon">
                  <img src="images/new/Premium.svg" alt="image">
                  <div class="dot_block">
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                    <span class="dot_anim"></span>
                  </div>
                </div>
                <div class="pkg_name">
                  <h3>Premium</h3>
                  <span>For small team</span>
                </div>
                <span class="price">$555<span>/Year</span></span>
                <ul class="benifits">
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>7 Days free trial</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>2 platform of your choice</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>10 GB Dedicated Hosting free</p>
                  </li>
                  <li class="include">
                    <p><i class="icofont-check-circled"></i>Unlimited updates</p>
                  </li>
                  <li class="exclude">
                    <p><i class="icofont-close-circled"></i>Live support</p>
                  </li>
                </ul>
                <a href="#" class="btn btn_main">BUY NOW <i class="icofont-arrow-right"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- container start end -->
    </section>
    <!-- Pricing-Section end -->

    <!-- FAQ-Section start -->
    <section id="faqBlock" class="row_am faq_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2><span>FAQ</span> - Frequently Asked Questions</h2>
          <!-- p -->
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
            standard dummy.</p>
        </div>
        <!-- faq data -->
        <div class="faq_panel">
          <div class="accordion" id="accordionExample">
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                    <i class="icon_faq icofont-plus"></i> How can i pay ?</button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                    industrys standard dummy text ever since the when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i> How to setup account ?</button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                    industrys standard dummy text ever since the when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseThree"><i class="icon_faq icofont-plus"></i>What is process to get refund
                    ?</button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                    industrys standard dummy text ever since the when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseFour"><i class="icon_faq icofont-plus"></i>What is process to get refund
                    ?</button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                    industrys standard dummy text ever since the when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- FAQ-Section end -->


    <!-- Interface overview-Section start -->
    <section class="row_am interface_section">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <h2>Interface overview</h2>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typese tting indus orem Ipsum has beenthe standard
          dummy text ever since.
        </p>
      </div>
      <!-- screen slider start -->
      <div class="screen_slider" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
        <div id="screen_slider" class="owl-carousel owl-theme">
          <div class="item">
            <div class="screen_frame_img">
              <img src="images/new/Interface-overview-01.png" alt="image">
              <h3 class="caption">Report Page</h3>
            </div>
          </div>
          <div class="item">
            <div class="screen_frame_img">
              <img src="images/new/Interface-overview-02.png" alt="image">
              <h3 class="caption">Dashboard</h3>
            </div>
          </div>
          <div class="item">
            <div class="screen_frame_img">
              <img src="images/new/Interface-overview-03.png" alt="image">
              <h3 class="caption">Report Page</h3>
            </div>
          </div>
          <div class="item">
            <div class="screen_frame_img">
              <img src="images/new/Interface-overview-02.png" alt="image">
              <h3 class="caption">Dashboard</h3>
            </div>
          </div>
          <div class="item">
            <div class="screen_frame_img">
              <img src="images/new/Interface-overview-01.png" alt="image">
              <h3 class="caption">Report Page</h3>
            </div>
          </div>
          <div class="item">
            <div class="screen_frame_img">
              <img src="images/new/Interface-overview-03.png" alt="image">
              <h3 class="caption">Report Page</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- screen slider end -->
    </section>
    <!-- Interface overview-Section end -->

    <!-- Start Your Free Trial Section Start -->
    <section class="free_trial_section" data-aos="fade-in" data-aos-duration="1500">
      <div class="free_inner">
        <!-- vertical line animation -->
          <div class="anim_line dark_bg">
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
          </div>
        <div class="text">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
            <h2>Start Your 14-Day Free Trial</h2>
            <p>Instant free download from apple and play store orem Ipsum is simply dummy
              text of the printing.</p>
          </div>
          <ul data-aos="fade-up" data-aos-duration="1500">
            <li>
              <p><i class="icofont-check-circled"></i>Free 14-day trial</p>
            </li>
            <li>
              <p><i class="icofont-check-circled"></i>No credit card required</p>
            </li>
            <li>
              <p><i class="icofont-check-circled"></i>Support 24/7</p>
            </li>
            <li>
              <p><i class="icofont-check-circled"></i>Cancel anytime</p>
            </li>
          </ul>
          <div class="start_and_watch" data-aos="fade-up" data-aos-duration="1500">
            <a href="contact-us.html" class="btn btn_main">GET STARTED <i class="icofont-arrow-right"></i></a>
            <a class="popup-youtube play-button" data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&amp;mute=1"
              data-toggle="modal" data-target="#myModal" title="XJj2PbenIsU">
              <div class="play_btn">
                <img src="images/play_icon-white.png" alt="image">
                <div class="waves-block">
                  <div class="waves wave-1"></div>
                  <div class="waves wave-2"></div>
                  <div class="waves wave-3"></div>
                </div>
              </div>
              <span>WATCH PROMO</span>
            </a>
          </div>
        </div>
        <div class="side_img">
          <img src="images/new/start-free-side-img.png" alt="image">
        </div>
      </div>
    </section>
    <!-- Start Your Free Trial Section End -->


    <!-- Story-Section-Start -->
    <section class="row_am latest_story" id="blog">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
          <h2>Read latest <span>story</span></h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
            standard dummy.</p>
        </div>
        <!-- row start -->
        <div class="row">
          <!-- story -->
          <div class="col-md-4">
            <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
              <div class="story_img">
                <img src="images/new/story-01.png" alt="image">
                <span><span>23</span> AUG</span>
              </div>
              <div class="story_text">
                <div class="statstic">
                  <span><i class="icofont-user-suited"></i> Admin</span>
                  <span><i class="icofont-speech-comments"></i> 36 Comments</span>
                </div>
                <h3>Powerfull features makes
                  software awesome !</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been.</p>
                <a href="blog-detail.html" class="btn text_btn">READ MORE <i class="icofont-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- story -->
          <div class="col-md-4">
            <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
              <div class="story_img">
                <img src="images/new/story-02.png" alt="image">
                <span><span>18</span> AUG</span>
              </div>
              <div class="story_text">
                <div class="statstic">
                  <span><i class="icofont-user-suited"></i> Admin</span>
                  <span><i class="icofont-speech-comments"></i> 36 Comments</span>
                </div>
                <h3>Why software is globally used as best software</h3>
                <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                <a href="blog-detail.html" class="btn text_btn">READ MORE <i class="icofont-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- story -->
          <div class="col-md-4">
            <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
              <div class="story_img">
                <img src="images/new/story-03.png" alt="image">
                <span><span>9</span> AUG</span>
              </div>
              <div class="story_text">
                <div class="statstic">
                  <span><i class="icofont-user-suited"></i> Admin</span>
                  <span><i class="icofont-speech-comments"></i> 36 Comments</span>
                </div>
                <h3>Beautiful user interface with bug free code.</h3>
                <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                <a href="blog-detail.html" class="btn text_btn">READ MORE <i class="icofont-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Story-Section-end -->

    <!-- Need support Section Start -->
    <section class="need_section">
      <div class="need_section_inner">
        <div class="container">
          <div class="need_block">
            <div class="need_text">
              <div class="section_title">
                <h2>Need support ? contact our team</h2>
                <p><i class="icofont-clock-time"></i> Mon - Fri: 9 am to 5 am</p>
              </div>
            </div>
            <div class="need_action">
              <a href="tel:1234567899" class="btn"><i class="icofont-phone-circle"></i> +1 123 456 7890</a>
              <a href="#faqBlock" class="faq_btn">Read The FAQ </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Need support Section End -->

    <!-- Footer-Section start -->
    <footer>
      <div class="top_footer" id="contact">

        <div class="container">
          <!-- vertical line animation -->
          <div class="anim_line dark_bg">
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
            <span><img src="images/anim_line_2.png" alt="anim_line"></span>
          </div>
      </div>

        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <!-- footer link 1 -->
            <div class="col-lg-4 col-md-6 col-12">
              <div class="abt_side">
                <div class="logo"> <img src="images/new/Logo.png" alt="image"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry ype setting industry lorem
                  Ipsum has been the industrys standard dummy. </p>
                <div class="news_letter_block">
                  <form action="https://kalanidhithemes.com/live-preview/landing-page/codely/all-demo/06-codely-landing-page-get-started-hero/submit">
                    <div class="form-group">
                      <input type="email" placeholder="Enter your email" class="form-control">
                      <button class="btn"><i class="icofont-paper-plane"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- footer link 2 -->
            <div class="col-lg-2 col-md-6 col-12">
              <div class="links">
                <h3>Useful Links</h3>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="service-list-1.html">Services</a></li>
                  <li><a href="service-detail.html">Service Detail</a></li>
                  <li><a href="blog-list.html">Blog</a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 3 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>Help & Suport</h3>
                <ul>
                  <li><a href="contact-us.html">Contact us</a></li>
                  <li><a href="faq.html">FAQs</a></li>
                  <li><a href="#">How it works</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                  <li><a href="#">Privacy policy</a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 4 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="try_out">
                <h3>Contact us</h3>
                <ul>
                  <li>
                    <span class="icon">
                      <img src="images/new/contact_01.png" alt="image">
                    </span>
                    <div class="text">
                      <p>Reach us <br> 599, Vilium Crossing, NJ</p>
                    </div>
                  </li>
                  <li>
                    <span class="icon">
                      <img src="images/new/contact_02.png" alt="image">
                    </span>
                    <div class="text">
                      <p>Call us <a href="tel:+1-900-1234567">+1-900-123 4567</a></p>
                    </div>
                  </li>
                  <li>
                    <span class="icon">
                      <img src="images/new/contact_03.png" alt="image">
                    </span>
                    <div class="text">
                      <p>Email us <a href="mailto:support@example.com">support@example.com</a></p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- last footer -->
      <div class="bottom_footer">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-md-4">
              <p>© Copyrights 2023. All rights reserved.</p>
            </div>
            <div class="col-md-4">
              <ul class="social_media">
                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <p class="developer_text">Design & developed by <a href="https://themeforest.net/user/kalanidhithemes" target="blank">Kalanidhi Themes</a></p>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- go top button -->
      <div class="go_top" id="Gotop">
        <span><i class="icofont-arrow-up"></i></span>
      </div>
    </footer>
    <!-- Footer-Section end -->


    <!-- VIDEO MODAL -->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
            <i class="icofont-close-line-circled"></i>
          </button>
          <div class="modal-body">
            <div id="video-container" class="video-container">
              <iframe id="youtubevideo" width="640" height="360" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Page-wrapper-End -->

  <!-- Jquery-js-Link -->
  <script src="{{ asset('landing_assets/js/jquery.js') }}"></script>
  <!-- owl-js-Link -->
  <script src="{{ asset('landing_assets/js/owl.carousel.min.js') }}"></script>
  <!-- bootstrap-js-Link -->
  <script src="{{ asset('landing_assets/js/bootstrap.min.js') }}"></script>
  <!-- aos-js-Link -->
  <script src="{{ asset('landing_assets/js/aos.js') }}"></script>
  <!-- main-js-Link -->
  <script src="{{ asset('landing_assets/js/main.js') }}"></script>


</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/codely/all-demo/06-codely-landing-page-get-started-hero/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2024 02:07:38 GMT -->
</html>