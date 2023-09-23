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

    <h1>Employee registration</h1>
    <form action="/newEmployees" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Firstname</td>
                <td><input type="text" name="firstname" placeholder="enter first name" value="{{old('firstname')}}"></td>
                <td><span style="color:red">@error('firstname'){{$message}}@enderror</span></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" name="lastname" placeholder="enter last name" value="{{old('lastname')}}"></td>
                <td><span style="color:red">@error('lastname'){{$message}}@enderror</span></td>

            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" placeholder="enter email" name="email" value="{{old('email')}}"></td>
                <td><span style="color:red">@error('email'){{$message}}@enderror</span></td>

            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" placeholder="enter phone" minlength="10" maxlength="10" name="phone" value="{{old('phone')}}"></td>
                <td><span style="color:red">@error('phone'){{$message}}@enderror</span></td>

            </tr>
            <tr>
                <td>Company</td>
                <td>
                    <select name="company_id" id="company_id">
                        <option value="">Select a Company</option>
                        @foreach($company as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </td>

            </tr>
            <tr>


            <tr>
                <td>
                    <button>Register</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>