<x-app-layout>
  
  </x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")

   <style>
     .center{
      margin-left: auto;
  margin-right: auto;
  margin-top: 60px;
     }
    
   </style>
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")

<div class="center" style="overflow-x:auto;">
<table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">

    <tr class="text-center font-bold">
        <th style="border px-6 py-4">Name</th>
        <th style="border px-6 py-4">Email</th>
        <th style="border px-6 py-4">Action</th>
    </tr>

    @foreach($data as $data)
    <tr align="center">
        <td class="border px-6 py-4">{{$data->name}}</td>
        <td class="border px-6 py-4">{{$data->email}}</td>

        @if($data->usertype=="0")
        <td class="border px-6 py-4"><a href="{{url('/deleteuser', $data->id)}}">delete</a></td>
        @else
        <td class="border px-6 py-4"><a >Not Allowed</a></td>
        @endif

    </tr>
    @endforeach

</table>
</div>


  </div>
  @include("admin.adminscript")

  </body>
</html>