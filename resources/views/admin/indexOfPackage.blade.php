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
                  <th style="text-align: center">Image</th>
                  <th style="text-align: center">Title</th>                 
                  <th style="text-align: center">Category_Type</th>
                  <th style="text-align: center">Price</th>                 
                  <th style="text-align: center;">long_time</th>
                  <th style="text-align: center">Place</th>
                  <th style="text-align: center">Created Date</th>
                  <th style="text-align: center">Updated Date</th>
                  <th style="text-align: center">Action</th>
                </tr>
              </thead>
             
              <tbody>
                  @foreach ($packages as $package)
                <tr>
                   <td>
                        <img src="{{$package->img_1}}" alt="" style="width:130px;height:100px;border-radius: 0%">
                    </td>
                  <td style="text-align: center">
                   {{$package->title}}
                  </td>
                  
                
                  <td style="padding: 50px">
                    {{$package->category->name}}
                  </td>
                  <td style="text-align: center">
                    {{$package->price}}
                  </td>
                  <td style="text-align: center">
                    {{$package->long_time}}
                  </td>
                  <td style="text-align: center">
                    {{$package->place}}
                  </td>
                  <td style="text-align: center">{{$package->created_at}}</td>
                  <td style="text-align: center">{{$package->updated_at}}</td>
                  <td>
                    
                    <div class="d-flex" style="justify-content:space-evenly;display: flex;gap: 10px">
                      <button type="submit" style="background-color: rgb(232, 246, 37);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px">
                      <a href="/admin/packages/{{$package->id}}">Edit</a>
                      </button>
                      <form action="/admin/{{$package->id}}/deletePackage" method="post">
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