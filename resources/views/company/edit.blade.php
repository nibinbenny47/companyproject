<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Company</h1>
    <form action="update" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{$company->name}}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{$company->email}}"></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" name="website" value="{{$company->website}}"></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="{{$company->id}}">
                </td>
                <td>
                    <Button type="submit">Update</Button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>