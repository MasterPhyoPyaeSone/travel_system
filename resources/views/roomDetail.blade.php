<x-hotel>
  @if(session()->has('orderSuccess'))
  <div class="alert alert-success" role="alert" style="background-color: aqua;padding: 20px;padding-left: 130px;display: flex">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #59ed5e;margin-right: 10px" viewBox="0 0 24 24"><path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.379-2.143-4.288-4.521-3.965C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.035C6.138 3.712 4 5.621 4 8c0 .173.012.347.035.521C2.802 9.215 2 10.535 2 12s.802 2.785 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.379 2.138 4.283 4.521 3.965C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.035C17.857 20.283 20 18.379 20 16c0-.173-.012-.347-.035-.521C21.198 14.785 22 13.465 22 12s-.802-2.785-2.035-3.479m-9.01 7.895l-3.667-3.714l1.424-1.404l2.257 2.286l4.327-4.294l1.408 1.42z"/></svg> 
    <p style="">Successfully Order Your Room </p>
 </div>
@endif
@if(session()->has('roomExit'))
<div class="alert alert-success" role="alert" style="background-color: aqua;padding: 20px;display: flex">
  <svg xmlns="http://www.w3.org/2000/svg" style="color: #f4341b;margin-left: 60px" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" fill-rule="evenodd" d="M512 64c247.4 0 448 200.6 448 448S759.4 960 512 960S64 759.4 64 512S264.6 64 512 64m0 76c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m128.013 198.826c.023.007.042.018.083.059l45.02 45.019c.04.04.05.06.058.083a.118.118 0 0 1 0 .07c-.007.022-.018.041-.059.082L557.254 512l127.861 127.862a.268.268 0 0 1 .05.06l.009.023a.118.118 0 0 1 0 .07c-.007.022-.018.041-.059.082l-45.019 45.02c-.04.04-.06.05-.083.058a.118.118 0 0 1-.07 0c-.022-.007-.041-.018-.082-.059L512 557.254L384.14 685.115c-.042.041-.06.052-.084.059a.118.118 0 0 1-.07 0c-.022-.007-.041-.018-.082-.059l-45.02-45.019a.199.199 0 0 1-.058-.083a.118.118 0 0 1 0-.07c.007-.022.018-.041.059-.082L466.745 512l-127.86-127.86a.268.268 0 0 1-.05-.061l-.009-.023a.118.118 0 0 1 0-.07c.007-.022.018-.041.059-.082l45.019-45.02c.04-.04.06-.05.083-.058a.118.118 0 0 1 .07 0c.022.007.041.018.082.059L512 466.745l127.862-127.86c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z"/></svg>
  <p style="color: #f4341b;margin-left: 10px">This room is already exit. Please check again!!!<br></p>
  {{-- Please check return  --}}
