<x-admin_layout>
    <div class="col-lg-12">
        <div class="chart">
          <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
        </div>
        <div class="alert alert-dark" style="background-color: aquamarine">
          @if (session()->has('delete'))
          <p>{{ session('delete') }}</p>        
          @endif
        </div>
        <div class="alert alert-dark">
          @if (session()->has('success'))
          <p>{{ session('success') }}</p>        
          @endif
        </div>
        <div class="alert alert-dark">
          @if (session()->has('update'))
          <p>{{ session('update') }}</p>        
          @endif
        </div>

       <div class="" style="display: flex">
        <a href="/admin/allPackageorders">
          <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px;height: 30px;margin-top: 12px;margin-right: 15px  "  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#dbdbdc" d="M48 256a208 208 0 1 1 416 0A208 208 0 1 1 48 256zm464 0A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM217.4 376.9c4.2 4.5 10.1 7.1 16.3 7.1c12.3 0 22.3-10 22.3-22.3V304h96c17.7 0 32-14.3 32-32V240c0-17.7-14.3-32-32-32H256V150.3c0-12.3-10-22.3-22.3-22.3c-6.2 0-12.1 2.6-16.3 7.1L117.5 242.2c-3.5 3.8-5.5 8.7-5.5 13.8s2 10.1 5.5 13.8l99.9 107.1z"/></svg>
          </a>
        <form action="/admin/users/searchPackage" method="post">
            @csrf
            <div class="search-wrapper" >
                <i data-feather="search" aria-hidden="true"></i>
                <input type="text" name="name"  placeholder="Enter username ..." required>
              </div>
           </form> 
           {{-- <a href="/admin/allorders">
           <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px;height: 30px;margin-top: 9px;margin-left: 25px  " viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#d6d6d6" d="M320.7 352c8.1-89.7 83.5-160 175.3-160c8.9 0 17.6 .7 26.1 1.9L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32v69.7c-.1 .9-.1 1.8-.1 2.8V472c0 22.1 17.9 40 40 40h16c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2H160h24c22.1 0 40-17.9 40-40V448 384c0-17.7 14.3-32 32-32h64l.7 0zM640 368a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zm-76.7-43.3c6.2 6.2 6.2 16.4 0 22.6l-72 72c-6.2 6.2-16.4 6.2-22.6 0l-40-40c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0L480 385.4l60.7-60.7c6.2-6.2 16.4-6.2 22.6 0z"/></svg>
           </a> --}}
       </div>
       @if (session()->has('error'))
       <div class="alert alert-dark" style="background-color: aquamarine;padding: 10px">     
        <p>{{ session('error') }}</p>        
        @endif
      </div>

        <div class="users-table table-wrapper">
          <table class="posts-table">
            <thead>
              <tr class="users-table-info" >
                <th style="text-align: center">UserName</th>
                <th style="text-align: center">Image</th>
                <th style="text-align: center">Package Name</th>
                <th style="text-align: center">Adult</th>
                <th style="text-align: center">Child</th>
                <th style="text-align: center">Price</th>
                <th style="text-align: center">Departure Date</th>               
                <th style="text-align: center">Created Date</th>
                <th style="text-align: center">Voucher_Img</th>
                <th style="text-align: center">Total Price</th>


                {{-- <th style="text-align: center">Updated Date</th> --}}
                <th style="text-align: center">Action</th>
              </tr>
            </thead>
           
            <tbody>
                <tr>
                @foreach ($orders as $order)
                <td style="text-align: center">
                    {{$order->user->name}}
                  </td>               
             
                 <td style="padding: 0;margin: 0%">
                      <img src="{{$order->package_img}}" alt="" style="width:100px;height:100px;border-radius: 0%;margin-left: 30px">
                  </td>
                <td style="text-align: center">
                 {{$order->package_title}}
                </td>
                <td style="text-align: center">
                  {{$order->adult}}
                </td>
                
                <td style="text-align: center">
                  {{$order->child}}
                </td>
                <td style="text-align: center">
                  {{$order->package_price}}
                </td>
                <td style="text-align: center">{{$order->startDate}}</td>

                
                <td style="text-align: center">{{$order->created_at->format('d-m-y')}}</td>

                <td style="text-align: center"><a href="{{$order->pay_img}}"><img src="{{$order->pay_img}}"  style="width:100px;height:100px;border-radius: 0%;margin-left: 30px"  alt="NO VOUCHER"></a></td>
                <td style="text-align: center"> {{$order->total_price}}</td>
                {{-- @foreach ($order->package_price as $price)
                     @dd($price)
                @endforeach --}}
               
                <td>
                  
                  <div class="d-flex" style="justify-content:space-evenly;display: flex">
                    
                    @if ($order->confirm === 0)
                    <button type="submit" style="background-color: rgb(37, 246, 61);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px"  >
                    {{-- <a href="/checkpayment/{{$order->id}}/checkComfirm" >Normal</a> --}}
                    <p style="font-size: 13px">Reject</p>
                    </button>
                    @else
                    <button type="submit" style="background-color: rgb(37, 86, 246);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px">
                      {{-- <a href="/sendEmail/{{$order->id}}/send">Mail</a> --}}
                      <a href="/checkpaymentpackage/{{$order->user_id}}/checkNotComfirm"><p style="font-size: 13px">Access</p></a>
                    </button>
                    @endif
                    
                    {{-- <a href="/admin/orders/{{$order->id}}">Confirm</a> --}}
                    @if ($order->issendmail === 0)
                    <button type="submit" style="background-color: rgb(37, 246, 61);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px"  >
                    <a href="/sendEmail/{{$order->id}}/sendmailPackage" >Confirm</a>
                    </button>
                    @else
                    <button type="submit" style="background-color: rgb(37, 86, 246);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px">
                      {{-- <a href="/sendEmail/{{$order->id}}/send">Mail</a> --}}
                      <p style="font-size: 13px">Mail</p>
                    </button>
                    @endif

                   
                    <form action="/admin/{{$order->id}}/deletePackageOrder" method="post">
                      @method('delete')
                      @csrf
                    <button type="submit" style="background-color: red;padding: 5px;border-radius: 20px;color: aliceblue;width: 70px">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
                @endforeach
            </tbody>
           
          </table>
       
        </div>
        
</div>
</x-admin_layout>