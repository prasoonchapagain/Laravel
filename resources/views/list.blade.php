<html>
<head>
<body>
<a href="{{url('/create')}}"><button>Create</button></body></a>
<table>
     <tr>
          <tb>Name</tb>
         <tb>Address</tb>
         <tb>Age</tb>
         <tb>Image</tb>
     </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->Name}}</td>
        <td>{{$student->Address}}</td>
        <td>{{$student->Age}}</td>
        <td><img src="{{asset('storage/image/'.$student->image)}}"></td>
        <td><a href="{{url('/edit/'.$student->id)}}">Edit</a></td>
    </tr>
    @endforeach
</table>
</body>
</head>
</html>
