
<html>
<head>
    <title>Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'update'])}}" enctype="multipart/form-data">
    @csrf
    <input type = "hidden" name = "id" value="{{$student->id}}">
    <label> Name:</label>
    <input type ="text" name="name" value="{{$student->Name}}" required>
    <label> Address:</label>
    <input type ="text" name="address" value = "{{$student->Address}}"required>
    <label> Age:</label>
    <input type ="number" name="age" value = "{{$student->Age}}"required>
    <input type ="submit">
</form>
