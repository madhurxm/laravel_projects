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
    <title>Document1</title>
</head>

<body>
    <div class="container">
        <div class="row m-5">
            <div class="col">
                <form action="{{ url('/plan-excel') }}" method="GET"
                    enctype="multipart/form-data">
                    @csrf
                    

                    <div class="mb-3">
                        <select class="form-select" name="planname">
                            <option selected>Select Plan ID</option>
                            
                            @foreach ($all_plans as $plans)
                            <option value="{{ $plans->planname }}">{{ $plans->planname }}</option>                   
                            @endforeach
                            
 
                        </select>
                    </div>
                    <button type="submit" name="get_excel" id="" class="btn btn-success btn-sm"
                        href="" role="button">Download Excel
                    </button>

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
                            {{--  @if (isset($records))  --}}
                            {{--  @foreach ($records as $val)  --}}
                            <tr>
                                {{--  <td>{{ $val->first_name }}</td>
                                <td>{{ $val->last_name }}</td>
                                <td>{{ $val->gender }}</td>
                                <td>{{ $val->plan_id }}</td>
                                <td>{{ $val->country }}</td>
                                <td>{{ $val->username }}</td>
                                <td>{{ $val->password }}</td>  --}}
                            </tr>
                            {{--  @endforeach  --}}


                            {{--  @endif  --}}


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
