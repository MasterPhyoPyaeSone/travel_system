<x-admin_layout>
   <div class="container">
        <form action="/update/{{$user->id}}" method="post">
            @csrf
            {{-- <table style="background-color: aqua;">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="" value="{{$user->name}}" required></td>
                    <small><x-error_layout name="name"/></small>
                </tr>
                    
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="username" id="" value="{{$user->username}}" required></td>
                </tr>
                <x-error_layout name="username"/>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id="" value="{{$user->email}}" required></td>
                </tr>
                <x-error_layout name="email"/>

            </table> --}}

            <div class="container" style="padding: 50px;background-color:#222235;width: 450px;color: aliceblue">
                <div class="" style="display: flex;">
                    <div class="" style="margin-right: 100px;padding-top: 10px">Name</div>
                    <div class="">
                        <input type="text" name="name" id="" value="{{$user->name}}" required ><br>
                        <small><x-error_layout name="name"/></small>
                    </div>
                </div><br>

                <div class="" style="display: flex;">
                    <div class="" style="margin-right: 60px;padding-top: 10px">User Name</div>
                    <div class="">
                        <input type="text" name="username" id="" value="{{$user->username}}" required><br>
                        <small><x-error_layout name="username"/></small>
                    </div>
                </div><br>

                <div class="" style="display: flex;">
                    <div class="" style="margin-right: 100px;padding-top: 10px">Email</div>
                    <div class="">
                        <input type="text" name="email" id="" value="{{$user->email}}" required><br>
                        <small><x-error_layout name="email"/></small>
                    </div>
                </div><br>
                <button type="submit" style="margin-left: 60%;padding: 10px;background-color: yellow;border-radius: 20px" >Update</button>
            </div>
            
        </form>
        
   </div>
</x-admin_layout>
