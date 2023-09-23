<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee details</h1>
    <table>
        <tr>
            <td>First name</td>
            <td>Last name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Company</td>
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