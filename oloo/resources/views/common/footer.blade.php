
 <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 info_detail">
          <div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
        <div class=" col-md-4 address_container">
          <div>
            <h3>
              Address:
            </h3>
            <div class="address_link-container">
              <!--<a href="">-->
              <!--  <img src="{{asset('public/images/location.png')}}" alt="">-->
              <!--  <span> Address: 73 Canal Street, New York, NY-->
              <!--  </span>-->
              <!--</a>-->
              <!--<a href="">-->
              <!--  <img src="{{asset('public/images/phone.png')}}" alt="">-->
              <!--  <span> Tel: +1 123 456 789-->
              <!--  </span>-->
              <!--</a>-->
              <a href="">
                <img src="{{asset('public/images/mail.png')}}" alt="">
                <span>
                  Email: info@olooglobal.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-md-4 news_container">
          <div>
            
            <div class="social_container">
              <div>
                <img src="{{asset('public/images/fb.png')}}" alt="">
              </div>
              <div>
                <img src="{{asset('public/images/twitter.png')}}" alt="">
              </div>
              <div>
                <img src="{{asset('public/images/linkedin.png')}}" alt="">
              </div>
              <div>
                <img src="{{asset('public/images/youtube.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2022 All Rights Reserved By
      <a href="https://html.design/">Oloo</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{asset('public/js/jquery-3.4.1.min.js'); }}"></script>
  <script type="text/javascript" src="{{asset('public/js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js')}}">
  </script>

 
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>

  <script>
    $(".nav_search-btn").click(function () {
      if ($(".nav_search-input").hasClass("d-none")) {
        event.preventDefault();
        $(".nav_search-input")
          .animate({
              left: "-1000px"
            },
            "1000000"
          )
          .removeClass("d-none");
      } else {
        $(".nav_search-input")
          .animate({
              left: "0px"
            },
            "1000000"
          )
          .addClass("d-none");
      }
    });
  </script>

  

  <script type="text/javascript">
    $(document).ready(function () {
    var panelOne = $(".form-panel.two").height(),
      panelTwo = $(".form-panel.two")[0].scrollHeight;

      $(".form-panel.two")
        .not(".form-panel.two.active")
        .on("click", function (e) {
          e.preventDefault();

          $(".form-toggle").addClass("visible");
          $(".form-panel.one").addClass("hidden");
          $(".form-panel.two").addClass("active");
          $(".form").animate(
            {
              height: panelTwo
            },
            200
          );
        });

      $(".form-toggle").on("click", function (e) {
        e.preventDefault();
        $(this).removeClass("visible");
        $(".form-panel.one").removeClass("hidden");
        $(".form-panel.two").removeClass("active");
        $(".form").animate(
          {
            height: panelOne
          },
          200
        );
      });
    });
  </script>
  <!-- end google map js -->

