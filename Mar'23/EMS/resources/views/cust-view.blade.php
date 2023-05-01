<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <pre>
    {{-- {{ print_r($customers) }} --}}
    </pre>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $val)
                        <tr class="">
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>{{ $val->address }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <a name="" id="" class="btn btn-primary" href="{{ '/register' }}"
        role="button">FORM Page</a>
    <a href="{{ route('customer.create') }}">
        <button type="button" class="btn btn-primary">Button</button>
    </a>
</body>

</html>
