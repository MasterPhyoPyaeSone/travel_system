<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LOCAL14AGENCY.COM</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/image/pngegg.png" type="image/x-icon">

    
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
    
 <x-nav_footer>

 <x-forHomePage>
    <section class="ftco-section bg-light" style="margin-top: -70px">
        <div class="container">
                <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
              <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          </div>
        </div>    		
        </div>
        <div class="container-fluid" >
            <div class="row" style="margin-left: 10%;margin-right: 10%;">
             
                 @forelse ( $packages as $package )
                    <div class="col-4">
                      <div class="destination">
                        <a href="/packages/{{ $package->id }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ $package->img_1}});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                                     
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">{{ $package->title }}</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>8 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price">${{ $package->price }}</span>
                                </div>
                            </div>
                            <p>{{ $package->intro }}</p>
                            <p class="days"><span>{{ $package->long_time }}</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> {{ $package->place }}</span> 
                                <span class="ml-auto"><a href="/packages/{{ $package->id }}">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                
              
          
            @empty
                    <h3 style="margin-left: 40%">No Search Data.....</h3>
            @endforelse
           
        </div>
    </div>
   <div class="" style="padding: 20px;width:600px;margin-left: 50%"> {{ $packages->links() }}</div>
    </section>

    <section class="ftco-section ftco-destination">
      <div class="container">
          <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Featured</span>
          <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
        </div>
      </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="destination-slider owl-carousel ftco-animate">
                      <div class="item">
                          <div class="destination">
                              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                                      <span class="icon-search2"></span>
                                  </div>
                              </a>
                              <div class="text p-3">
                                  <h3><a href="#">Paris, Italy</a></h3>
                                  <span class="listing">15 Listing</span>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="destination">
                              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                                      <span class="icon-search2"></span>
                                  </div>
                              </a>
                              <div class="text p-3">
                                  <h3><a href="#">San Francisco, USA</a></h3>
                                  <span class="listing">20 Listing</span>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="destination">
                              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                                      <span class="icon-search2"></span>
                                  </div>
                              </a>
                              <div class="text p-3">
                                  <h3><a href="#">Lodon, UK</a></h3>
                                  <span class="listing">10 Listing</span>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="destination">
                              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                                      <span class="icon-search2"></span>
                                  </div>
                              </a>
                              <div class="text p-3">
                                  <h3><a href="#">Lion, Singapore</a></h3>
                                  <span class="listing">3 Listing</span>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="destination">
                              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                                      <span class="icon-search2"></span>
                                  </div>
                              </a>
                              <div class="text p-3">
                                  <h3><a href="#">Australia</a></h3>
                                  <span class="listing">3 Listing</span>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="destination">
                              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                                      <span class="icon-search2"></span>
                                  </div>
                              </a>
                              <div class="text p-3">
                                  <h3><a href="#">Paris, Italy</a></h3>
                                  <span class="listing">3 Listing</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
<section>
    <h2 class="mb-4" style="text-align: center;color: black;font-weight: bolder">Happy 3rd Anniversary of Go Myanmar Tours</h2>
  <div class="container d-flex" style="margin-bottom: 70px">
    {{-- <div class="" style="margin-right: 50px">
        <img src="https://www.creative-webstudio.com/sites/default/files/myanmar-delight.jpg" alt="" width="500px" height="350px">
    </div> --}}
    <div class="">
        <div class="d-flex" style="align-items: center; justify-content: space-evenly">
            <div><p style="text-align: center"><span style="font-size: 25px;color: coral;font-weight: bold">3</span> <br> <span style="font-size: 20px;font-weight: bolder">YEAR EXPERIENCES</span></p></div>
            <div><p style="text-align: center"><span style="font-size: 25px;color: coral;font-weight: bold">20+</span> <br> <span style="font-size: 20px;font-weight: bolder">CUSTOMIZED TRIPS</span></p></div>
            <div><p style="text-align: center"><span style="font-size: 25px;color: coral;font-weight: bold">99%</span> <br> <span style="font-size: 20px;font-weight: bolder">EXCELLENT REVIEWS </span></p></div>
            <div><p style="text-align: center"><span style="font-size: 25px;color: coral;font-weight: bold">580+</span> <br> <span style="font-size: 20px;font-weight: bolder">HAPPY GUESTS</span></p></div>
        </div>
        <p>Join the celebration as Go Myanmar Tours joyfully marks 3years of spreading happiness through enchanting journeys across Myanmar's mesmerizing landscapes. With every passing year, we've woven a tapestry of joy, shaped by the smiles of our cherished travelers. Our hearts overflow with gratitude for the valued partnerships and the joyful wanderers who have been the driving force behind Go Myanmar Tours' success. </p>
    </div>
  </div>
