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
    <h1>delete Employees</h1>
    <form action="/destroy/{{$employee->id}}" method="post">
        @csrf
        <table>
            <tr>
                <td>
                    First name:
                </td>
                <td><input type="text" name="firstname" value="{{$employee->firstname}}"></td>
            </tr>
            <tr>
                <td>
                    Last name:
                </td>
                <td><input type="text" name="lastname" value="{{$employee->lastname}}"></td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td><input type="text" name="email" value="{{$employee->email}}"></td>
            </tr>
            <tr>
                <td>
                    Phone:
                </td>
                <td><input type="text" name="phone" value="{{$employee->phone}}"></td>
            </tr>
            <tr>
                <td>
                    Company:
                </td>
                <td><input type="text" name="company_id" value="{{$employee->company->name}}"></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="{{$employee->id}}">
                </td>
                <td>
                    <button type="submit">Delete</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>