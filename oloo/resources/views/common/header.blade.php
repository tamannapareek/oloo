
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />


  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('public/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('public/css/responsive.css')}}" rel="stylesheet" />


  <style type="text/css">
    .overlay, .form-panel.one:before {
      position: absolute;
      top: 0;
      left: 0;
      display: none;
      background: rgba(0, 0, 0, 0.8);
      width: 100%;
      height: 100%;
    }

    .form {
      z-index: 15;
      position: relative;
      background: #ffffff;
      width: 600px;
      border-radius: 4px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
      margin: 50px auto 50px;
      overflow: hidden;
    }
    .form-toggle {
      z-index: 10;
      position: absolute;
      top: 60px;
      right: 60px;
      background: #ffffff;
      width: 60px;
      height: 60px;
      border-radius: 100%;
      transform-origin: center;
      transform: translate(0, -25%) scale(0);
      opacity: 0;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .form-toggle:before, .form-toggle:after {
      content: "";
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      width: 30px;
      height: 4px;
      background: #00247d;
      transform: translate(-50%, -50%);
    }
    .form-toggle:before {
      transform: translate(-50%, -50%) rotate(45deg);
    }
    .form-toggle:after {
      transform: translate(-50%, -50%) rotate(-45deg);
    }
    .form-toggle.visible {
      transform: translate(0, -25%) scale(1);
      opacity: 1;
    }
    .form-group {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 0 0 20px;
    }
    .form-group:last-child {
      margin: 0;
    }
    .form-group label {
      display: block;
      margin: 0 0 10px;
      color: rgba(0, 0, 0, 0.6);
      font-size: 12px;
      font-weight: 500;
      line-height: 1;
      text-transform: uppercase;
      letter-spacing: 0.2em;
    }
    .two .form-group label {
      color: #ffffff;
    }
    .form-group input,select {
      outline: none;
      display: block;
      background: rgba(0, 0, 0, 0.1);
      width: 100%;
      border: 0;
      border-radius: 50px;
      box-sizing: border-box;
      padding: 12px 20px;
      color: rgba(0, 0, 0, 0.6);
      font-family: inherit;
      font-size: inherit;
      font-weight: 500;
      line-height: inherit;
      transition: 0.3s ease;
    }
    .form-group input:focus {
      color: rgba(0, 0, 0, 0.8);
    }
    .two .form-group input {
      color: #ffffff;
    }
    .two .form-group input:focus {
      color: #ffffff;
    }
    .form-group button {
      outline: none;
      background: #00247d;
      width: 100%;
      border: 0;
      border-radius: 50px;
      padding: 12px 20px;
      color: #ffffff;
      font-family: inherit;
      font-size: inherit;
      font-weight: 500;
      line-height: inherit;
      text-transform: uppercase;
      cursor: pointer;
    }
    .two .form-group button {
      background: #ffffff;
      color: #00247d;
    }
    .form-group .form-remember {
      font-size: 12px;
      font-weight: 400;
      letter-spacing: 0;
      text-transform: none;
    }
    .form-group .form-remember input[type=checkbox] {
      display: inline-block;
      width: auto;
      margin: 0 10px 0 0;
    }
    .form-group .form-recovery {
      color: #00247d;
      font-size: 12px;
      text-decoration: none;
    }
    .form-panel {
      padding: 60px calc(5% + 60px) 60px 60px;
      box-sizing: border-box;
    }
    .form-panel.one:before {
      content: "";
      display: block;
      opacity: 0;
      visibility: hidden;
      transition: 0.3s ease;
    }
    .form-panel.one.hidden:before {
      display: block;
      opacity: 1;
      visibility: visible;
    }
    .form-panel.two {
      z-index: 5;
      position: absolute;
      top: 0;
      left: 95%;
      background: #00247d;
      width: 100%;
      min-height: 100%;
      padding: 60px calc(10% + 60px) 60px 60px;
      transition: 0.3s ease;
      cursor: pointer;
    }
    .form-panel.two:before, .form-panel.two:after {
      content: "";
      display: block;
      position: absolute;
      top: 60px;
      left: 1.5%;
      background: rgba(255, 255, 255, 0.2);
      height: 30px;
      width: 2px;
      transition: 0.3s ease;
    }
    .form-panel.two:after {
      left: 3%;
    }
    .form-panel.two:hover {
      left: 93%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .form-panel.two:hover:before, .form-panel.two:hover:after {
      opacity: 0;
    }
    .form-panel.two.active {
      left: 10%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      cursor: default;
    }
    .form-panel.two.active:before, .form-panel.two.active:after {
      opacity: 0;
    }
    .form-header {
      margin: 0 0 40px;
    }
    .form-header h1 {
      padding: 4px 0;
      color: #00247d;
      font-size: 24px;
      font-weight: 700;
      text-transform: uppercase;
    }
    .two .form-header h1 {
      position: relative;
      z-index: 40;
      color: #ffffff;
    }
  </style>
</head>

<body>
    <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <div class="logo_box">
            <img src="{{asset('public/images/logo.png')}}" alt="" />
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('complain')}}">Complaint</a>
            </li>
            @auth
             <li class="nav-item">
              <a class="nav-link" href="{{route('user.ticketlist')}}">Ticket list</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('user.logout')}}">Logout </a>
            </li>
           
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('user.login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Register </a>
            </li>
            @endauth
          </ul>
        
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->


