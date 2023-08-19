<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .addbtn{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6"><h1>Students' Details</h1></div>
            <div class="col-6"><a href="{{route('add.student')}}" class="btn btn-success px-5 addbtn">Add Student</a></div>
        </div>
        <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>DOB</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{\Carbon\Carbon::parse($student->dob)->format('Y-m-d')}}</td>
                @if($student->status == 1)
                <td>Active</td>
                @else
                <td>Inactive</td>
                @endif
                <td>
                    <a href="{{route('edit.student', ['id'=>$student->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('delete.student', ['id'=>$student->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>