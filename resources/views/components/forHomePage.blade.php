
<div class="hero-wrap" style="background-image: url('https://www.fodors.com/wp-content/uploads/2019/02/thai-beaches-hero-.jpg'); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;           /* full viewport height */
  width: 100%;             /* full width */
  display: flex;           /* optional: for centering content */
  align-items: center;
  justify-content: center;
  ">
    <div class="overlay"></div>
    <div class="container" style="position: ab">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" style="color: #f85959" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> your amazing trips</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"   >Find great places to stay, eat, shop, or visit from local experts</p>
          <div class="block-17 my-4">
            {{-- Form *********************--}}
            <form action="/" method="get" class="d-block d-flex" >
             
              <div class="fields d-block d-flex">
                <div class="textfield-search one-third">
                @if (request('place'))
           			 <input
                		type="hidden"
                		name="place"
                		value="{{request('place')}}"
           			 >
           			 @endif
                  <input 
                    value="{{ request('search') }}"
                    name="search"
                    type="text" 
                    class="form-control" 
                    placeholder="Ex: packages title, places">
                </div>
                <div class="select-wrap one-third">
                  {{-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> --}}
                   {{--<select name="place" id="place" class="form-control" placeholder="Keyword search">
                    <option value="">Where</option>
                    <option value="USA">Pagoda</option>
                    <option value="Germany">Beach</option>
                    <option value="London">Town </option> --}}
                    <x-category/>
                    {{-- <option value="Paris">Paris </option> --}}
                  {{-- </select> --}}
                </div>
              </div>
              <input type="submit" class="search-submit btn btn-primary" value="Search">  
            </form>
            {{-- Form *********************--}}

          </div>
          <p>Or browse the highlights</p>
          <p class="browse d-md-flex">
              <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i>Packages</a></span>
              <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-hotel"></i>Hotels</a></span> 
              <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Places</a></span> 
              <span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Services</a></span>
              <span class="d-flex justify-content-md-center align-items-md-	center"><a href="/">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#eff1f6" d="M386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H464c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L386.3 160z"/></svg>   --}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0c0d0d" d="M386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H464c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L386.3 160z"/></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H464c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L386.3 160z"/></svg>
                Refresh
              </a></span>

          </p>
        </div>
      </div>
    </div>
</div>


<section class="ftco-section services-section bg-light">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center"><div class="icon"><img src="https://png.monster/wp-content/uploads/2022/04/png.monster-155.png" style="width: 120px;height: 120px;" class="card-img-top img-fluid" alt="Sustainable Tourism"></div></div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Sustainable Tourism</h3>
              <p>Prioritize sustainability and support local conservation and responsible tourism efforts.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1791/1791961.png" alt="" style="width: 120px;height: 120px;"></div></div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Personalized Authentic Experiences</h3>
              <p>Customize itineraries for immersive experiences with local communities and cultures.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center"><div class="icon"><img src="https://www.pronititravel.com/wp-content/uploads/2023/03/shield.png" alt="" style="width: 120px;height: 120px;"></div></div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Your Safety is Our Priority</h3>
              <p>Ensure safe and healthy travels with thorough cleaning protocols and vetted partners.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center"><div class="icon"><img src="https://money.asda.com/media/igojmssy/best-travel-money-provider-2024-asda-money.png?mode=pad&width=522&height=368" alt="" style="width: 200px;height: 140px;"></div></div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Award-Winning Service</h3>
              <p>We are recognized for exceptional service and customer satisfaction as a trusted and reliable choice.</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="ftco-section ftco-destination">
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
  </section> -->
  {{ $slot }}