<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .submitbtn{
            margin-top: 10px;
        }

        .form{
            padding: 100px 250px 0px 250px;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="{{route('create.student')}}" method="post" class="form">
        {{csrf_field()}}
        <label for="name">Name <span class="text-danger">*</span></label>
        <input name="name" type="text" placeholder="Enter your name..." class="form-control" required><br>
        <label for="age">Age <span class="text-danger">*</span></label>
        <input name="age" type="number" placeholder="Select your age..." class="form-control" required><br>
        <label for="dob">Date of Birth <span class="text-danger">*</span></label>
        <input name="dob" type="date" placeholder="Select your DOB..." class="form-control" required><br>
        Status<br>
        <select name="status" id="" class="custom-select">
            <option value="0">Inactive</option>
            <option value="1">Active</option>
        </select><br>
        <button type="submit" class="btn btn-success submitbtn" >Submit</button>
    </form>
    </div>
</body>
</html>