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
                <td><input type="text" name="name" placeholder="enter name" value="{{old('name')}}"></td>
                <td><span style="color:red">@error('name'){{$message}}@enderror</span></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="enter email" value="{{old('email')}}"></td>
                <td><span style="color:red">@error('email'){{$message}}@enderror</span></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" name="website" placeholder="enter website" value="{{old('website')}}"></td>
                <td><span style="color:red">@error('website'){{$message}}@enderror</span></td>
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