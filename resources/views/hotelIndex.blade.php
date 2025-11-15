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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('https://api.authentichotels.com/files/upload/2022/02/09/170145_soneva-jani-2');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }" style="margin-bottom: 100px">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
          </div>
        </div>
      </div>
    </div>

	
    <section class="ftco-section ftco-degree-bg">
	
      <div class="container">
		
        <div class="row">
			
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find Hotels</h3>
					<a href="/Allhotel"><svg xmlns="http://www.w3.org/2000/svg" style="width: 20px;height: 20px;margin-left: 85%" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M105.1 202.6c7.7-21.8 20.2-42.3 37.8-59.8c62.5-62.5 163.8-62.5 226.3 0L386.3 160H352c-17.7 0-32 14.3-32 32s14.3 32 32 32H463.5c0 0 0 0 0 0h.4c17.7 0 32-14.3 32-32V80c0-17.7-14.3-32-32-32s-32 14.3-32 32v35.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5zM39 289.3c-5 1.5-9.8 4.2-13.7 8.2c-4 4-6.7 8.8-8.1 14c-.3 1.2-.6 2.5-.8 3.8c-.3 1.7-.4 3.4-.4 5.1V432c0 17.7 14.3 32 32 32s32-14.3 32-32V396.9l17.6 17.5 0 0c87.5 87.4 229.3 87.4 316.7 0c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.5 62.5-163.8 62.5-226.3 0l-.1-.1L125.6 352H160c17.7 0 32-14.3 32-32s-14.3-32-32-32H48.4c-1.6 0-3.2 .1-4.8 .3s-3.1 .5-4.6 1z"/></svg></a>
        			<form action="/Allhotel">
        				<div class="fields">
		              <div class="form-group">
					 @if (request('price'))
           			 <input
                		type="hidden"
                		name="price"
                		value="{{request('price')}}"
           			 >
           			 @endif

					<!-- @if (request('personal'))
           			 <input
                		type="hidden"
                		name="personal"
                		value="{{request('personal')}}"
           			 >
           			 @endif -->
         
		                <input type="text" 
						value="{{ request('search') }}"
						name="search"
						class="form-control"
						placeholder="Destination, City">
		              </div>
					  
					  <!-- <x-category/> -->
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                   
					   <select name="price" id="price" class="form-control" placeholder="Keyword search">
					    <option value="">Select Price</option> 
					   
					    <option value="30000" > 30000</option> 
					    <option value="35000" > 35000</option> 	
					    <option value="40000" > 40000</option> 					                      
					    <option value="50000" > 50000</option> 
					    <option value="60000" > 60000</option> 
					    <option value="66000" > 66000</option> 	
					    <option value="70000" > 70000</option> 					                      
					    <option value="80000" > 80000</option> 	
					    <option value="180000" > 180000</option> 					                      

					   					                      

				       </select> 
					
	                  </div>
					 
		              </div>
					 
		              {{-- <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div> --}}
		              {{-- <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div> --}}
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
				
        		</div>
        		<div class="sidebar-wrap bg-light ftco-animate">
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
          <div class="col-lg-9">
			
          	<div class="row">
				@forelse ($hotels as $hotel)
							<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="/Allhotel/{{$hotel->id}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ $hotel->img_1 }});">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">{{ $hotel->name }}</a></h3>
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
			    							<span class="price per-price">{{ $hotel->price }}<br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p>{{ $hotel->intro }}</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> {{ $hotel->place }}</span> 
		    							{{-- <span class="ml-auto"><a href="/Allhotel/{{$hotel->id}}">Book Now</a></span> --}}
		    						</p>
									<p class="bottom-area" style="margin-left: 60%"><span class="ml-auto" style="width: 150px"><a href="#">Book Now</a></span></p>

		    					</div>
		    				</div>
		    			</div>
				
				@empty
					<div class="" style="margin-top: 25%;margin-left: 15%"><h3 style="text-align: center;margin-left: 50px">NO Hotel Found???????????????</h3></div>

				@endforelse			
          
          	</div>
			  <div class="" style="padding: 20px">{{ $hotels->links() }}</div>

        </div>
      </div>
    </section> <!-- .section -->

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