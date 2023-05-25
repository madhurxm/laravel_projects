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
                <form action="{{ url('/') }}" method="POST">
                    @csrf

                    <div class="row justify-content-center md-3">

                        <div class="custom-select col-2" style="width:200px;">
                            <select class="form-select form-select-sm mb-3" name="empcode">
                                <option @if( (session()->has('view-select') && session('view-select') == 'empcode') && (session()->has('view-empcode') && session('view-empcode') == 'nothing') ) selected @endif value="nothing">Select Employee Code</option>
                                @foreach ($select_empcodes as $empcodes)
                                    {{--  {{ $empcodes }}  --}}
                                    <option @if( (session()->has('view-select') && session('view-select') == 'empcode') && (session()->has('view-empcode') && session('view-empcode') == $empcodes->empcode) ) selected @endif value="{{ $empcodes->empcode }}">
                                        {{ $empcodes->empcode }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="custom-select col-2" style="width:200px;">
                            <select class="form-select form-select-sm mb-3" name="gender">
                                <option selected @if (session()->has('view-select') &&
                                        session('view-select') == 'gender' &&
                                        (session()->has('view-gender') && session('view-gender') == 'nothing')) selected @endif
                                    value="nothing">Select Gender</option>
                                <option @if (session()->has('view-select') &&
                                        session('view-select') == 'gender' &&
                                        (session()->has('view-gender') && session('view-gender') == 'Male')) selected @endif
                                    value="Male">Male</option>
                                <option @if (session()->has('view-select') &&
                                        session('view-select') == 'gender' &&
                                        (session()->has('view-gender') && session('view-gender') == 'Female')) selected @endif
                                    value="Female">Female</option>
                            </select>
                        </div>
                        <div class="custom-select col-2" style="width:200px;">
                            <select class="form-select form-select-sm mb-3" name="dept">
                                <option @if (session()->has('view-select') &&
                                        session('view-select') == 'dept' &&
                                        (session()->has('view-dept') && session('view-dept') == 'nothing')) selected @endif
                                    value="nothing ">Select Department
                                </option>
                                @foreach ($select_depts as $depts)
                                    {{--  {{ $empcodes }}  --}}
                                    <option @if (session()->has('view-select') &&
                                            session('view-select') == 'dept' &&
                                            (session()->has('view-dept') && session('view-dept') == $depts->dept)) selected @endif
                                        value="{{ $depts->dept }}">
                                        {{ $depts->dept }} </option>
                                @endforeach
                            </select>
                        </div>
                        
                            {{ session()->forget(['view-select', 'view-dept','view-gender','view-empcode']) }}
                            
                        



                    </div>
                    <button name="search" id="" class="btn btn-success btn-sm"
                        href="" role="" type="submit">Search
                    </button>
                    <a name="" id="" class="btn btn-success btn-sm"
                        href="/reset" type="reset" role="submit">Reset
                    </a>
                    <button name="pdf" id="" class="btn btn-primary btn-sm"
                        type="submit" role="button">PDF</button>
                    <button name="excel" id="" class="btn btn-primary btn-sm"
                        type="submit" role="button">Excel</button>
                </form>

            </div>
        </div>
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
        <div class="row m-5">
            {{ $all_employees->links() }}
        </div>

    </div>

</body>

</html>
