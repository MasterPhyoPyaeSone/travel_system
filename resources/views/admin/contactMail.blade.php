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
                <th style="text-align: center">User</th>
                <th style="text-align: center">Contact Messages</th>
                <th style="padding-left: 50px">Email</th>
                <th>Ph_NO</th>
                <th style="text-align: center">Created Date</th>
                
                <th style="text-align: center">Action</th>
              </tr>
            </thead>
           
            <tbody>
                @foreach ($mails as $mail)
              <tr>
                <td style="text-align: center">
                 {{$mail->name}}
                </td>
                <td>
                  <div class="pages-table-img" style="text-align: center">
                    {{-- <picture><source srcset="{{$mail->image}}" type="image/webp"><img src="{{$mail->image}}" alt="User Name"></picture> --}}
                   {{$mail->message}}
                  </div>
                </td>
                <td>
                    {{$mail->email}}
                </td>
                <td>
                    {{$mail->ph_no}}
                </td>
                <td style="text-align: center">{{$mail->created_at->format('D-M-Y')}}</td>
                {{-- <td style="text-align: center">{{$mail->updated_at->format('D-M-Y')}}</td> --}}
                <td>
                  
                  <div class="d-flex" style="justify-content:space-evenly;display: flex">
                    @if ($mail->issendmail === 0)
                    <button type="submit" style="background-color: rgb(232, 246, 37);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px">
                    <a href="/admin/mails/{{$mail->email}}/send">Send</a>
                    </button>
                    @else
                    <button type="submit" style="background-color:rgb(37, 86, 246);padding: 7px;border-radius: 20px;color: aliceblue;width: 70px">
                       Mail
                      </button>
                      @endif
                    <form action="/admin/{{$mail->id}}/deletecontactmail" method="post">
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