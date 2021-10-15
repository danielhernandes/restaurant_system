<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
  <div class="container-scroller">
<base href="/public">
 @include("admin.admincss")
</head>
<body>
@include("admin.navbar")

<form action="{{ url('/updatefoodchef', $data->id) }}" method="Post" enctype="multipart/form-data">

    @csrf
    <div>

        <label>Name</label>
        <input style="color: blue;" type="text" name="name" required="" value="{{ $data->name }}" > 

    </div>

    <div>

        <label>Speciality</label>
        <input style="color: blue;" type="text" name="speciality" required="" value="{{ $data->speciality }}"> 

    </div>

    <div>

        <label>Old Image</label>
        <img height="200" width="200" src="/chefimage/{{ $data->image }}">

    </div>

    <div>

        <label>New Image</label>
        <input type="file" name="image">

    </div>

    <input style="color: blue;" type="submit" value="Update Chef">

</form>

@include("admin.adminscript")
</div>
</body>
</html>