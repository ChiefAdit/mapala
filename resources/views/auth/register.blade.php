<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Login Form</title>
</head>

<body>
    <div class="box">
        <br><br><br><br><br><br>
        <div class="container">
            <center>
                <img src="../../assets/images/Logo_ag-removebg-preview.png" width="80px" class="logo">
                <h3>Login</h3>
            </center>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label>Email address<label style="margin-left: auto; color:red"> *</label><br>
                    <input type="email" name="email" id="email">
                    <label>Password<label style="margin-left: auto; color:red"> *</label><br>
                        <input type="password" name="password" id="password">
                        <label for="password_confirmation">Password Confirmation:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation">   
                        <center>
                            <button type="submit">Register</button>
                        </center>
            </form>
        </div>
    </div>
</body>

</html>
