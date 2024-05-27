@extends('public.templating.layout')
@section('title', 'NilaPond - Page Name')
@section('content')
<section class="hero-section-one">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-one-text">
              <h1>Primary Choice for Health and Fish Quality</h1>
              <h5>
                "Our Nila Pond is the primary destination for customers who
                prioritize quality and health."
              </h5>
              <div>
                <a href="{{ route('product') }}" class="btn">Get Started</a>
                <!-- <a href="#" class="btn two">find out more</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-one-img">
              <img src="assets/img/ppp.png" alt="hero-one-img" />
              <div class="shaps-hero">
                <img
                  src="assets/img/shaps-1.png"
                  alt="dots-shaps"
                  class="shaps-1" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="gap">
      <div class="container">
        <div class="heading">
          <img src="assets/img/heading-img.png" alt="heading-img" />
          <h6>Solutions for all your needs</h6>
          <h2>Why Choose Nila-Pond?</h2>
        </div>
        <div class="row services-slider owl-carousel owl-theme">
          <div class="col-lg-12 item">
            <div class="services">
              <i>
                <svg
                  enable-background="new 0 0 68 68"
                  height="512"
                  viewBox="2 1 68 72"
                  width="512"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M25.6666 70L19.3333 59.3333L7.33331 56.6667L8.49998 44.3333L0.333313 35L8.49998 25.6667L7.33331 13.3333L19.3333 10.6667L25.6666 0L37 4.83333L48.3333 0L54.6666 10.6667L66.6666 13.3333L65.5 25.6667L73.6666 35L65.5 44.3333L66.6666 56.6667L54.6666 59.3333L48.3333 70L37 65.1667L25.6666 70ZM28.5 61.5L37 57.8333L45.6666 61.5L50.3333 53.5L59.5 51.3333L58.6666 42L64.8333 35L58.6666 27.8333L59.5 18.5L50.3333 16.5L45.5 8.5L37 12.1667L28.3333 8.5L23.6666 16.5L14.5 18.5L15.3333 27.8333L9.16665 35L15.3333 42L14.5 51.5L23.6666 53.5L28.5 61.5ZM33.5 46.8333L52.3333 28L47.6666 23.1667L33.5 37.3333L26.3333 30.3333L21.6666 35L33.5 46.8333Z" />
                </svg>
              </i>
              <a href="#">Best Quality</a>
              <p>
                We ensure that every step of our production is environmentally
                friendly.
              </p>
            </div>
          </div>
          <div class="col-lg-12 item">
            <div class="services">
              <i>
                <svg
                  id="Line_Expand"
                  enable-background="new 0 0 88 88"
                  height="512"
                  viewBox="0 0 88 88"
                  width="512"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M30.15 61.275C33.9375 51.8625 38.2125 41.1 54.375 37.5C54.375 37.5 35.625 37.5 29.55 54.8625C29.55 54.8625 26.25 51.5625 26.25 47.8125C26.25 44.0625 30 36.1125 39.375 34.2375C42.0375 33.75 45 33.2625 47.925 32.85C55.3125 31.875 62.4 30.825 63.75 28.125C63.75 28.125 58.125 60 37.5 60C36.825 60 35.8875 59.775 34.9875 59.4375L33.225 63.75L29.6625 62.5125L30.15 61.275ZM45 15C61.5375 15 75 28.4625 75 45C75 61.5375 61.5375 75 45 75C28.4625 75 15 61.5375 15 45C15 28.4625 28.4625 15 45 15ZM45 7.5C24.375 7.5 7.5 24.375 7.5 45C7.5 65.625 24.375 82.5 45 82.5C65.625 82.5 82.5 65.625 82.5 45C82.5 24.375 65.625 7.5 45 7.5Z" />
                </svg>
              </i>
              <a href="#">Organic Product</a>
              <p>
                Our products use organic cultivation methods that do not contain
                harmful chemicals.
              </p>
            </div>
          </div>
          <div class="col-lg-12 item">
            <div class="services">
              <i>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  id="Icons"
                  viewBox="0 0 60 60"
                  width="512"
                  height="512">
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M55.2731 71.1094C50.8148 73.2308 45.9374 74.3254 41 74.3125C22.632 74.3125 7.68751 59.368 7.68751 41C7.68751 33.1203 10.3961 25.6788 15.375 19.7107V25.625H20.5V10.25H5.12501V15.375H12.4076C6.05433 22.3957 2.54437 31.5314 2.56251 41C2.56251 62.1944 19.8056 79.4375 41 79.4375C46.6999 79.452 52.3305 78.1875 57.4769 75.7372L55.2731 71.1094Z" />
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M53.8125 23.0625C45.715 23.0625 39.0756 29.3586 38.4939 37.31C35.6766 34.7397 32.0011 33.314 28.1875 33.3125H17.9375V43.5625C17.9375 52.0418 24.8357 58.9375 33.3125 58.9375H38.4375V69.1875H43.5625V48.6875H48.6875C57.1642 48.6875 64.0625 41.7918 64.0625 33.3125V23.0625H53.8125ZM33.3125 53.8125C27.6596 53.8125 23.0625 49.2154 23.0625 43.5625V38.4375H28.1875C33.8404 38.4375 38.4375 43.0346 38.4375 48.6875V50.1891L32.5617 44.3133L28.9383 47.9367L34.8141 53.8125H33.3125ZM58.9375 33.3125C58.9375 38.9654 54.3404 43.5625 48.6875 43.5625H47.1859L53.0617 37.6867L49.4383 34.0633L43.5625 39.9391V38.4375C43.5625 32.7846 48.1596 28.1875 53.8125 28.1875H58.9375V33.3125Z" />
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M79.4375 41C79.4375 19.8056 62.1944 2.5625 41 2.5625C35.3001 2.54803 29.6695 3.81249 24.5231 6.26275L26.7269 10.8906C31.1853 8.76917 36.0627 7.6746 41 7.6875C59.368 7.6875 74.3125 22.632 74.3125 41C74.3125 48.8797 71.6039 56.3212 66.625 62.2892V56.375H61.5V71.75H76.875V66.625H69.5924C75.9457 59.6043 79.4556 50.4686 79.4375 41Z" />
                </svg>
              </i>
              <a href="#">Affordable Prices</a>
              <p>
                We maintain quality standards from seed selection to maintenance
                in cultivation.
              </p>
            </div>
          </div>
          <div class="col-lg-12 item">
            <div class="services">
              <i>
                <svg
                  id="Layer_5"
                  enable-background="new 0 0 64 64"
                  height="512"
                  viewBox="0 0 88 88"
                  width="512"
                  xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M55.2731 71.1094C50.8148 73.2308 45.9374 74.3254 41 74.3125C22.632 74.3125 7.68751 59.368 7.68751 41C7.68751 33.1203 10.3961 25.6788 15.375 19.7107V25.625H20.5V10.25H5.12501V15.375H12.4076C6.05433 22.3957 2.54437 31.5314 2.56251 41C2.56251 62.1944 19.8056 79.4375 41 79.4375C46.6999 79.452 52.3305 78.1875 57.4769 75.7372L55.2731 71.1094Z" />
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M53.8125 23.0625C45.715 23.0625 39.0756 29.3586 38.4939 37.31C35.6766 34.7397 32.0011 33.314 28.1875 33.3125H17.9375V43.5625C17.9375 52.0418 24.8357 58.9375 33.3125 58.9375H38.4375V69.1875H43.5625V48.6875H48.6875C57.1642 48.6875 64.0625 41.7918 64.0625 33.3125V23.0625H53.8125ZM33.3125 53.8125C27.6596 53.8125 23.0625 49.2154 23.0625 43.5625V38.4375H28.1875C33.8404 38.4375 38.4375 43.0346 38.4375 48.6875V50.1891L32.5617 44.3133L28.9383 47.9367L34.8141 53.8125H33.3125ZM58.9375 33.3125C58.9375 38.9654 54.3404 43.5625 48.6875 43.5625H47.1859L53.0617 37.6867L49.4383 34.0633L43.5625 39.9391V38.4375C43.5625 32.7846 48.1596 28.1875 53.8125 28.1875H58.9375V33.3125Z" />
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M79.4375 41C79.4375 19.8056 62.1944 2.5625 41 2.5625C35.3001 2.54803 29.6695 3.81249 24.5231 6.26275L26.7269 10.8906C31.1853 8.76917 36.0627 7.6746 41 7.6875C59.368 7.6875 74.3125 22.632 74.3125 41C74.3125 48.8797 71.6039 56.3212 66.625 62.2892V56.375H61.5V71.75H76.875V66.625H69.5924C75.9457 59.6043 79.4556 50.4686 79.4375 41Z" />
                  </g>
                </svg>
              </i>
              <a href="#">Sustainability</a>
              <p>
                We maintain quality standards from seed selection to maintenance
                in cultivation.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="propel-img">
              <img src="assets/img/kolam.png" alt="propel-img" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="heading two">
              <h6>SUSTAINABILITY IS OUR FOCUS</h6>
              <h2>The Yard of the House was Transformed into a Nila Pond</h2>
            </div>
            <div class="propel-text">
              <p>
                Transforming the house yard into a nila pond utilizes available
                space efficiently, providing an additional food source for the
                family or community.
              </p>
              <div class="propel">
                <div>
                  <i
                    ><img src="assets/img/propel-icon-1.png" alt="propel-icon"
                  /></i>
                </div>
                <div>
                  <h5>New Business Opportunities</h5>
                  <p>
                    Transforming the house yard into a nila pond opens up new
                    business opportunities.
                  </p>
                </div>
              </div>
              <div class="propel">
                <div>
                  <i
                    ><img src="assets/img/propel-icon-2.png" alt="propel-icon"
                  /></i>
                </div>
                <div>
                  <h5>Trusted and Reliable</h5>
                  <p>
                    With proper management, the tilapia pond can consistently
                    produce a reliable source of protein.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="gap">
      <div class="container">
        <div class="trusted-by">
          <h5>From the Pond to Your Dining Table</h5>
          <div class="logodata owl-carousel owl-theme">
            <div class="partner item">
              <img alt="" src="assets/img/breding.png" />
              <h6>Breeding</h6>
            </div>
            <div class="partner item">
              <img alt="" src="assets/img/culvulation.png" />
              <h6>Cultivation</h6>
            </div>
            <div class="partner item">
              <img alt="" src="assets/img/harvest.png" />
              <h6>Harvest</h6>
            </div>
            <div class="partner item">
              <img alt="" src="assets/img/processing.png" />
              <h6>Processing</h6>
            </div>
            <div class="partner item">
              <img alt="" src="assets/img/rtu.png" />
              <h6>Ready To Serve</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section
      class="gap blog-section"
      style="background-image: url(assets/img/background-1.png)">
      <div class="container">
        <div class="heading">
          <img src="assets/img/heading-img.png" alt="heading-img" />
          <h2>Popular on Youtube</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="blog img-hover">
              <div class="blog-img">
                <figure>
                  <img src="assets/img/img1.png" alt="blog" />
                </figure>
              </div>
              <h5>24<span>Jan,2024</span></h5>
              <a
                href="https://youtu.be/v-Syg1Ftdgw?si=RbT9VO-nIGekus8J"
                target="_blank"
                ><h4>Panen Parsial Ikan Nila Awal 2024</h4></a
              >
              <h6>by <b>Nandang Alik</b></h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog img-hover">
              <div class="blog-img">
                <figure>
                  <img src="assets/img/img2.png" alt="blog" />
                </figure>
              </div>
              <h5>23<span>Feb,2024</span></h5>
              <a
                href="https://youtu.be/Bf-2E7UtpW0?si=FRTTJFyS0VqoX1H_"
                target="_blank"
                ><h4>Menentukan Kolam Yang Akan di Panen</h4></a
              >
              <h6>by <b>Nandang Alik</b></h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog img-hover mb-0">
              <div class="blog-img">
                <figure>
                  <img src="assets/img/img3.png" alt="blog" />
                </figure>
              </div>
              <h5>03<span>Mar,2024</span></h5>
              <a
                href="https://youtu.be/0DS32_ATs3I?si=ZSo60xxgNwKV7SGI"
                target="_blank"
                ><h4>Apakah Kolom Bioflok Boros Pakan atau Tidak?</h4></a
              >
              <h6>by <b>Nandang Alik</b></h6>
            </div>
          </div>
          <div class="button-center">
            <a
              href="https://www.youtube.com/@Tutorialmotivasiinspirasi"
              target="_blank"
              class="btn"
              >View All Videos</a
            >
          </div>
        </div>
      </div>
      <img src="assets/img/shaps.png" alt="dots-shaps" class="dots-shaps" />
    </section>
    <section class="gap">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="together">
              <h2>Through Biofloc, Increase Harvest Productivity</h2>
              <p>
                Benefits and Advantages of the Biofloc System for Tilapia
                Farming.
              </p>
              <ul class="list">
                <li>
                  <img src="assets/img/check.png" alt="check" />Formed from a
                  collection of organic materials
                </li>
                <li>
                  <img src="assets/img/check.png" alt="check" />Can stabilize
                  the pH of nila biofloc pond water
                </li>
                <li>
                  <img src="assets/img/check.png" alt="check" />Lowers ammonia
                  levels in water
                </li>
              </ul>
              <a href="#" class="btn">Get in Touch</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="together-img">
              <img src="assets/img/587.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
