<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('header')
    <h1>Employee details</h1>
    <table class="table">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Company</th>
            <th>Actions</th>
        </tr>
        @foreach($employee as $employee)
        <tr>
            <td>{{$employee->firstname}}</td>
            <td>{{$employee->lastname}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->company->name}}</td>
            <td><a href="/editEmployees/{{$employee->id}}">Edit</a></td>
            <td><a href="/deleteEmployees/{{$employee->id}}">Delete</a></td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>