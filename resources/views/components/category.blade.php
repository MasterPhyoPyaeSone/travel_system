{{-- <div>
    <div class="" style="display: flex;align-items: center;justify-content: space-evenly">
        @foreach ($categories as $category)
            <button type="submit" class="btn" style="margin-bottom:5%;"><a href="/hotelAll?category={{ $category->id }}">{{ $category->name }}</a></button>
        @endforeach        
    </div>
</div> --}}

<div class="form-group">
    <div class="select-wrap one-third">
        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
       
    <select name="personal" id="personal" class="form-control" placeholder="Keyword search">
        <option value="">Travels Styles</option> 
        @foreach ($categories as $category)
        {{-- <option value="{{old('$category',$category->id)}}" >
            <a href="/?person={{ $category->name }}"
            >{{ $category->name }}</a>
        </option>  --}}
         <option value="{{$category->id}}" >
           {{ $category->name }}
        </option> 
       
        @endforeach                 
    </select> 
</div>
</div>


