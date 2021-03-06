<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Wallney | Ahorro Inteligente </title>
    <!-- Plugins CSS -->
    <link
      rel="stylesheet"
      href="{{ url('web-assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}"
    />
    <link rel="stylesheet" href="{{ url('web-assets/plugins/meanmenu/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ url('web-assets/plugins/slick-1.8.1/slick.css') }}" />
    <link rel="stylesheet" href="{{ url('web-assets/plugins/fancybox-master/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ url('web-assets/plugins/aos-animation/aos.css') }}" />
    <!-- fonts -->
    <link rel="stylesheet" href="{{ url('web-assets/fonts/ep-icon-fonts/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('web-assets/fonts/fontawesome-5/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ url('web-assets/fonts/typography-font/typo-fonts.css') }}" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ url('web-assets/css/settings.css') }}" />
    <link rel="stylesheet" href="{{ url('web-assets/css/style.css') }}" />
  </head>

  <body>
    <div class="site-wrapper">
      <!-- Header Starts -->
      <header class="site-header position-relative d-none d-lg-block">
        <div class="container-fluid pr-lg--30 pl-lg--30">
          <div class="row justify-content-between align-items-center position-relative" >
            <div class="col-sm-3 col-6 col-lg-2 col-xl-2 order-lg-1">
              <!-- Brand Logo -->
              <div class="brand-logo">
                <a href=""><img src="{{ url('web-assets/image/logo-header.png') }}" alt=""/></a>
              </div>
            </div>
            <!-- Menu Block -->
            <div class=" col-6 col-sm-1 col-lg-6 col-xl-8   position-static order-lg-2">
              <div class="main-navigation ">
                <ul class="main-menu">
                  <li class="menu-item has-dropdown">
                    <a href="#app">App</a>
                  </li>
                  <li class="menu-item "><a href="#features">Grupos</a></li>
                </ul>
                <div class="header-btns justify-content-end">
                    <a href="#descargar" class="btn btn--primary btn--medium">Descargar</a>
                </div>
            </div>
							
            </div>
          </div>
        </div>
      </header>

      <!-- Mobile menu Header Starts -->
      <header
        class="mobile-header d-lg-none "
      >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 col-7">
              <a href="/" class="site-brand">
                <img src="{{ url('web-assets/image/logo-header.png') }}" alt="" />
              </a>
            </div>
            <div class="col-md-8 col-5 text-right">
              <div class="header-top-widget">
                <ul class="header-links">
                  <li class="single-link">
                    <a href="#" class="link-icon hamburger-icon off-canvas-btn"
                      ><i class="icon icon-menu-34"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!--Off Canvas Navigation Start-->
      <aside class="off-canvas-wrapper">
        <div class="btn-close-off-canvas">
          <i class="icon icon-simple-remove"></i>
        </div>
        <div class="off-canvas-inner">
          <!-- mobile menu start -->
          <div class="mobile-navigation">
            <!-- mobile menu navigation start -->
            <nav class="off-canvas-nav">
              <ul class="mobile-menu">
                <li class="menu-item has-dropdown">
                  <a href="#app">App</a>
                </li>
                <li class="menu-item "><a href="#features">Grupos</a></li>
              </ul>
              <div class="header-btns justify-content-end">
                  <a href="#descargar" class="btn btn--primary btn--medium">Descargar</a>
              </div>
            </nav>
            <!-- mobile menu navigation end -->
          </div>
          <!-- mobile menu end -->
        </div>
      </aside>
      <!--Off Canvas Navigation End-->

      <!-- Banner Section -->

      <section class="hero-area position-relative section-padding pb-lg--0">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-6  pb-lg--90 pb-xl--0 order-2 order-md-1">
              <div class="hero-content">
                <h1 class="title mb--30">
                  La forma inteligente de ahorrar dinero
                </h1>
                <p>
                  Controla tu dinero al 100% <br>
                   Crea grupos con tu familia o amigxs y conseguid esas metas que tanto queréis.
                </p>
              </div>

              <div class="hero-btns mt--40">
                <a href="#" class="android btn btn--primary btn--large mr--15"
                  ><i class="fab fa-android"></i
                  ><span class="p2">Descárgala en Android</span></a
                >
                <a href="#" class="apple btn btn--primary btn--large"
                  ><i class="fab fa-apple"></i
                  ><span class="p2">Descárgala en iOS</span></a
                >
              </div>
            </div>

            <div class="col-md-4 col-lg-5 col-xl-6 col-10 mb--30 mb-md--0 order-1 order-md-2" style="margin: 0 auto;">
              <div class="hero-image position-relative">
                  <div class="absolute-image image-1 d-none d-lg-block" data-aos="fade-left" data-aos-duration="1500"  data-aos-delay="300" data-aos-once="true">
                      <img src="{{ url('web-assets/image/hero-phone-1.png') }}" alt="">
                  </div>
                  <div class="absolute-image image-2 d-none d-lg-block">
                        <img src="{{ url('web-assets/image/hero-phone-2.png') }}" alt="">
                  </div>
                <div class="image-mobile d-lg-none">
                    <img src="{{ url('web-assets/image/Phone_Images.png') }}" alt="" />
                </div>
                <div class="phn-shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="200">
                  <img src="{{ url('web-assets/image/phn-shape.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" data-aos-delay="100"><img src="{{ url('web-assets/image/hero-shape.png') }}" alt="" /></div>
      </section>

      <!-- Content Section 02 -->
      <section class="content-02 section-padding-top">
        <div class="container">
          <div class="content-wrapper">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-4 col-md-4 col-sm-7 col-7 order-1">
                <div class="content-image-01"data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                  <img src="{{ url('web-assets/image/iPhone 2.png') }}" alt="" />
                </div>
              </div>

              <div class=" col-md-8 col-lg-7 col-xl-6 offset-lg-1 offset-xl-1 order-2" data-aos="fade-up"  data-aos-duration="1500" data-aos-once="true">
                <h2 class="title h2">Ten todo bajo control.</h2>

                <div class="content-widgets">
                  <div class="content-widget-wrapper">
                    <div class="content-widget">
                      <div class="widget-icon">
                        <i class="fas fa-shopping-basket"></i>
                      </div>

                      <div class="content">
                        <h6 class="widget-title">Gestiona tus gastos</h6>
                        <p>
                          Podrás saber en todo momento cuanto llevas gastado y comparar con meses anteriores.
                        </p>
                      </div>
                    </div>

                    <div class="content-widget">
                      <div class="widget-icon">
                        <i class="fas fa-coins"></i>
                      </div>

                      <div class="content">
                        <h6 class="widget-title">Y tus ingresos</h6>
                        <p>
                          Desde tu nómina hasta ese euro que te encuentras tirado en casa. ¡Todo vale!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- <section class="feature-section section-padding-top">
        <div class="container">
          <div class="row space-dt--20">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt--20" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true" data-aos-delay="100">
              <div class="feature-widget">
                <div class="widget-icon">
                  <span>01</span>
                </div>
                <div class="content">
                  <h6 class="title">Modern design</h6>
                  <p>
                    Create custom landing pages with Berlin that convert more
                    visitors than any website.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt--20" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true" data-aos-delay="300">
              <div class="feature-widget">
                <div class="widget-icon">
                  <span>02</span>
                </div>
                <div class="content">
                  <h6 class="title">Easy to find</h6>
                  <p>
                    Create custom landing pages with Berlin that convert more
                    visitors than any website.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt--20" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true" data-aos-delay="600">
              <div class="feature-widget">
                <div class="widget-icon">
                  <span>03</span>
                </div>
                <div class="content">
                  <h6 class="title">Quick booking</h6>
                  <p>
                    Create custom landing pages with Berlin that convert more
                    visitors than any website.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="section-divider section-padding-top"></div>
        </div>
      </section> --}}

      <!-- Content Section 01 -->
      <section id="features" class="content-section section-padding-top">
        <div class="container">
          <div class="content-wrapper">
            <div class="row justify-content-center">
              <div
                class="col-sm-5 col-md-4 col-lg-5 col-xl-5 offset-xl-1 col-sm-7 col-7 order-1 order-md-2"
              >
                <div class="content-image-01" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300" data-aos-once="true">
                  <img src="{{ url('web-assets/image/iPhone-group.png') }}" alt="" />
                </div>
              </div>

              <div
                class="col-sm-10 col-md-7 col-lg-6 offset-md-1 col-xl-5 order-2 order-md-1">
                <div class="badge" style="background-color: #f85f5f" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
                  <i class="fas fa-fire"></i>
                  <span>top</span>
                </div>
                <div class="content-right-content" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="500" data-aos-once="true">
                  <h2 class="title h2">Ahorra con tus amigxs.</h2>
                  <p>
                    Crea o únete a grupos con quién quieras y ahorra en compañía. Si tenéis algo que queréis hacer juntxs, asignad una meta y un porcentaje que se destinará a ese grupo desde la fecha en que te unas.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="section-divider"></div>
        </div>
      </section>

      <!-- Example Section -->
      <section id="app" class="example-section position-relative section-padding">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12">
            <div class="section-title">
              <h2 class="example-title h2">¡Échale un ojo!</h2>
              <p>
                Un diseño actual, simple y sobre todo útil. Cuidamos todos los detalles para que tengas la mejor experiencia.
                <br class="d-none d-lg-block">
                Porque cuando se trata de ahorrar, ¡menos es más!
              </p>
            </div>
          </div>
        </div>
        <div class="container-fluid px--0">
          <div class="example-slider-wrapper mb--50 mb-lg--70">
							<div class="example-slider">
								<div class="single-slide">
									<div class="example-image">
										<img src="{{ url('web-assets/image/BG (1).png') }}" alt="" />
									</div>
								</div>
		
								<div class="single-slide">
									<div class="example-image">
										<img src="{{ url('web-assets/image/BG.png') }}" alt="" />
									</div>
								</div>
		
								<div class="single-slide">
									<div class="example-image">
										<img src="{{ url('web-assets/image/BG(2).png') }}" alt="" />
									</div>
								</div>
		
								<div class="single-slide">
									<div class="example-image">
										<img src="{{ url('web-assets/image/BG(3).png') }}" alt="" />
									</div>
								</div>
							</div>
							<div class="phone-bg-img">
								<img src="{{ url('web-assets/image/iphone-xr.svg') }}" alt="" />
							</div>
					</div>
        </div>
      </section>

      <!-- CTA Section -->

      <section id="descargar" class="cta-section position-relative section-padding ">
        <div class="container">
          <div class="cta-wrapper">
            <div class="cta-icon" >
              <i class="fas fa-download"></i>
            </div>

            <h2 class="cta-title h2">Descárgala ahora</h2>
            <div class="cta-btns mb--30">
              <a href="/download/wallney.apk" class="android btn btn--primary btn--large"
                ><i class="fab fa-android"></i
                ><span class="p2">Descarga para Andorid</span></a
              >
              <a href="#" class="apple btn btn--primary btn--large"
                ><i class="fab fa-apple"></i
                ><span class="p2">Descarga para  iOS</span></a
              >
            </div>
            <p>
              Ahorra fácilmente y con amigxs. <br>
              Consigue tus metas.
            </p>
          </div>
        </div>
        <div class="cta-shape" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" >
          <img src="{{ url('web-assets/image/Path_2_Copy.png') }}" alt="" />
        </div>
      </section>

      <!-- Footer Section -->

      <section class="footer-section mt--30 mt-md--50 mt-lg--70 section-padding-top">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-3">
                <img src="{{ url('web-assets/image/logo-header.png') }}" alt="Wallney">
            </div>
            <div class="col-lg-4 col-xl-4 col-sm-8 col-11 col-md-6">
              <div class="footer-content">
                <p class="p1">
                  Gestiona todos tus gastos e ingresos de la forma más fácil.
                  Wallney. El ahorro inteligente.
                </p>
              </div>
            </div>

            <div class="col-lg-4 offset-lg-1">
              <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-6">
                    <span class="contact-title p1">App</span><br>
                    Grupos <br>
                    Ingresos <br>
                    Gastos <br>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <span class="contact-title p1">Contacta</span><br>
                  jose@wallney.es <br>
                  daniel@wallney.es
                </div>
              </div>
            </div>
          </div>

          <div class="row align-items-center mt--30 mt-md--50 mt-lg--10 section-padding-top">
            <div class="col-lg-3 col-md-3 col-sm-4 col-8">
              <p class="footer-copyright-text text-lg-left p3">
                ©{{ date('Y') }} Wallney.
              </p>
            </div>

            <div
              class="col-lg-2 col-md-2 offset-md-4 col-sm-4 offset-sm-3 offset-lg-7 offset-xl-6 col-4"
            >
              <ul class="footer-social-list">
                <li>
                  <a href="">
                    <i class="icon icon-logo-fb-simple"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="icon icon-logo-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="icon icon-google"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Vendor JS-->
    <script src="{{ url('web-assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('web-assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ url('web-assets/plugins/bootstrap-4.3.1/js/bootstrap.bundle.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ url('web-assets/plugins/meanmenu/jquery.meanmenu.js') }}"></script>
    <script src="{{ url('web-assets/plugins/slick-1.8.1/slick.min.js') }}"></script>
    <script src="{{ url('web-assets/plugins/fancybox-master/jquery.fancybox.min.js') }}"></script>
	<script src="{{ url('web-assets/plugins/aos-animation/aos.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ url('web-assets/js/active.js') }}"></script>
  </body>
</html>
