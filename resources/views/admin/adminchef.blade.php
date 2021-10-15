<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
  <div class="container-scroller">
 @include("admin.admincss")
</head>
<body>
@include("admin.navbar")

<form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">

    @csrf
    <div>

        <label>Name</label>
        <input style="color: blue;" type="text" name="name" required="" placeholder="Enter Name"> 

    </div>

    <div>

        <label>Speciality</label>
        <input style="color: blue;" type="text" name="speciality" required="" placeholder="Enter Name"> 

    </div>

    <div>

        <input type="file" name="image" required="">

    </div>

    <input style="color: blue;" type="submit" value="Save">

</form>

<table bgcolor="black">

    <tr>

      <th style="padding: 30px;">Name</th>
      <th style="padding: 30px;">Speciality</th>
      <th style="padding: 30px;">Image</th>
      <th style="padding: 30px;">Action</th>

    </tr>

    @foreach ($data as $data)
    <tr align="center">

      <td>{{ $data->name }}</td>
      <td>{{ $data->speciality }}</td>
      <td><img height="100" width="100" src="/chefimage/{{ $data->image }}"></td>
      <td><a href="{{ url('/deletechef', $data->id) }}">Delete</a></td>
      <td><a href="{{ url('/updatechef', $data->id) }}">Update</a></td>

    </tr>
    @endforeach
    
</table>

@include("admin.adminscript")
</div>
</body>
</html>