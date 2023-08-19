<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update.student')}}" method="post">
        {{csrf_field()}}
        Name<br>
        <input name="name" type="text" value="{{$editStudent->name}}"><br>
        Age<br>
        <input name="age" type="number" value="{{$editStudent->age}}"><br>
        DOB<br>
        <input name="dob" type="date" value="{{\Carbon\Carbon::parse($editStudent->dob)->format('Y-m-d')}}"><br>
        Status<br>
        <select name="status" id="">
            
            <option value="0" {{ $editStudent->status==0 ? 'selected':''}}>Inactive</option>
            <option value="1" {{ $editStudent->status==1 ? 'selected':''}}>Active</option>
        </select><br>
        <input type="hidden" name="id" value="{{$editStudent->id}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>