<!DOCTYPE html>
<html lang="en">
<head>
    <title>DirEngine - Free Bootstrap 4 Template by Colorlib</title>
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
    <style>
        tr {
            color: black
        }

    </style>
</head>
<body>
    <x-navbar />

    <div class="hero-wrap js-fullheight" style="background-image: url('https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-myanmar.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>All_Orders</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">All_Orders</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="card" style="margin-top: 150px;width: 1200px;margin-left: 150px">
        <div class="card-header">
            <h2>Your PackagesOrder Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  m-0">
                    <thead>
                        <tr>
                            <!-- Set columns width -->
                            <th class="text-center py-3 px-4" style="width: 50px;margin-right: 20px;color: black">Package_img</th>
                            <th class="text-center py-3 px-4" style="min-width: 200px;">Package_Title</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">Adult</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">Child</th>

                            <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="{{$order->package_img}}" class="d-block ui-w-10 ui-bordered mr-4" alt="" style="width: 150px;height: 100px;">

                                </div>
                            </td>
                            <td class="text-center font-weight-semibold align-middle p-4">{{$order->package_title}}</td>
                            <td class="text-center font-weight-semibold align-middle p-4">{{$order->adult}}</td>

                            <td class="text-center font-weight-semibold align-middle p-4">{{$order->child}}</td>
                            <td class="text-center font-weight-semibold align-middle p-4"> {{$order->package_price}}</td>

                            {{-- @dd($order->package_id) --}}
                            <td class="text-center align-middle px-0">
                                {{-- <a href="/{{$order->package_id}}/delete" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a> --}}
                                <form action="/orders/{{$order->package_id}}/delete" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove"><svg xmlns="http://www.w3.org/2000/svg" style="width: 20px;height:20px" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#bdbdbd" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" /></svg></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
       

    <div class="card" style="width: 1200px;margin-bottom: 100px;margin-left: 150px">
        <div class="card-header">
            <h2>Your RoomOrder Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  m-0">
                    <thead>
                        <tr>

                            <th class="text-center py-3 px-4" style="width: 50px;margin-right: 20px">Room_img</th>
                            <th class="text-center py-3 px-4" style="min-width: 200px;">Hotel Name</th>
                            <th class="text-center py-3 px-4" style="min-width: 200px;">Room_Type</th>

                            <th class="text-center py-3 px-4" style="width: 120px;">Adult</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">Child</th>
                            <th class="text-center py-3 px-4" style="width: 100px;">Start_Date</th>
                            <th class="text-center py-3 px-4" style="width: 100px;">End_Date</th>



                            <th class="text-right py-3 px-4" style="width: 100px;">PerNight_Price</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roomorders as $order)
                        <tr>
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="{{$order->room_img}}" class="d-block ui-w-10 ui-bordered mr-4" alt="" style="width: 150px;height: 100px;">

                                </div>


                            </td>
                            <td class="text-center font-weight-semibold align-middle p-4">{{$order->hotel_name}}</td>
                            <td class="text-center font-weight-semibold align-middle p-4">{{$order->room_type}}</td>

                            <td class="text-center font-weight-semibold align-middle p-4">{{$order->adult}}</td>
                            <td class="text-center font-weight-semibold align-middle p-4">{{$order->child}}</td>
                            <td class="text-center font-weight-semibold align-middle p-2">{{$order->startDate}}</td>
                            <td class="text-center font-weight-semibold align-middle p-2">{{$order->endDate}}</td>
                            <td class="text-center font-weight-semibold align-middle p-4"> {{$order->room_price}}</td>

                            {{-- @dd($order->package_id) --}}
                            <td class="text-center align-middle px-0">
                                {{-- <a href="/{{$order->package_id}}/delete" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a> --}}
                                <form action="/roomorders/{{$order->room_id}}/delete" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove"><svg xmlns="http://www.w3.org/2000/svg" style="width: 20px;height:20px" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#bdbdbd" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" /></svg></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <!-- / Shopping cart table -->

            {{-- <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                              <div class="mt-4">
                                
                              </div>
                              <div class="d-flex">
                                
                                <div class="text-right mt-4 mr-5">
                                  <label class="text-muted font-weight-normal m-0" style="font-size: 20px;font-weight: bolder;color: dodgerblue;">Total price</label>
                                  <div class="text-large mt-2" style="text-align: center;color: dodgerblue;"><strong >$ {{$real_price}}</strong>
        </div>
    </div>
    </div>
    </div>
    <div class="float-right">
        <button type="submit" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3" style="border: none;"><a href="/Allhotel" style="text-decoration: none">Back to shopping</a></button>

        <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
    </div> --}}
    </div>
    </div>



    <x-footer />


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
