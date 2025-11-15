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


          <div class="users-table table-wrapper">
            <table class="posts-table">
              <thead>
                <tr class="users-table-info" >
                  <th style="text-align: center">Hotel_name</th>

                  <th style="text-align: left">Room_image</th>
                  <th style="text-align: center">Room_type</th>
                  {{-- <th style="text-align: center">intro</th> --}}
                  {{-- <th style="text-align: center">body</th> --}}
                  
                  <th style="text-align: center">price</th>
                  
                  <th style="text-align: center">Created Date</th>
                  <th style="text-align: center">Updated Date</th>
                  <th style="text-align: center">Action</th>
                </tr>
              </thead>
             
              <tbody>
               
                  @foreach ($rooms as $room)
                <tr>
                  <td style="text-align: center">
                    {{$room->hotel->name}}
                  </td>
                   <td>
                        <img src="{{$room->img_1}}" alt="" style="width:100px;height:100px;border-radius: 0%">
                    </td>
                  <td style="text-align: center">
                   {{$room->room_type}}
                  </td>
                  <td style="text-align: center">
                    {{$room->price}}
                  </td>
                  <td style="text-align: center">{{$room->created_at->format('d-m-y')}}</td>
                  <td style="text-align: center">{{$room->updated_at->format('d-m-y')}}</td>
                  <td>
                    
                    <div class="d-flex" style="justify-content:space-evenly;display: flex">
                      <button type="submit" style="background-color: rgb(232, 246, 37);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px">
                      <a href="/admin/rooms/{{$room->id}}/edit">Edit</a>
                      </button>
                      <form action="/admin/{{$room->id}}/deleteRoom" method="post">
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
   {{-- <div class="" style="background-color: aqua;display: flex;flex-direction: column"> {{$packages->links()}}</div> --}}
  </x-admin_layout>