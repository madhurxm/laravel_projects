<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row m-5">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">EmpCode</th>
                                <th scope="col">Department</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($all_employees))
                                @foreach ($all_employees as $val)
                                    <tr>
                                        <td>{{ $val->name }}</td>
                                        <td>{{ $val->email }}</td>
                                        <td>{{ $val->empcode }}</td>
                                        <td>{{ $val->dept }}</td>
                                        <td>{{ $val->salary }}</td>
                                        <td>{{ $val->gender }}</td>
                                        <td>{{ $val->address }}</td>
                                    </tr>
                                @endforeach


                            @endif


                        </tbody>
                    </table>


                </div>
            </div>

        </div>
        

    </div>

</body>

</html>
