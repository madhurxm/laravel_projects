<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
    <a href="{{ route('excel_export') }}">Download Excel</a>
    <a href="{{ url("/excel-import") }}">Import Excel</a>
    <a href="{{ url("/plan-excel") }}">Download Plan-wise Excel</a>


</body>
</html>