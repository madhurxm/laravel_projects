<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container m-5 p-5 center">
        <h1>Register</h1>

        <form action="{{ url('/') }}/customer" method="POST">
            @csrf
            @php
                
            @endphp

            <x-input type="text" name="name" label="Enter Name"/>
            <x-input type="text" name="email" label="Enter email"/>
            <x-input type="text" name="address" label="Enter Address"/>
            {{-- <x-input type="text" name="email" label="Gender"/> --}}
            <x-input type="password" name="password" label="Enter Password"/>
            <x-input type="password" name="confirm_pass" label="Confirm Password"/>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
