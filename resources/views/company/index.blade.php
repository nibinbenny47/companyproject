<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Company details</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Website</td>
        </tr>
        @foreach($company as $company)
        <tr>
            <td>{{$company->name}}</td>
            <td>{{$company->email}}</td>
            <td>{{$company->website}}</td>
            <td><a href="/editCompanies/{{$company->id}}">Edit</a></td>
            <td><a href="/deleteCompanies/{{$company->id}}">Delete</a></td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>