</div>
@endif

  <section class="home" style="">
    <div class="content" >
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="" style=""><img src="{{$room->hotel->img_1}}" alt="" ></div>
          {{-- <img src="{{$room->hotel->img_1}}" alt=""> --}}
          <div class="text" style="margin-top: -80px;padding: 50px">
            <h2 style="font-size: 50px;font-family: 'Mr Dafoe', cursive;text-align: center">Welcome to </h2><br>
            <h1 style="font-size: 60px;text-align: center;color: chocolate">{{$room->hotel->name}} HOTEL</h1>
            <h1 style="text-align: center"  id="booking">Spend Your Holiday</h1>
           
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
        </div>  --}}
      </div>
    </div>
  </section>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script> 
  <section class="book" style="margin-top: -55px" >
    <div class="container flex_space">
      <div class="text">
        <h1> <span>Book </span> Your Rooms </h1>
      </div>
      <div class="form" >
        <form  action="/hotels/rooms/{{$room->id}}/order" method="POST" class="grid">
          @csrf
          <input type="date" placeholder="Araival Date" name="startDate" required>
          <input type="date" placeholder="Departure Date" name="endDate" required>
          <input type="number" placeholder="Adults" name="adult" required max="3" min="0">
          <input type="number" placeholder="Childern" name="child" required max="3" min="0">
          <input type="submit" value="CHECK AVAILABILITY">
        </form>
      </div>
    </div>
  </section>

 

  <section class="about top">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>WELCOME</h1>
          <h2>{{$room->hotel->name}} Hotel</h2>
          <h3>{{$room->room_type}}</h3>
        </div>
         <p>{{$room->intro}}</p>
        <p>{{$room->body}}</p>
       
        <button class="primary-btn"><a href="#booking" style="text-decoration: none;color: aliceblue">Booking Now</a></button>
      </div>
      <div class="right">
        <a href="{{$room->img_1}}"><img src="{{$room->img_1}}" alt="" style="width: 550px;height: 500px;"></a>
      </div>
    </div>
  </section>

  
  <section class="news top rooms">
    <div class="container">
      <div class="heading">
        <h1>Room</h1>
        <h2>Our Rooms</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      </div>


      <div class="content flex">
        <div class="" style="display: flex;align-items: center;justify-content: space-between;gap:20px">
          <div class="items" style="width: 400px">
            <div class="image">
              <img src="{{$room->img_2}}" alt="" style="width: 400px;height: 350px;">
            </div>
            <div class="text">
              <h2>BedRoom</h2>
              <p>When it comes to hotel room reviews, it's important to encourage your guests to leave reviews after their stay. Positive reviews can help attract more guests to your hotel</p>
              {{-- <h2>Finibus bonorum malorm.</h2>
              <div class="admin flex">
                <i class="fa fa-user"></i>
                <label>Admin</label>
                <i class="fa fa-heart"></i>
                <label>500</label>
                <i class="fa fa-comments"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
            </div>
          </div>
          <div class="items" style="width: 400px">
            <div class="image">
              <img src="{{$room->img_3}}" alt="" style="width: 400px;height: 350px;">
            </div>
            <div class="text">
              <h2>LivingRoom</h2>
              <p>To collect more reviews, you can send a follow-up email or text message to guests after their stay, asking them to leave a review on popular hotel review sites such as Google, </p>
              {{-- <h2>Finibus bonorum malorm.</h2>
              <div class="admin flex">
                <i class="fa fa-user"></i>
                <label>Admin</label>
                <i class="fa fa-heart"></i>
                <label>500</label>
                <i class="fa fa-comments"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
            </div>
          </div>
          <div class="items" style="width: 400px">
            <div class="image">
              <img src="{{$room->img_4}}" alt="" style="width: 400px;height: 350px;">
            </div>
            <div class="text">
              <h2>Facilities</h2>
              {{-- <p>To collect more reviews, you can send a follow-up email or text message to guests after their stay, asking them to leave a review on popular hotel review sites such as Google, </p> --}}
              <p>it's important to monitor your hotel's online reputation and address any inaccuracies or false reviews.Respond to any concerns or issues raised in reviews and use the feedback </p>
              {{-- <h2>Finibus bonorum malorm.</h2>
              <div class="admin flex">
                <i class="fa fa-user"></i>
                <label>Admin</label>
                <i class="fa fa-heart"></i>
                <label>500</label>
                <i class="fa fa-comments"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
            </div>
          </div>
        </div>

        {{-- <div class="right">
          <div class="box flex">
            <div class="img">
              <img src="{{$room->img_4}}" alt="">
            </div>
            <div class="stext">
              <h2>Etiam Vel Nequ</h2>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
            </div>
          </div>
          <div class="box flex">
            <div class="img">
              <img src="{{$room->img_5}}" alt="">
            </div>
            <div class="stext">
              <h2>Etiam Vel Nequ</h2>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
            </div>
          </div>
          <div class="box flex">
            <div class="img">
              <img src="{{$room->img_5}}" alt="">
            </div>
            <div class="stext">
              <h2>Etiam Vel Nequ</h2>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>

  

</x-hotel>