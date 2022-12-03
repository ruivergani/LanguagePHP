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
            <div class="col-md-10 col-md-offset-6 mt-5">
                <h4>Welcome to your Dashboard {{$data->username}}!!!</h4>
                <hr>
                <table class="table">
                    <thead>
                        <th>Username</th>
                        <th>E-mail</th>
                        <th>URL</th>
                        <th>Date of Birth</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$data->username}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->url}}</td>
                            <td>{{$data->dob}}</td>
                            <td><a href="logout">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
