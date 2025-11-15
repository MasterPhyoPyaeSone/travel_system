@props(['name'])

@error($name)
<p class="text-danger" style="color: red"> {{$message}}</p>
@enderror