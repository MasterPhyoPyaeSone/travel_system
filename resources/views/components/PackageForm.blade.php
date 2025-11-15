<x-admin_layout>
  
@props(['package'=>null,'type','categories'])


<div class="container">
  <h1 style="color: aliceblue;text-align: center">Package {{$type ==='create' ? "create" : "update"}}</h1>

  <form action="{{$type==='create' ? '/admin/packageStore' : '/admin/'.$package->id.'/update'}}" id="survey-form" method="POST" style="margin-right: 100px" enctype="multipart/form-data">
    @csrf
    <div class="container" style="display: flex;background-color:#222235;width: 1000px;color: aliceblue">

      <div class="clo1" style="width: 600px">
        <div class="labels" style="padding: 10px">
          <label id="name-label" for="name" >Title</label>
        </div>
        <div class="input-tab">
          <input class="input-field" type="text" id="name" 
          name="title" 
          value="{{old('tilte',$package?->title)}}"
          placeholder="Enter your title" required autofocus>
        </div>
    
        <div class="labels" style="padding: 10px">
          <label >Intro</label>
        </div>
        <div class="input-tab">
          <input class="input-field"
           type="text" 
           value="{{old('intro',$package?->intro)}}"
           name="intro" placeholder="Enter intro" required>
        </div>
    
        <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Body</label>
        </div>
        <div class="input-tab">
          <textarea class="input-field" name="body" id="" cols="30" rows="5">{{ old('body',$package?->body)}}</textarea>
        </div>
     
        <div class="labels">
          <label for="dropdown">Category_Type</label>
        </div>
        
        <div class="input-tab">
          <select id="dropdown" name="category_id" required>
            <option >Select a category</option>
            @foreach ($categories as $category)
            <option  {{$type !=="create" ? $category->id === $package->category->id ? 'selected' : "" : ""}} value="{{$category->id}}">{{$category->name}}</option>  
            @endforeach 
          </select>
        </div>
        <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Price</label>
        </div>
        <div class="input-tab">
          <input class="input-field"
           type="text" 
           value="{{old('price',$package?->price)}}"
           name="price" placeholder="Enter price" required>
        </div>
        <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Date</label>
        </div>
        <div class="input-tab">
          <input class="input-field"
           type="text" 
           value="{{old('date',$package?->date)}}"
           name="date" placeholder="Enter date" required>
        </div>
        <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Duration_Time</label>
        </div>
        <div class="input-tab">
          <input class="input-field"
           type="text" 
           value="{{old('long_time',$package?->long_time)}}"
           name="long_time" placeholder="Enter long_time" required>
        </div>
    
        <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Place</label>
        </div>
        <div class="input-tab">
          <input class="input-field"
           type="text" 
           value="{{old('place',$package?->place)}}"
           name="place" placeholder="Enter place" required>
        </div> 
        
         {{-- img1 --}}
         <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Image_1</label>
        </div>
        <div class="input-tab" >
          <input class="input-field" 
           type="file" 
           name="img_1" {{$type==="create" ? "required" : ""}}>
           @if ($type!=="create")
                <img src="{{$package?->img_1}}" alt="" width="100px" height="100px" style="margin: 10px">                  
           @endif
        </div>
      </div>


      <div class="clo2" style="width: 600px">
        {{-- img2 --}}
        <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Image_2</label>
        </div>
        <div class="input-tab" >
          <input class="input-field" 
           type="file" 
           name="img_2" {{$type==="create" ? "required" : ""}}>
           {{-- <img src="{{$package?->img_2}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
           @if ($type!=="create")
                <img src="{{$package?->img_2}}" alt="" width="100px" height="100px" style="margin: 10px">                  
           @endif
        </div>
        {{-- img3 --}}
        <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Image_3</label>
        </div>
        <div class="input-tab" >
          <input class="input-field" 
           type="file" 
           name="img_3" {{$type==="create" ? "required" : ""}}>
           {{-- <img src="{{$package?->img_3}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
           @if ($type!=="create")
                <img src="{{$package?->img_3}}" alt="" width="100px" height="100px" style="margin: 10px">                  
           @endif
        </div>
         {{-- img4 --}}
         <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Image_4</label>
        </div>
        <div class="input-tab" >
          <input class="input-field" 
           type="file" 
           name="img_4" {{$type==="create" ? "required" : ""}}>
           {{-- <img src="{{$package?->img_4}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
           @if ($type!=="create")
                <img src="{{$package?->img_4}}" alt="" width="100px" height="100px" style="margin: 10px">                  
           @endif
        </div>
         {{-- img5--}}
         <div class="labels" style="padding: 10px">
          <label id="number-label" for="number">Image_5</label>
        </div>
        <div class="input-tab" >
          <input class="input-field" 
           type="file" 
           name="img_5" {{$type==="create" ? "required" : ""}}>
           {{-- <img src="{{$package?->img_5}}" alt="" width="100px" height="100px" style="margin: 10px"> --}}
           @if ($type!=="create")
                <img src="{{$package?->img_5}}" alt="" width="100px" height="100px" style="margin: 10px">                  
           @endif
        </div>
        
      </div>
    </div>
    
    <div class="btn">
      <button id="submit" type="submit">{{$type ==='create' ? "Create" : "Update"}}</button>
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