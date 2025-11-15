<!DOCTYPE html>
<html lang="en">

<head>
  <title>LOCAL14AGENCY</title>
  <link rel="shortcut icon" href="/image/pngegg.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">


  {{-- boostarp --}}
  {{--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
 
</head>
 <style>
    /* body {
      font-family: 'Open Sans', arial, sans-serif;
      color: #333;
      font-size: 14px;
    } */

    .projcard-container {
      margin: 50px 0;
    }

    /* Actual Code: */
    .projcard-container,
    .projcard-container * {
      box-sizing: border-box;
    }

    .projcard-container {
      margin-left: auto;
      margin-right: auto;
      width: 1000px;
    }

    .projcard {
      position: relative;
      width: 100%;
      height: 300px;
      margin-bottom: 40px;
      border-radius: 10px;
      background-color: #fff;
      border: 2px solid #ddd;
      font-size: 18px;
      overflow: hidden;
      cursor: pointer;
      box-shadow: 0 4px 21px -12px rgba(0, 0, 0, .66);
      transition: box-shadow 0.2s ease, transform 0.2s ease;
    }

    .projcard:hover {
      box-shadow: 0 34px 32px -33px rgba(0, 0, 0, .18);
      transform: translate(0px, -3px);
    }

    .projcard::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-image: linear-gradient(-70deg, #424242, transparent 50%);
      opacity: 0.07;
    }

    .projcard:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #424242, transparent 50%);
    }

    .projcard-innerbox {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }

    .projcard-img {
      position: absolute;
      height: 300px;
      width: 400px;
      top: 0;
      left: 0;
      transition: transform 0.2s ease;
    }

    .projcard:nth-child(2n) .projcard-img {
      left: initial;
      right: 0;
    }

    .projcard:hover .projcard-img {
      transform: scale(1.05) rotate(1deg);
    }

    .projcard:hover .projcard-bar {
      width: 70px;
    }

    .projcard-textbox {
      position: absolute;
      top: 7%;
      bottom: 7%;
      left: 430px;
      width: calc(100% - 470px);
      font-size: 17px;
    }

    .projcard:nth-child(2n) .projcard-textbox {
      left: initial;
      right: 430px;
    }

    .projcard-textbox::before,
    .projcard-textbox::after {
      content: "";
      position: absolute;
      display: block;
      background: #ff0000bb;
      background: #fff;
      top: -20%;
      left: -55px;
      height: 140%;
      width: 60px;
      transform: rotate(8deg);
    }

    .projcard:nth-child(2n) .projcard-textbox::before {
      display: none;
    }

    .projcard-textbox::after {
      display: none;
      left: initial;
      right: -55px;
    }

    .projcard:nth-child(2n) .projcard-textbox::after {
      display: block;
    }

    .projcard-textbox * {
      position: relative;
    }

    .projcard-title {
      font-family: 'Voces', 'Open Sans', arial, sans-serif;
      font-size: 24px;
    }

    .projcard-subtitle {
      font-family: 'Voces', 'Open Sans', arial, sans-serif;
      color: #888;
    }

    .projcard-bar {
      left: -2px;
      width: 50px;
      height: 5px;
      margin: 10px 0;
      border-radius: 5px;
      background-color: #424242;
      transition: width 0.2s ease;
    }

    .projcard-blue .projcard-bar {
      background-color: #0088FF;
    }

    .projcard-blue::before {
      background-image: linear-gradient(-70deg, #0088FF, transparent 50%);
    }

    .projcard-blue:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #0088FF, transparent 50%);
    }

    .projcard-red .projcard-bar {
      background-color: #D62F1F;
    }

    .projcard-red::before {
      background-image: linear-gradient(-70deg, #D62F1F, transparent 50%);
    }

    .projcard-red:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #D62F1F, transparent 50%);
    }

    .projcard-green .projcard-bar {
      background-color: #40BD00;
    }

    .projcard-green::before {
      background-image: linear-gradient(-70deg, #40BD00, transparent 50%);
    }

    .projcard-green:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #40BD00, transparent 50%);
    }

    .projcard-yellow .projcard-bar {
      background-color: #F5AF41;
    }

    .projcard-yellow::before {
      background-image: linear-gradient(-70deg, #F5AF41, transparent 50%);
    }

    .projcard-yellow:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #F5AF41, transparent 50%);
    }

    .projcard-orange .projcard-bar {
      background-color: #FF5722;
    }

    .projcard-orange::before {
      background-image: linear-gradient(-70deg, #FF5722, transparent 50%);
    }

    .projcard-orange:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #FF5722, transparent 50%);
    }

    .projcard-brown .projcard-bar {
      background-color: #C49863;
    }

    .projcard-brown::before {
      background-image: linear-gradient(-70deg, #C49863, transparent 50%);
    }

    .projcard-brown:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #C49863, transparent 50%);
    }

    .projcard-grey .projcard-bar {
      background-color: #424242;
    }

    .projcard-grey::before {
      background-image: linear-gradient(-70deg, #424242, transparent 50%);
    }

    .projcard-grey:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, #424242, transparent 50%);
    }

    .projcard-customcolor .projcard-bar {
      background-color: var(--projcard-color);
    }

    .projcard-customcolor::before {
      background-image: linear-gradient(-70deg, var(--projcard-color), transparent 50%);
    }

    .projcard-customcolor:nth-child(2n)::before {
      background-image: linear-gradient(-250deg, var(--projcard-color), transparent 50%);
    }

    .projcard-description {
      z-index: 10;
      font-size: 15px;
      color: #424242;
      height: 125px;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .projcard-tagbox {
      position: absolute;
      bottom: 3%;
      font-size: 14px;
      cursor: default;
      user-select: none;
      pointer-events: none;
    }

    .projcard-tag {
      display: inline-block;
      background: #E0E0E0;
      color: #777;
      border-radius: 3px 0 0 3px;
      line-height: 26px;
      padding: 0 10px 0 23px;
      position: relative;
      margin-right: 20px;
      cursor: default;
      user-select: none;
      transition: color 0.2s;
    }

    .projcard-tag::before {
      content: '';
      position: absolute;
      background: #fff;
      border-radius: 10px;
      box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
      height: 6px;
      left: 10px;
      width: 6px;
      top: 10px;
    }

    .projcard-tag::after {
      content: '';
      position: absolute;
      border-bottom: 13px solid transparent;
      border-left: 10px solid #E0E0E0;
      border-top: 13px solid transparent;
      right: -10px;
      top: 0;
    }
  </style>
<body>
  <x-nav_footer>
    <div class="hero-wrap js-fullheight"
      style="background-image: url('https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-myanmar.jpg');  ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
          data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a
                  href="/">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      Successfully
    </div>
    @endif


    <h1 style="text-align: center;color:#FF5722;margin: 20px">You Can Post Blog with Your Memories</h1>
    <hr style="background: #FF5722;width: 30%;height: 4px;">


    {{-- --}}

    <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="projcard-container">

              <div class="projcard projcard-blue">
                <div class="projcard-innerbox">
                  <img class="projcard-img"
                    src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/34211734.jpg?k=f261539fb036bf3e2a12dea752d1d75c25ddc0f9f8fe339c67015468da073165&o=&hp=1" />
                  <div class="projcard-textbox">
                    <div class="projcard-title">Chaung Thar Blog</div>
                    <div class="projcard-subtitle">This explains the card in more detail</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    {{-- <div class="projcard-tagbox">
                      <span class="projcard-tag">Blogs</span>
                      <span class="projcard-tag">Blogs</span>
                    </div> --}}
                  </div>
                </div>
              </div>

              <div class="projcard projcard-red">
                <div class="projcard-innerbox">
                  <img class="projcard-img"
                    src="https://bnfexpress.com/uploads/destination/f41b3c14c9bbf291bcda43d90145fefa.jpg" />
                  <div class="projcard-textbox">
                    <div class="projcard-title">Chaung Thar Blog</div>
                    <div class="projcard-subtitle">I don't really think that I need to explain anything here</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labnostrud exercitationirure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat n sunt in culpa qui officia deserunt mollit anim id est
                      laborum.</div>
                    <div class="projcard-tagbox">
                      <span class="projcard-tag">By</span>
                      <span class="projcard-tag">BO BO</span>
                      {{-- <span class="projcard-tag">Blogs</span> --}}
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
          @foreach ($blogs as $blog)
          <div class="carousel-item">
            <div class="projcard-container">

              <div class="projcard projcard-blue">
                <div class="projcard-innerbox">
                  <img class="projcard-img" src="{{$blog->img_1}}" />
                  <div class="projcard-textbox">
                    <div class="projcard-title">{{$blog->title}}</div>
                    <div class="projcard-subtitle">This explains the card in more detail</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">
                      {{$blog->body_1}}
                    </div>

                  </div>
                </div>
              </div>

              <div class="projcard projcard-red">
                <div class="projcard-innerbox">
                  <img class="projcard-img" src="{{$blog->img_2}}" />
                  <div class="projcard-textbox">
                    <div class="projcard-title">{{$blog->title}}</div>
                    <div class="projcard-subtitle">I don't really think that I need to explain anything here</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">
                      {{$blog->body_2}}</div>
                    <div class="projcard-tagbox">
                      <span class="projcard-tag">By</span>
                      <span class="projcard-tag" style="color: #D62F1F">{{$blog->user->name}}</span>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
          @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"
            style="background-color: rgb(159, 152, 130)"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"
            style="background-color: rgb(187, 181, 162);padding: 10px"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <hr>



    <div class="container"
      style="margin-top: 50px;margin-bottom: 50px;background-color: rgb(232, 231, 229);border-radius: 20px;padding: 50px;width: 800px">
      <h2
        style="text-align: center;color: coral;font-weight: bolder;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        You Can write Own Memories in Trips</h2>
      <hr style="background: #FF5722;width: 50%;height: 4px;">
      <form action="/blogs/postBlog" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label for="inputAddress">Title</label>
          <input type="text" class="form-control" id="inputAddress" name="title" placeholder="Enter Your Memories ">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Photo_1</label>
            <input type="file" class="form-control" id="inputEmail4" placeholder="Photo_1" name="image_1">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Photo_2</label>
            <input type="file" class="form-control" id="inputPassword4" placeholder="Photo_2" name="image_2">
          </div>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Memories_1</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="memories_1"></textarea>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Memories_2</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="memories_2"></textarea>
        </div>


        <button type="submit" class="btn btn-primary" style="margin-left: 90%">Post</button>
      </form>
    </div>



    {{-- </x-forBusPage> --}}
    </div>
    </div>
  </x-nav_footer>

</body>
<script>
  document.querySelectorAll(".projcard-description").forEach(function(box) {
$clamp(box, {clamp: 6});
});
</script>
{{-- boot --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
--}}
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</html>