</section>



<section class="ftco-section bg-light" style="margin-top: -50px;">
    <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
          <span class="subheading">Special Offers</span>
        <h2 class="mb-4"><strong>Top</strong> Tour Packages's Hotels</h2>
      </div>
    </div>    		
    </div>
    <div class="container-fluid" >
        <div class="row" style="margin-left: 10%;margin-right: 10%;">
         
             @forelse ( $hotels as $hotel )
                <div class="col-4">
                  <div class="destination">
                    <a href="/Allhotel/{{ $hotel->id }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ $hotel->img_1}});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                                 
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">{{ $hotel->name }}</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">${{ $hotel->price }}</span>
                            </div>
                        </div>
                      <p>{{ $hotel->intro }}</p>
                         
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> {{ $hotel->place }}</span> 
                            <span class="ml-auto"><a href="/Allhotel/{{ $hotel->id }}">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            
          
      
        @empty
                <h3 style="margin-left: 40%">No Search Data.....</h3>
        @endforelse
       
    </div>
</div>
{{-- <div class="" style="padding: 20px;"> {{ $packages->links() }}</div> --}}
<div class="" style="padding: 20px;width:600px;margin-left: 50%"> {{ $hotels->links() }}</div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-start">
        <div class="col-md-5 heading-section ftco-animate">
            {{-- <span class="subheading">Best Directory Website</span> --}}
          <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
          {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p> --}}
          <p>One of the main reasons to choose your travel agency is the personalized service and expertise we provide. Our agents have years of experience and knowledge about destinations, transportation options, and vendors. They can quickly create a short list of reputable, quality options that are appropriate to your trip destination objectives.</p>
          <p>We also handle changes and other issues that may pop up before or during your trip. Our agents are immersed in travel full-time, so they're aware of details you might not think of when planning on your own. </p>
          <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
        </div>
                  <div class="col-md-1"></div>
        <div class="col-md-6 heading-section ftco-animate">
            <span class="subheading">Testimony</span>
          <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
            <div class="row ftco-animate">
                <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel">
                    <div class="item">
                      <div class="testimony-wrap d-flex">
                        <div class="user-img mb-5" style="background-image: url(image/kkm.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text ml-md-4">
                          <p class="mb-5">Start by researching your destination: Understand the history, culture, and attractions of your destination. This will help you decide which activities and attractions are most important to you.</p>
                          <p class="name">Min Min</p>
                          <span class="position">Guest from Bago</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap d-flex">
                        <div class="user-img mb-5" style="background-image: url(image/ssl.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text ml-md-4">
                          <p class="mb-5">Plan your activities: Based on your research, decide which activities and attractions you want to experience during your trip. This could include visiting museums, taking tours, or participating in local events.</p>
                          <p class="name">Shine Htet</p>
                          <span class="position">Guest from Mandalay</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap d-flex">
                        <div class="user-img mb-5" style="background-image: url(image/ppss.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text ml-md-4">
                          <p class="mb-5">Choose your accommodations: Research different accommodation options, such as hotels, hostels, or Airbnb. Consider factors like location, price, and amenities.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">Guest from Philippines</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>

