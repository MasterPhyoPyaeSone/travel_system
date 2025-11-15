@php
$comments = $hotel->comments()->latest()->get();
@endphp



<x-hotel>

    <section class="home" >
        <div class="content" >
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="" style=""><img src="{{$hotel->img_1}}" alt=""></div>
                    {{-- <img src="{{$hotel->img_1}}" alt=""> --}}
                    <div class="text" style="margin-top: -80px;padding: 50px">
                        <h2 style="font-size: 50px;font-family: 'Mr Dafoe', cursive;text-align: center">Welcome to </h2><br>
                        <h1 style="font-size: 60px;text-align: center;color: chocolate">{{$hotel->name}} HOTEL</h1>
                        <h1 style="text-align: center" id="booking">Spend Your Holiday</h1>

                    </div>
                </div>
                {{-- <div class="item">
         
          <img src="{{$hotel->img_2}}" alt="">

                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                    </p>
                </div>
            </div>
            <div class="item">

                <img src="{{$hotel->img_3}}" alt="">

                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                    </p>
                </div>
            </div> --}}
        </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true
            , margin: 0
            , nav: true
            , dots: false
            , navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"]
            , responsive: {
                0: {
                    items: 1
                }
                , 768: {
                    items: 1
                }
                , 1000: {
                    items: 1
                }
            }
        })

    </script>

    {{-- --}}
    <section class="about top">
        <div class="container flex">
            <div class="left">
                <div class="heading">
                    <div class="counter2">
                        <h1>WELCOME</h1><br>
                        <h2 style="color: rgb(19, 19, 18);">{{strtoupper($hotel->name)}}</h2>
                        <hr>
                    </div>
                    {{-- <h2 style="font-weight: bold;margin:0%;margin-left: 20px">Luxury Hotel</h2> --}}

                    <p style="margin-bottom: 20px"> {{$hotel->intro}}</p>

                    <h3 style="font-family: sans-serif">Popular Amenities</h3>
                    <hr style="background: #2ef718;height: 3px;width: 15%;margin-left: 25px;border: none;margin-top: 5px"><br>
                    <div class="con" style="display: flex;justify-content: space-evenly;align-items: center;margin-bottom: 50px;color:#CC8C18">
                        <div class="con_1">
                            <div class="" style="display: flex;flex-direction: column;align-items: center;margin-bottom: 20px">
                                <i class="fa-solid fa-desktop" style="font-size: 35px"></i>
                                <h4>Pravite Workplace</h4>
                            </div>
                            <div class="" style="display: flex;flex-direction: column;align-items: center">
                                <i class="fa-solid fa-utensils" style="font-size: 35px"></i>
                                <h4>Free Breakfast</h4>
                            </div>

                        </div>

                        <div class="con_2">
                            <div class="" style="display: flex;flex-direction: column;align-items: center;margin-bottom: 20px">
                                <i class="fa-solid fa-square-parking" style="font-size: 35px"></i>
                                <h4>Parking Area</h4>
                            </div>
                            <div class="" style="display: flex;flex-direction: column;align-items: center">
                                <i class="fa-solid fa-lightbulb" style="font-size: 35px"></i>
                                <h4>24/7Light</h4>
                            </div>
                        </div>

                        <div class="con_3">
                            <div class="" style="display: flex;flex-direction: column;align-items: center;margin-bottom: 20px">
                                <i class="fa-solid fa-person-swimming" style="font-size: 35px"></i>
                                <h4>Swimming Pool</h4>
                            </div>
                            <div class="" style="display: flex;flex-direction: column;align-items: center">
                                <i class="fa-solid fa-dumbbell" style="font-size: 35px"></i>
                                <h4>Fitness Gym</h4>
                            </div>
                        </div>
                    </div>
                    <p>{{$hotel->body}}</p><br>

                </div>


                {{-- <button class="primary-btn">ABOUT US</button> --}}
            </div>
            <div class="right">
                <a href="{{$hotel->img_1}}"><img src="{{$hotel->img_1}}" alt="" style="width: 650px;height: 550px;"></a><br>
                <div class="d-flex" style="display: flex;margin-left: 20px;margin-top: 20px">
                    <p style="margin-left: 20px;font-size: 20px">MODERN HOTEL & RESORT </p>
                    <div class="" style="display: flex;margin-bottom: 20px;margin-left: 20px;">
                        <i class="fa-solid fa-star" style="color: gold;font-size: 25px"></i>
                        <i class="fa-solid fa-star" style="color: gold;font-size: 25px"></i>
                        <i class="fa-solid fa-star" style="color: gold;font-size: 25px"></i>
                        <i class="fa-solid fa-star" style="color: gold;font-size: 25px"></i>
                        <i class="fa-solid fa-star" style="color: gold;font-size: 25px"></i>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter top">
        <div class="container grid">
            <div class="box">
                <h1>2500</h1>
                <hr>
                <span>Customer</span>
            </div>
            <div class="box">
                <h1>1250</h1>
                <hr>
                <span>Happy Customer</span>
            </div>
            <div class="box">
                <h1>150</h1>
                <hr>
                <span>Expert Technicians</span>
            </div>
            <div class="box">
                <h1>3550</h1>
                <hr>
                <span>Desktop Reaired</span>
            </div>
        </div>
    </section>

    <section class="rooms">
        <div class="container top">
            <div class="heading">
                <div class="counter2">
                    <h1>EXPOLRE</h1>
                    <h2>Our Rooms</h2>
                    <hr style="width: 150px">
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    </p>
                </div>
            </div>

            <div class="content mtop" style="display: flex;align-items: center;justify-content: space-evenly;padding: 20px">
                {{-- <div class="owl-carousel owl-carousel1 owl-theme"> --}}

                @foreach($rooms as $room)
                <div class="items" style="display: flex;width: 700px;height: 450px;">
                    <div class="image">
                        <!-- <img src="" alt=""> -->
                        <a href="/rooms/{{$room->id}}"><img src="{{$room->img_1}}" alt="" style="width: 400px;height: 430px;"></a>
                    </div>
                    <div class="text">
                        <h2>{{$room->room_type}} </h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>{{$room->intro}}
                        </p>
                        <div class="button ">
                            <h3 style="font-size: 25px;margin-bottom: 50px;margin-left: -5px"> {{$room->price}}<span style="font-size: 15px;"> <br> (Per Night)</span> </h3>
                            <button class="primary-btn" style="background-color: #CC8C18"><a href="/rooms/{{$room->id}}" style="color: aliceblue;">BOOK NOW</a></button>

                        </div>
                    </div>
                </div>
                @endforeach
                {{-- </div> --}}
            </div>
        </div>
    </section>

    <script>
        $('.owl-carousel1').owlCarousel({
            loop: true
            , margin: 40
            , nav: true
            , dots: false
            , navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"]
            , responsive: {
                0: {
                    items: 1
                }
                , 768: {
                    items: 2
                    , margin: 10
                , }
                , 1000: {
                    items: 3
                }
            }
        })

    </script>


    <section class="gallery">
        <div class="container top">
            <div class="heading">
                <div class="counter2">
                    <h1>PHOTOS</h1>
                    <h2>Our Gallery</h2>
                    <hr style="width: 150px">
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt </p>
                </div>
            </div>
        </div>

        <div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="items">
                    <div class="img">
                        <a href="{{$hotel->img_1}}"><img src="{{$hotel->img_1}}" alt="" style="width: 250px;height: 250px;"></a>
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_2}}" alt="img" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_3}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_4}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_5}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_6}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_7}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_8}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_9}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="{{$hotel->img_10}}" alt="" style="width: 250px;height: 250px;">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        $('.owl-carousel1').owlCarousel({
            loop: true
            , margin: 0
            , nav: true
            , dots: false
            , autoplay: true
            , autoplayTimeout: 1000
            , autoplayHoverPause: true
            , navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"]
            , responsive: {
                0: {
                    items: 1
                }
                , 768: {
                    items: 4
                , }
                , 1000: {
                    items: 6
                }
            }
        })

    </script>

    <section class="services top">
        <div class="container">
            <div class="heading">
                <div class="counter2">
                    <h1>FACILITIES</h1>

                    <h2>Our Services</h2>
                    <hr style="width: 180px">
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                </div>
            </div>


            <div class="content flex_space d-flex">
                <div class="left grid2" style="margin-right: 20px">
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-champagne-glasses"></i>
                            <h3>Delious Food</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-person-biking"></i>
                            <h3>Fintness</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-utensils"></i>
                            <h3>Inhouse Restaurant</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-spa"></i>
                            <h3>Beauty Spa</h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="right"> --}}
                {{-- <img src="/images/service.png" alt=""> --}}
                <div class="left grid2">
                    <div class="box">
                        <div class="text">
                            {{-- <i class="fa-solid fa-champagne-glasses"></i> --}}
                            <img src="/image/lotus.png" style="width: 50px;height: 50px;" alt="">
                            <h3>YOGA</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            {{-- <i class="fa-solid fa-person-biking"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px;height: 50px;" viewBox="0 0 640 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#f4a434" d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z" /></svg>
                            <h3>Four Bangalows</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            {{-- <i class="fa-solid fa-utensils"></i> --}}
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px;height: 50px;" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#e6a00a" d="M155.6 17.3C163 3 179.9-3.6 195 1.9L320 47.5l125-45.6c15.1-5.5 32 1.1 39.4 15.4l78.8 152.9c28.8 55.8 10.3 122.3-38.5 156.6L556.1 413l41-15c16.6-6 35 2.5 41 19.1s-2.5 35-19.1 41l-71.1 25.9L476.8 510c-16.6 6.1-35-2.5-41-19.1s2.5-35 19.1-41l41-15-31.3-86.2c-59.4 5.2-116.2-34-130-95.2L320 188.8l-14.6 64.7c-13.8 61.3-70.6 100.4-130 95.2l-31.3 86.2 41 15c16.6 6 25.2 24.4 19.1 41s-24.4 25.2-41 19.1L92.2 484.1 21.1 458.2c-16.6-6.1-25.2-24.4-19.1-41s24.4-25.2 41-19.1l41 15 31.3-86.2C66.5 292.5 48.1 226 76.9 170.2L155.6 17.3zm44 54.4l-27.2 52.8L261.6 157l13.1-57.9L199.6 71.7zm240.9 0L365.4 99.1 378.5 157l89.2-32.5L440.5 71.7z"/></svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px;height: 50px;" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#f58f19" d="M393.4 9.4c12.5-12.5 32.8-12.5 45.3 0l64 64c12.5 12.5 12.5 32.8 0 45.3c-11.8 11.8-30.7 12.5-43.2 1.9l-9.5 9.5-48.8 48.8c-9.2 9.2-11.5 22.9-8.6 35.6c9.4 40.9-1.9 85.6-33.8 117.5L197.3 493.3c-25 25-65.5 25-90.5 0l-88-88c-25-25-25-65.5 0-90.5L180.2 153.3c31.9-31.9 76.6-43.1 117.5-33.8c12.6 2.9 26.4 .5 35.5-8.6l48.8-48.8 9.5-9.5c-10.6-12.6-10-31.4 1.9-43.2zM99.3 347.3l65.4 65.4c6.2 6.2 16.4 6.2 22.6 0l97.4-97.4c6.2-6.2 6.2-16.4 0-22.6l-65.4-65.4c-6.2-6.2-16.4-6.2-22.6 0L99.3 324.7c-6.2 6.2-6.2 16.4 0 22.6z" /></svg>
                            <h3>Mini Bar</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            {{-- <i class="fa-solid fa-spa"></i> --}}
                            {{-- <i class="fa-solid fa-table-tennis-paddle-ball" style="color: #ec8d09;"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px;height: 50px;" viewBox="0 0 640 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ec8d09" d="M480 288c-50.1 0-93.6 28.8-114.6 70.8L132.9 126.3l.6-.6 60.1-60.1c87.5-87.5 229.3-87.5 316.8 0c67.1 67.1 82.7 166.3 46.8 248.3C535.8 297.6 509 288 480 288zM113.3 151.9L354.1 392.7c-1.4 7.5-2.1 15.3-2.1 23.3c0 23.2 6.2 44.9 16.9 63.7c-3 .2-6.1 .3-9.2 .3H357c-33.9 0-66.5-13.5-90.5-37.5l-9.8-9.8c-13.1-13.1-34.6-12.4-46.8 1.7L152.2 501c-5.8 6.7-14.2 10.7-23 11s-17.5-3.1-23.8-9.4l-32-32c-6.3-6.3-9.7-14.9-9.4-23.8s4.3-17.2 11-23l66.6-57.7c14-12.2 14.8-33.7 1.7-46.8l-9.8-9.8c-24-24-37.5-56.6-37.5-90.5v-2.7c0-22.8 6.1-44.9 17.3-64.3zM480 320a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" /></svg>
                            <h3>Sport Room</h3>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="Customer top">
        <div class="container">

            <div class="owl-carousel owl-carousel2 owl-theme">

                <div class="item">
                    {{-- <img src="/public/storage/blogs/nKVCKUccRiQCY3zF9t4N59AMEAHbJvjumfRIK8uz.jpg" alt="img"> --}}
                    {{-- <i class="fa-solid fa-quote-right"></i> --}}
                    <i class="fas fa-user-circle"></i>

                    <p>"The hotel was absolutely beautiful! The staff were so friendly and helpful, and the room was clean and comfortable. The location was perfect for exploring the city, and the breakfast was delicious. I would highly recommend this hotel to anyone visiting the area."</p>
                    <h3>Aye Aye</h3>

                </div>

                <div class="item">
                    {{-- <img src="/public/storage/blogs/nKVCKUccRiQCY3zF9t4N59AMEAHbJvjumfRIK8uz.jpg" alt="img"> --}}
                    {{-- <i class="fa-solid fa-quote-right"></i> --}}
                    <i class="fas fa-user-circle"></i>

                    <p>"I was really disappointed with my stay at this hotel. The room was small and outdated, and the bathroom was not very clean. The staff were not very friendly or helpful, and the location was not very convenient. I would not recommend this hotel to anyone."</p>
                    <h3>Julia Min Min</h3>

                </div>


            </div>

        </div>
    </section> <br>
    <script>
        $('.owl-carousel2').owlCarousel({
            loop: true
            , margin: 0
            , nav: false
            , dots: true
            , responsive: {
                0: {
                    items: 1
                }
                , 768: {
                    items: 1
                , }
                , 1000: {
                    items: 1
                }
            }
        })

    </script>

    {{-- comment*************8 --}}


</x-hotel>
