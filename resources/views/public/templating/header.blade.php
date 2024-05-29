    <!-- loader -->
    <div class="preloader">
      <div class="loader4"></div>
    </div>
    <!-- loader end -->
    <header class="topnav">
      <div class="container">
        <div class="header-bar">
          <a href="{{ route('index') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" />
          </a>
          <nav class="navbar">
            <ul class="navbar-links">
              <li class="navbar-dropdown has-children">
                <a href="{{ route('index') }}">Beranda</a>
              </li>
              <li class="navbar-dropdown">
                <a href="{{ route('about') }}">Tentang</a>
              </li>
              <li class="navbar-dropdown has-children">
                <a href="{{ route('product') }}">Produk</a>
              </li>
              <li class="navbar-dropdown">
                <a href="{{ route('contact') }}">Kontak</a>
              </li>
            </ul>
          </nav>
          <div class="pickup">
            <div class="menu-icon cursor-pointer">
              <span class="text">
                <span class="word">Menu</span>
              </span>
              <span class="icon">
                <i></i>
                <i></i>
              </span>
            </div>
            <div class="bar-menu">
              <i class="fa-solid fa-bars"></i>
            </div>
          </div>
        </div>
        <div
          class="mobile-nav hmburger-menu"
          id="mobile-nav"
          style="
            display: block;
            background-image: url('{{ asset("assets/img/background.png") }}');
          ">
          <div class="res-log">
            <a href="index.html">
              <img src="{{asset('assets/img/logo-b.png')}}" alt="Responsive Logo" />
            </a>
          </div>
          <ul>
            <li class="menu-item-has-children">
              <a href="JavaScript:void(0)"
                >Home<i class="fa-solid fa-angle-right"></i
              ></a>
              <ul class="sub-menu">
                <li><a href="index.html">Home 1</a></li>
                <li><a href="index-2.html">Home 2</a></li>
                <li><a href="index-3.html">Home 3</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="menu-item-has-children">
              <a href="JavaScript:void(0)"
                >Pages<i class="fa-solid fa-angle-right"></i
              ></a>
              <ul class="sub-menu">
                <li><a href="services.html">Services</a></li>
                <li><a href="service-details.html">Service details</a></li>
                <li><a href="team-details.html">team details</a></li>
                <li><a href="pricing-plans.html">pricing plans</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="JavaScript:void(0)"
                >Project<i class="fa-solid fa-angle-right"></i
              ></a>
              <ul class="sub-menu">
                <li><a href="project-details-1.html">project details 1</a></li>
                <li><a href="project-details-2.html">project details 2</a></li>
                <li><a href="our-projects.html">our projects</a></li>
                <li><a href="our-projects-2.html">our projects 2</a></li>
              </ul>
            </li>
            <li><a href="faqs.html">FAQs</a></li>
            <li class="menu-item-has-children">
              <a href="JavaScript:void(0)"
                >News<i class="fa-solid fa-angle-right"></i
              ></a>
              <ul class="sub-menu">
                <li><a href="our-blog.html">our blog</a></li>
                <li><a href="blog-details.html">blog details</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact us</a></li>
          </ul>
          <div class="menu-sidebar-single-widget">
            <h5 class="menu-sidebar-title">Contact Info</h5>
            <div class="header-contact-info">
              <span
                ><i class="fa-solid fa-location-dot"></i>20, Bordeshi, New York,
                US</span
              >
              <span>
                <a href="mailto:username@domain.com">
                  <i class="fa-solid fa-envelope"></i>username@domain.com
                </a>
              </span>
              <span
                ><a href="callto:+123-456-7890"
                  ><i class="fa-solid fa-phone"></i>+123-456-7890</a
                ></span
              >
            </div>
            <div class="social-profile">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
          <a href="JavaScript:void(0)" id="res-cross"
            ><i class="fa-regular fa-circle-xmark"></i
          ></a>
        </div>
      </div>
      <div class="hamenu valign">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 valign">
              <div class="cont-info two">
                <div class="about-sasnio bottom">
                  <h4>Tentang Nilapond</h4>
                  <p>
                    Kolam Nila kami adalah tujuan utama bagi pelanggan yang memprioritaskan kualitas dan kesehatan.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 valign">
              <div class="cont-info">
                <div class="item mb-50">
                  <h6 class="text-u fw-600 mb-20">Lokasi</h6>
                  <p class="fw-400 fz-18">
                    Perumahan Bukit Asri, jl. Pinus 3 Pagelaran, Kec. Ciomas, Kab. Bogor, Jawa Barat
                  </p>
                </div>
                <div class="item mb-50">
                  <h6 class="text-u fw-600 mb-20">Bagaimana Cara Menghubungi Kami</h6>
                  <p class="fw-400 fz-18">
                    <a href="https://wa.me/6281310620126" target="_blank"
                      >+62 813-1062-0126</a
                    >
                  </p>
                  <p class="fw-400 fz-18">
                    <a href="mailto:username@domain.com">nilapond@gmail.com</a>
                  </p>
                </div>
                <div class="bottom">
                  <h6 class="text-u fw-600 mb-20">Ikuti kami</h6>
                  <ul class="rest social-text d-flex fz-13">
                    <li>
                      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                      <a
                        href="https://www.youtube.com/@Tutorialmotivasiinspirasi"
                        target="_blank"
                        ><i class="fa-brands fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>