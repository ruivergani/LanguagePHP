<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    <!-- CSS Bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/app.css" type="text/css">
    <style>
        label{
            width: 100%;
            max-width: 150px;
            font-weight: bold;
        }
        input{
            width:100%;
            max-width: 200px;
        }
        .form-control{
            display: inline !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 mt-5">
                <!-- Form from Staffordshire University -->
                <h4>Registration Form</h4>
                <hr>
                <form method="post" action="{{route('register-user')}}">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <fieldset>
                        <div class="mt-3 form-group">
                            <label for="username">Username:</label>
                            <input type="text" required name="username" id="username" class="form-control" placeholder="Enter username" value="{{old('username')}}">
                            <br>
                            <span class="text-danger">@error('username') {{$message}} @enderror</span>
                        </div>
                        <div class="mt-3 form-group">
                            <label for="password">Password:</label>
                            <input type="password" required name="password" id="password" class="form-control" placeholder="Enter password" value="{{old('password')}}">
                            <br>
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="mt-3 form-group">
                            <label for="email">Email:</label>
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Enter e-mail" value="{{old('email')}}">
                            <br>
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="mt-3 form-group">
                            <label for="url">Webpage URL:</label>
                            <input type="url" name="url" id="url" class="form-control" placeholder="Enter webpage" value="{{old('url')}}">
                            <br>
                            <span class="text-danger">@error('url') {{$message}} @enderror</span>
                        </div>
                        <div class="mt-3 form-group">
                            <label for="dob">Date of birth:</label>
                            <input type="date" required name="dob" id="dob" class="form-control" value="{{old('dob')}}">
                            <br>
                            <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                        </div>
                    </fieldset>
                    <div class="mt-3">
                        <button class="btn btn-block btn-primary" type="submit" name="submit" formnovalidate>Register Details</button>
                    </div>
                    <br>
                    <hr>
                    <a href="login">Already Registered User | Login Here</a>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
