<footer style="background-image: url('{{ asset("assets/img/footer.jpg") }}')">
  <div class="container">
    <div class="row align-items-center pb">
      <div class="col-lg-6">
        <div class="subscribe-text">
          <img src="{{ asset('assets/img/subscribe-icon.png') }}" alt="subscribe-icon" />
          <div>
            <h2>Sign up to our newsletter</h2>
            <p>get recent content and updates.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <form class="subscribe">
          <input
            type="text"
            name="Enter Your Email"
            placeholder="Enter Your Email Address..." />
          <button class="btn">Subscribe</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="information">
          <span>Drop us an email</span>
          <a href="mailto:username@domain.com">nilapond@gmail.com</a>
          <div class="d-flex">
            <i class="fa-solid fa-location-dot"></i>
            <h6>
              Jl. Pinus 3 Pagelaran, Kec. Ciomas, Kab. Bogor, Jawa Barat
            </h6>
          </div>
          <ul class="social-icon">
            <li>
              <a href="https://facebook.com" target="_blank"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.youtube.com/@Tutorialmotivasiinspirasi"
                target="_blank"
                ><i class="fa-brands fa-youtube"></i
              ></a>
            </li>
            <li>
              <a href="https://instagram.com" target="_blank"
                ><i class="fa-brands fa-instagram"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-links">
          <h3>useful links</h3>
          <div class="boder"></div>
          <ul>
            <li>
              <i class="fa-solid fa-angle-right"></i
              ><a href="{{route('index')}}">Home</a>
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i
              ><a href="{{route('about')}}">About</a>
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i
              ><a href="{{route('product')}}">Product</a>
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i
              ><a href="{{route('contact')}}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyrights">
      <div class="d-flex align-items-center">
        <a href="index.html"
          ><img src="{{ asset('assets/img/logo.png') }}" alt="logo"
        /></a>
      </div>
      <p>Copyright © <a href="#">Nilapond</a> 2024. All Rights Reserved.</p>
    </div>
  </div>
  <img
    src="{{ asset('assets/img/dots-shaps.png') }}"
    alt="dots-shaps"
    class="dots-shaps" />
  <img src="{{ asset('assets/img/shaps-1.png') }}" alt="dots-shaps" class="shaps-1" />
</footer>
<!-- progress -->
<div id="progress">
  <span id="progress-value"><i class="fa-solid fa-up-long"></i></span>
</div>