<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
 @include("admin.admincss");
</head>
<body>
    <div class="container-scroller">
@include("admin.navbar");

<div style="position: relative; top: 60px; right: -150px ">

    <form action="{{url('/update',$data->id)}}" method="post" enctype="Multipart/form-data">
    
    @csrf
    
    <div>
      <label for="fname">Food Name:</label>
      <input style="color:blue;" type="text" id="title" name="title" value="{{ $data->title }}" required>
    </div>
    
    <div>
      <label for="fname">Price:</label>
      <input style="color:blue;" type="num" id="price" name="price" value="{{ $data->price }}" required>
      </div>
    
    <div> 
      <label for="fname">Old Image:</label>
      <img height="200" width="200" src="/foodimage/{{ $data->image }}">
    </div>

    <div> 
        <label for="fname">New Image:</label>
        <input style="color:blue;" type="file" id="image" name="image">
      </div>
    
    <div>
      <label for="fname">Description:</label>
      <input style="color:blue;" type="text" id="description" name="description" value="{{ $data->description }}" required>
    </div>
      
    <div>
    
    <input style="color: black" type="submit" value="Save">
    
    </div>
      
    </form>
</div>
    </div>

@include("admin.adminscript");
</body>
</html>