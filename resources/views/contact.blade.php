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
  </head>
  <body>
  <x-navbar/>
    <!-- END nav -->

   
    
    <div class="hero-wrap js-fullheight" style="background-image: url('https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-myanmar.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" ><span class="mr-2"><a href="index.html" style="color: rgb(248, 245, 245)">Home</a></span> <span style="color: rgb(249, 247, 247)">Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="color: rgb(253, 249, 249)">Contact Us</h1>
            @if (session()->has('success'))
            <div class="" style="background-color: rgb(44, 244, 211);padding: 10px;border-radius: 20px">
      
              <h5 style="text-align: center;">Successfully send message <br> We will reply message with send email or contact Phone</h5>
         
            </div> 
            @endif
          </div>
        </div>
      </div>
    </div>
   
		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span style="color: orangered;margin-right: 7px">Address:</span> No. (64/66), Hmawbi Main Road, Hmawbi Township, Yangon, Myanmar.</p>
          </div>
          <div class="col-md-3">
            <p><span style="color: orangered;margin-right: 7px">Phone:</span> <a href="tel://1234567920">	+95 9339 506 210</a></p>
          </div>
          <div class="col-md-3">
            <p><span style="color: orangered;margin-right: 7px">Email:</span> <a href="mailto:info@yoursite.com">	local14@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span style="color: orangered;margin-right: 7px">Website:</span> <a href="#">local14myanmar.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="askingcontanct" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{auth()->user()->name}}">
              </div>
              <div class="form-group">
                <input type="eamil" name="email" class="form-control" placeholder="Your Email"value="{{auth()->user()->email}}" >
              </div>
              <div class="form-group">
                <input type="number" name="ph_no" class="form-control" placeholder="Ph:No">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" style="margin-left: 60%" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
          

         <div class="col-md-6" >
          <img src="https://img.freepik.com/premium-photo/happy-asian-couple-tourist-opening-map-travel-summer-holiday-isolated-blue-background_74952-1173.jpg?w=1060" alt="" width="700px">  
        </div> 
        </div>
      </div>
    </section>

    <div style="margin-top:0px;" class="row no-margin">

      {{-- <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
      {{-- <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30567.185462356658!2d95.63431236887479!3d16.73193132903313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c033e5f210fb6f%3A0x567d24362f99d974!2sMaubin!5e0!3m2!1sen!2smm!4v1708766197858!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
  <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488801.42907651607!2d95.55762859580547!3d16.838200493753103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1709723589146!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  
  </div>

<x-footer/>

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
    
  </body>
</html>