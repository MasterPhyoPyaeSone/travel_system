<x-admin_layout>
    {{-- <p>{{$email}}</p> --}}
    {{-- <p>{{$mail->name}}</p> --}}
   
        {{-- @dd($mail->name) --}}
        
    
    <section>
        @foreach ($mail as $mail)
        <div class="" style="display: flex;margin-left: 22%;margin-top: 30px" >
            <div class="" style="background-color: rgb(249, 219, 21);padding: 30px">
                <div class="" style="display: flex">
                {{-- <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#c2c2c2" d="M215.4 96H144 107.8 96v8.8V144v40.4 89L.2 202.5c1.6-18.1 10.9-34.9 25.7-45.8L48 140.3V96c0-26.5 21.5-48 48-48h76.6l49.9-36.9C232.2 3.9 243.9 0 256 0s23.8 3.9 33.5 11L339.4 48H416c26.5 0 48 21.5 48 48v44.3l22.1 16.4c14.8 10.9 24.1 27.7 25.7 45.8L416 273.4v-89V144 104.8 96H404.2 368 296.6 215.4zM0 448V242.1L217.6 403.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L512 242.1V448v0c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v0zM176 160H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;height: 25px;margin-right: 10px;margin-bottom: 20px;margin-top: -5px;color: black" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#121212" d="M215.4 96H144 107.8 96v8.8V144v40.4 89L.2 202.5c1.6-18.1 10.9-34.9 25.7-45.8L48 140.3V96c0-26.5 21.5-48 48-48h76.6l49.9-36.9C232.2 3.9 243.9 0 256 0s23.8 3.9 33.5 11L339.4 48H416c26.5 0 48 21.5 48 48v44.3l22.1 16.4c14.8 10.9 24.1 27.7 25.7 45.8L416 273.4v-89V144 104.8 96H404.2 368 296.6 215.4zM0 448V242.1L217.6 403.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L512 242.1V448v0c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v0zM176 160H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>EMAIL FROM
                </div>
                 <h3>{{strtoupper($mail->name)}}</h3>
            </div>
            <div class="" style="width: 500px;background-color: rgb(244, 244, 245);padding: 50px">
                 <h2>{{$mail->email}}</h2><br>
                 <small>Messages</small><br>
                 {{-- <input type="text" name="" id="" value=""><br> --}}
                 <textarea name="" id="" cols="40" rows="3" style="padding: 20px;margin-bottom: 20px;border-radius: 20px">{{$mail->message}}</textarea><br>
                 {{-- <input type="text" name="mail" id="" style="> --}}
                <form action="/admin/{{$mail->email}}/sendmail" method="post">
                    @csrf
                    <textarea name="sendmailfromadmin" id="" cols="40" rows="3" style="padding: 20px;margin-left: 30px;border-radius: 20px" required></textarea><br>
                 <div class="" style="margin-left: 85%;margin-top: 15px;background: none"><button type="submit"><svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;height: 25px;" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg></button></div>
                </form>

            </div>
        </div>
        @endforeach

    </section>
    
</x-admin_layout>