<section class="ftco-section ftco-destination">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
          <span class="subheading">Featured</span>
        <h2 class="mb-4"><strong>EXPRESS</strong> Destination</h2>
      </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="destination-slider owl-carousel ftco-animate">
                    <div class="item">
                        <div class="destination">
                            <a href="/bus" class="img d-flex justify-content-center align-items-center" style="background-image: url('https://easycdn.blob.core.windows.net/operators/operator_00427_190524094826529.png');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Mandalarmin, Mandalay</a></h3>
                                <span class="listing">15 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="/bus" class="img d-flex justify-content-center align-items-center" style="background-image: url('https://goexploremyanmar.com/wp-content/uploads/2019/09/bus-schedule-vector-260nw-312714026.jpg-870x500.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Famous, Chaung Thar</a></h3>
                                <span class="listing">20 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="/bus" class="img d-flex justify-content-center align-items-center" style="background-image: url('https://www.myanmaryp.com/img/mm/z/1675779644-64-shwe-man-thu.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Shwe Man Thu, Bagan</a></h3>
                                <span class="listing">10 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="/bus" class="img d-flex justify-content-center align-items-center" style="background-image: url('https://easycdn.blob.core.windows.net/profile-img/cid1211_jjexpress_01.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">JJ, gjgjglr-rug</a></h3>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="/bus" class="img d-flex justify-content-center align-items-center" style="background-image: url('https://easycdn.blob.core.windows.net/profile-img/boss-express01.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Australia</a></h3>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="/bus" class="img d-flex justify-content-center align-items-center" style="background-image: url('https://riderexpress.ticpoi.com/_next/image?url=https%3A%2F%2Ffirebasestorage.googleapis.com%2Fv0%2Fb%2Fticpoi-riderexpress.appspot.com%2Fo%2FRIDER_EXPRESS%252FCMS_CONTENT%252FMEDIA%252Fgeneral-contents-KFQ2YX%252Fabout-us-KH32DF%252FcontentImage-1666578020099-rider-express-bus-waiting.jpg%3Falt%3Dmedia%26token%3Dc69ffca0-9bf3-4f1e-b7ef-b0992127a4f4&w=640&q=75');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Paris, Italy</a></h3>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" style="margin-top: -50px;">
    <div class="container">
        <div class="con d-flex" >
            <div class="con_1">
                <div class="" >
                    <h2 class="mb-4"><strong>Highlights</strong> </h2>
                    <div class="d-flex" style="margin-bottom: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: coral;margin-top: 3px"  viewBox="0 0 512 512"><path fill="currentColor"  d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248s248-111 248-248m-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200s-89.5 200-200 200S56 366.5 56 256m72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12"/></svg>
                    <span style="font-weight: 400; margin-left: 20px">The glorious Shwedagon pagoda, heart of Yangon.&nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: coral;margin-top: 3px"  viewBox="0 0 512 512"><path fill="currentColor"  d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248s248-111 248-248m-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200s-89.5 200-200 200S56 366.5 56 256m72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Bagan Kingdom and its amazing ancient and architectural sites and breathtaking sunset.&nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: coral;margin-top: 3px"  viewBox="0 0 512 512"><path fill="currentColor"  d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248s248-111 248-248m-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200s-89.5 200-200 200S56 366.5 56 256m72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">The royal capital Mandalay with the panoramic view of Mandalay View.&nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: coral;margin-top: 3px"  viewBox="0 0 512 512"><path fill="currentColor"  d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248s248-111 248-248m-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200s-89.5 200-200 200S56 366.5 56 256m72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Enjoy the scenic view of countryside.&nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: coral;margin-top: 3px"  viewBox="0 0 512 512"><path fill="currentColor"  d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248s248-111 248-248m-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200s-89.5 200-200 200S56 366.5 56 256m72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Discover the ancient cities around Myanmar&nbsp;</span>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="con_2" style="margin-left: 50px">
                <div class="card" style="padding: 20px;background-color: black;color: aliceblue">
                  {{-- <h4 style="text-align: center" style="color: aqua" >WHY CHOOSE PRO NITI </h4> --}}
                    <p style="font-size: 20px;color: #ff3a31;text-align: center;">WHY CHOOSE OUR LOCAL14</p>
                    <div class="card-body">
                        
                        <div class="d-flex" style="margin-bottom: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #ff3a31" viewBox="0 0 40 40"><path fill="currentColor" d="M24.73 28.146a.498.498 0 0 0 .36-.153l7.359-7.631a.498.498 0 0 0 0-.693l-7.391-7.662a.5.5 0 1 0-.72.693l7.056 7.315l-7.024 7.284a.5.5 0 0 0 .36.847"/><path fill="currentColor" d="M7.91 20.515h24.18a.5.5 0 0 0 0-1H7.91a.5.5 0 0 0 0 1"/></svg>
                            <span style="font-weight: 400; margin-left: 20px">Discover the ancient cities around Myanmar&nbsp;</span>
                        </div>
                        <div class="d-flex" style="margin-bottom: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #ff3a31" viewBox="0 0 40 40"><path fill="currentColor" d="M24.73 28.146a.498.498 0 0 0 .36-.153l7.359-7.631a.498.498 0 0 0 0-.693l-7.391-7.662a.5.5 0 1 0-.72.693l7.056 7.315l-7.024 7.284a.5.5 0 0 0 .36.847"/><path fill="currentColor" d="M7.91 20.515h24.18a.5.5 0 0 0 0-1H7.91a.5.5 0 0 0 0 1"/></svg>
                            <span style="font-weight: 400; margin-left: 20px">We create treasured travel memories&nbsp;</span>
                        </div>
                        <div class="d-flex" style="margin-bottom: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #ff3a31" viewBox="0 0 40 40"><path fill="currentColor" d="M24.73 28.146a.498.498 0 0 0 .36-.153l7.359-7.631a.498.498 0 0 0 0-.693l-7.391-7.662a.5.5 0 1 0-.72.693l7.056 7.315l-7.024 7.284a.5.5 0 0 0 .36.847"/><path fill="currentColor" d="M7.91 20.515h24.18a.5.5 0 0 0 0-1H7.91a.5.5 0 0 0 0 1"/></svg>
                            <span style="font-weight: 400; margin-left: 20px">Positive impact on communities we visit&nbsp;</span>
                        </div>
                        <div class="d-flex" style="margin-bottom: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #ff3a31" viewBox="0 0 40 40"><path fill="currentColor" d="M24.73 28.146a.498.498 0 0 0 .36-.153l7.359-7.631a.498.498 0 0 0 0-.693l-7.391-7.662a.5.5 0 1 0-.72.693l7.056 7.315l-7.024 7.284a.5.5 0 0 0 .36.847"/><path fill="currentColor" d="M7.91 20.515h24.18a.5.5 0 0 0 0-1H7.91a.5.5 0 0 0 0 1"/></svg>
                            <span style="font-weight: 400; margin-left: 20px">We offer immersion in local culture&nbsp;</span>
                        </div>
                        <div class="d-flex" style="margin-bottom: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #ff3a31" viewBox="0 0 40 40"><path fill="currentColor" d="M24.73 28.146a.498.498 0 0 0 .36-.153l7.359-7.631a.498.498 0 0 0 0-.693l-7.391-7.662a.5.5 0 1 0-.72.693l7.056 7.315l-7.024 7.284a.5.5 0 0 0 .36.847"/><path fill="currentColor" d="M7.91 20.515h24.18a.5.5 0 0 0 0-1H7.91a.5.5 0 0 0 0 1"/></svg>
                            <span style="font-weight: 400; margin-left: 20px">An innovative travel operator&nbsp;</span>
                        </div>
                        <div class="d-flex" style="margin-bottom: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #ff3a31" viewBox="0 0 40 40"><path fill="currentColor" d="M24.73 28.146a.498.498 0 0 0 .36-.153l7.359-7.631a.498.498 0 0 0 0-.693l-7.391-7.662a.5.5 0 1 0-.72.693l7.056 7.315l-7.024 7.284a.5.5 0 0 0 .36.847"/><path fill="currentColor" d="M7.91 20.515h24.18a.5.5 0 0 0 0-1H7.91a.5.5 0 0 0 0 1"/></svg>
                            <span style="font-weight: 400; margin-left: 20px">We have a passion for travel&nbsp;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        <hr>
        {{--  --}}
        <div class="" style="margin-top: 50px;margin-bottom: 50px">
            <h2 class="mb-4"><strong>Inclusion And Exclusion</strong> </h2>
            <div class="con d-flex" >
            <div class="con_1" style="margin-right: 70px">
                    <h5 style="color: #ff3a31;font-weight: bold">SERVICES INCLUDED</h5>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">8 nights hotel accommodation in above mentioned hotels with daily breakfast&nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">(2) ways domestic flight to (Yangon-Mandalay / Heho-Yangon)&nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">Air conditioning car with driver for sightseeing &nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">All airport – hotels/ hotel – airport transfer in-out &nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">English speaking station guide services &nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">Entrance fees and zone fees&nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">Water and refreshment towel on tour&nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">Toll fee and fuel charges for car&nbsp;</span>
            </div>
            <div class="d-flex" style="margin-bottom: 15px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(23, 242, 23)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m0 48c110.532 0 200 89.451 200 200c0 110.532-89.451 200-200 200c-110.532 0-200-89.451-200-200c0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971"/></svg>
                <span style="font-weight: 400; margin-left: 20px">Government tax and service charges&nbsp;</span>
            </div>
                </div>
                {{--  --}}
                <div class="con_2">
                    <h5 style="color: #ff3a31;font-weight: bold">SERVICES EXCLUDED</h5>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(243, 20, 65)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8m0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200s-89.5 200-200 200m101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2l-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2l62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Tourist visa &nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(243, 20, 65)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8m0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200s-89.5 200-200 200m101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2l-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2l62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Personal expenses &nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(243, 20, 65)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8m0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200s-89.5 200-200 200m101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2l-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2l62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Food and beverages (Except breakfast where mentioned) &nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(243, 20, 65)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8m0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200s-89.5 200-200 200m101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2l-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2l62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Travel insurance  &nbsp;</span>
                    </div>
                    <div class="d-flex" style="margin-bottom: 15px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: rgb(243, 20, 65)" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8m0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200s-89.5 200-200 200m101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2l-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2l62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17"/></svg>
                        <span style="font-weight: 400; margin-left: 20px">Items not mentioned in “services included” &nbsp;</span>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="con d-flex" style="margin-top: 30px;background-color: rgb(253, 241, 230);padding: 20px">
            <div class="con_1" style="margin-right: 30px">
                {{-- <img src="https://m.media-amazon.com/images/S/pv-target-images/7ff82d4c0b2abb0b85ced2522e4695e04d67c0b2b91bb0e51aaf2f5956dd3e8e.jpg" alt="" > --}}
                <img src="/image/khinn.jpg" alt="" width="200px" height="200px">
            </div>
            {{--  --}}
            <div class="con_2">
                <p style="font-size: 15px;font-weight: bold">Hello. If you'd like to chat about this holiday or need help finding one we're very happy to help. <br> KhinAyeNyein @ Veronika & team.</p>
                <p style="color: #ff3a31;font-size: 20px;font-weight: bold">+95 9339 506 210 <br> local14@gmail.com</p>
                <p style="color: #ff3a31;font-size: 20px;text-align: center">Get A FREE Quote for your next Adventure</p>
                 <button style="background-color: #ff3a31;color: aliceblue;padding: 10px;border: none;margin-left: 40%;border-radius: 20px"><a href="/contact" style="color: aliceblue" >REQUEST A QUOTE</a></button>
            </div>
            <hr >
        </div>

    </div>

</section>


 </x-forHomePage>
  
 </x-nav_footer>  

   
</body>


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