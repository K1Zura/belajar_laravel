<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <title>Laravel 9 | Login</title>
</head>
<body>
    
    <style>
        .login-box {
            border: solid 1px;
            width: 500px;
            padding: 20px;
            box-sizing: border-box;
        }
    </style>
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        @if (Session::has('status'))
            <div class="alert alert-danger">
                <strong>WRONG!</strong><br>{{Session::get('message')}}
            </div>
	@endif
        <div class="login-box">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="Email">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" value="{{Session::get('email')}}" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

<!-- JS only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
</body>
</html>