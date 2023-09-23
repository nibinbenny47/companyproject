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

    <h1>Company registration</h1>
    <form action="/newCompanies" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{old('email')}}"></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" name="website" value="{{old('website')}}"></td>
            </tr>

            <tr>
                <td>
                    <button>Register</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>