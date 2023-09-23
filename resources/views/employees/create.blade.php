<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Employee registration</h1>
    <form action="/newEmployees" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Firstname</td>
                <td><input type="text" name="firstname" value="{{old('firstname')}}"></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" name="lastname" value="{{old('lastname')}}"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{old('email')}}"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="{{old('phone')}}"></td>
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