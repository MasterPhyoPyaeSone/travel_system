<x-admin_layout>
  
    @props(['room'=>null,'type','hotels'])
    
    
    <div class="container">
      <h1 style="color: aliceblue;text-align: center">Room {{$type ==='create' ? "create" : "update"}}</h1>
    
      <form action="{{$type==='create' ? '/admin/roomStore' : '/admin/rooms/'.$room->id.'/update'}}" id="survey-form" method="POST" style="margin-right: 100px" enctype="multipart/form-data">
        @csrf
        <div class="container" style="display: flex;background-color:#222235;width: 1000px;color: aliceblue;width: 1000px">
    
          <div class="clo1" style="width: 600px">
            <div class="labels" style="padding: 10px">
              <label id="name-label" for="name" >Room Type</label>
            </div>
            <div class="input-tab">
                <select id="dropdown" name="room_type">
                  <option >Select a room_type</option>
                  <option value="The Deluxe Room" {{$type !=="create" ? $room->room_type === "The Deluxe Room" ? "selected" : '' :''}}>The Deluxe Room</option>  
                  <option value="The Standard Room" {{$type !=="create" ? $room->room_type === "The Standard Room" ? "selected" : '' :''}}>The Standard Room</option>  
                  {{-- <option value="Triple_room" {{$type !=="create" ? $room->room_type === "Triple_room" ? "selected" : '' :''}}>Triple room</option>   --}}
                </select>
              </div>
           
        
            <div class="labels" style="padding: 10px">
              <label >Intro</label>
            </div>
            <div class="input-tab">
              <input class="input-field"
               type="text" 
               value="{{old('intro',$room?->intro)}}"
               name="intro" placeholder="Enter intro" required>
            </div>
        
            <div class="labels" style="padding: 10px">
              <label id="number-label" for="number">Body</label>
            </div>
            <div class="input-tab">
              <textarea class="input-field" name="body" id="" cols="30" rows="5">{{ old('body',$room?->body)}}</textarea>
            </div>
         
            <div class="labels">
              <label for="dropdown">Hotel_name</label>
            </div>
            <div class="input-tab">
              <select id="dropdown" name="hotel_id">
                <option disabled value selected>Select a Hotel</option>
                @foreach ($hotels as $hotel)
                <option value="{{$hotel->id}}" {{$type !== "create" ? $hotel->id===$room->hotel->id ? "selected" : '' : ''}}>{{$hotel->name}}</option>  
                @endforeach 
              </select>
            </div>
            <div class="labels" style="padding: 10px">
              <label id="number-label" for="number">Price</label>
            </div>
            <div class="input-tab">
              <input class="input-field"
               type="text" 
               value="{{old('price',$room?->price)}}"
               name="price" placeholder="Enter price" required>
            </div>
         
             {{-- img1 --}}
             <div class="labels" style="padding: 10px">
              <label id="number-label" for="number">Image_1</label>
            </div>
            <div class="input-tab" >
              <input class="input-field" 
               type="file" 
               name="img_1" {{$type==="create" ? "required" : ""}} style="color: #222235">
               @if ($type!=="create")
                <img src="{{$room?->img_1}}" alt="" width="100px" height="100px" style="margin: 10px">                  
               @endif
             
            
            </div>
             {{-- img2 --}}
             <div class="labels" style="padding: 10px">
                <label id="number-label" for="number">Image_2</label>
              </div>
              <div class="input-tab" >
                <input class="input-field" 
                 type="file" 
                 name="img_2" {{$type==="create" ? "required" : ""}} style="color: #222235">
                 @if ($type!=="create")
                 <img src="{{$room?->img_2}}" alt="" width="100px" height="100px" style="margin: 10px">                  
                 @endif
                 {{-- <img src="{{$room?->img_2}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
              </div>
          </div>
    
    
          <div class="clo2" style="width: 600px">
           
            {{-- img3 --}}
            <div class="labels" style="padding: 10px">
              <label id="number-label" for="number">Image_3</label>
            </div>
            <div class="input-tab" >
              <input class="input-field" 
               type="file" 
               name="img_3" {{$type==="create" ? "required" : ""}} style="color: #222235">
               @if ($type!=="create")
               <img src="{{$room?->img_3}}" alt="" width="100px" height="100px" style="margin: 10px">                  
              @endif
               {{-- <img src="{{$room?->img_3}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
            </div>
             {{-- img4 --}}
             <div class="labels" style="padding: 10px">
              <label id="number-label" for="number">Image_4</label>
            </div>
            <div class="input-tab" >
              <input class="input-field" 
               type="file" 
               name="img_4" {{$type==="create" ? "required" : ""}} style="color: #222235">
               @if ($type!=="create")
               <img src="{{$room?->img_4}}" alt="" width="100px" height="100px" style="margin: 10px">                  
              @endif
               {{-- <img src="{{$room?->img_4}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
            </div>
             {{-- img5--}}
             <div class="labels" style="padding: 10px">
              <label id="number-label" for="number">Image_5</label>
            </div>
            <div class="input-tab" >
              <input class="input-field" 
               type="file" 
               name="img_5" {{$type==="create" ? "required" : ""}} style="color: #222235">
               @if ($type!=="create")
               <img src="{{$room?->img_5}}" alt="" width="100px" height="100px" style="margin: 10px">                  
              @endif
               {{-- <img src="{{$room?->img_5}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
            </div>
            
          </div>
        </div>
        
        <div class="btn">
          <button id="submit" type="submit">{{$type==='create' ? "Submit" : "Update"}}</button>
        </div>
    {{-- 
        <div class="labels">
          <label>How much do you like South Park?</label>
        </div>
        <div class="input-tab">
          <input type="radio" name="radio-button" value="love">I love it!<br>
          <input type="radio" name="radio-button" value="like">I like it<br>
          <input type="radio" name="radio-button" value="ok">It's ok<br>
          <input type="radio" name="radio-button" value="nah">Not really<br>
        </div>
    
        <div class="labels">
          <label for="dropdown">How many seasons of South Park have you watched?</label>
        </div>
        <div class="input-tab">
          <select id="dropdown" name="seasons">
            <option disabled value selected>Select an option</option>
            <option value="<=5">0-5</option>
            <option value="<=10">6-10</option>
            <option value="<=15">10-15</option>
            <option value="<=21">15-21</option>
          </select>
        </div>
    
        <div class="labels">
          <label>Who do you watch South Park with?<br>(Check all that apply):</label>
        </div>
        <div class="input-tab">
          <input type="checkbox" name="alone" value="alone">Alone<br>
          <input type="checkbox" name="friends" value="fr">Friends<br>
          <input type="checkbox" name="family" value="fam">Family<br>
          <input type="checkbox" name="partner" value="fam">Partner<br>
          <input type="checkbox" name="other" value="other">Other<br>
        </div>
    
        <div class="labels">
          <label for="comments">Tell us more about your favorite character(s) or episode(s)</label>
        </div>
        <div class="input-tab">
          <textarea class="input-field" id="comments" name="comments" rows="10" cols="40" placeholder="Your comments..."></textarea>
        </div> --}}
    
    
      </form>
    </div>
    </x-admin_layout>