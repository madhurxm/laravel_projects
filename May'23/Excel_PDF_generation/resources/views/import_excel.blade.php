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
                <form action="{{ url('excel-import') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Excel</label>
                        <input class="form-control" name="file" type="file" id="formFile">
                    </div>
                    <a href="{{ route('excel_import') }}">
                        <button type="submit" class="btn btn-primary btn-sm">Upload
                            Excel</button>
                    </a>
                    <a name="" id="" class="btn btn-info btn-sm"
                        href="{{ URL::asset('assets/Sample_Excel.xlsx') }}" download
                        role="button">Sample Excel</a>
                    <a name="" id="" class="btn btn-success btn-sm"
                        href="{{ Route('excel_export') }}" role="button">Download All records
                        excel</a>

                </form>

            </div>
        </div>
        <div class="row m-5">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">first_name</th>
                                <th scope="col">last_name</th>
                                <th scope="col">gender</th>
                                <th scope="col">plan_id</th>
                                <th scope="col">country</th>
                                <th scope="col">username</th>
                                <th scope="col">password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($records))
                                @foreach ($records as $val)
                                    <tr>
                                        <td>{{ $val->first_name }}</td>
                                        <td>{{ $val->last_name }}</td>
                                        <td>{{ $val->gender }}</td>
                                        <td>{{ $val->plan_id }}</td>
                                        <td>{{ $val->country }}</td>
                                        <td>{{ $val->username }}</td>
                                        <td>{{ $val->password }}</td>
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
