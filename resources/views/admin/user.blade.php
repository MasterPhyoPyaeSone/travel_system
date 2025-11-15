<x-admin_layout>
  <div class="alert alert-dark">
    @if (session()->has('success'))
    <p>{{ session('success') }}</p>        
    @endif
  </div>
    <div class="col-lg-12">
        <div class="chart">
          <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
        </div>
        <div class="alert alert-dark" style="background-color: aquamarine">
          @if (session()->has('delete'))
          <p>{{ session('delete') }}</p>        
          @endif
        </div>
        <div class="users-table table-wrapper">
          <table class="posts-table">
            <thead>
              <tr class="users-table-info" >
               
                <th style="padding-left: 50px">Email</th>
                <th>User</th>
                <th style="text-align: center">Created Date</th>
                <th style="text-align: center">Updated Date</th>
                <th style="text-align: left;padding-left: 60px">Action</th>
              </tr>
            </thead>
           
            <tbody>
                @foreach ($users as $user)
              <tr>
                <td>
                 {{$user->email}}
                </td>
                <td>
                  <div class="pages-table-img">
                    <picture><source srcset="{{$user->image}}" type="image/webp"><img src="{{$user->image}}" alt="User Name"></picture>
                   {{$user->name}}
                  </div>
                </td>
                <td style="text-align: center">{{$user->created_at->format('D-M-Y')}}</td>
                <td style="text-align: center">{{$user->updated_at->format('D-M-Y')}}</td>
                <td>
                  
                  <div class="d-flex" style="display: flex;gap: 20px;">
                    <button type="submit" style="background-color: rgb(232, 246, 37);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px">
                    <a href="/admin/users/{{$user->id}}">Edit</a>
                    </button>
                    <form action="/admin/{{$user->id}}/delete" method="post">
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
        {{-- {{$users->links()}} --}}
        </div>
        
      </div>

</x-admin_layout>