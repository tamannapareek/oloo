@extends('layouts.app')
@section('title','  Home')
@section('content')

  <section class=" slider_section">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_box">
            <div class="fixed_company-detail">
              <p>
                Oloo Company
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2>
                  We Are
                </h2>
                <h1>
                  Provided security services
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box">
            <div class="fixed_company-detail">
              <p>
                Security Guard Company
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2>
                  We Are
                </h2>
                <h1>
                  Provided security services
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box">
            <div class="fixed_company-detail">
              <p>
                Security Guard Company
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2>
                  We Are
                </h2>
                <h1>
                  Provided security services
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
                          </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- end slider section -->

  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="{{asset('public/images/bright.jpg')}}" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="welcome_detail">
            <h3>
              Welcome
            </h3>
            <h2>
              Welcome To Oloo Company
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form, by
              injected humour, or randomised words which don't look even
              slightly believable. If you are going to use a passage of Lorem
              Ipsum, you need to be sure there isn't It is a long established
              f act that a reader will be distracted by the readable content
              of a page whe
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->
  <section class="service_section ">
    <div class="container">
      <div class="service_detail">
        <h3>
          We
        </h3>
        <h2>
          we provide service
        </h2>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href="">  Security</a>
        </div>
        <div class="service_img-box i-box-2">
          <a href="">Servicing</a>
        </div>
        <div class="service_img-box i-box-3">
          <a href="">Easy To drive </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href=""> Insurence</a>
        </div>
      </div>
      <div class="service_btn">
        
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- security section -->


  <!-- end security section -->


  <!-- story section -->

  <section class="layout_padding story_section">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="{{asset('public/images/rx1.jpg')}}" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              Our
            </h3>
            <h2>
              Success Stories
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
              letters, as opposed to using 'Content here, content here', making it look like readable English. Many
              desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
              search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
              over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end story section -->
<!--  -->


@endsection