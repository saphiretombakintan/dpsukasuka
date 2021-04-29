@extends('layouts.admin')


@section('content')
<html>
<head><title>Result of Service City Search</title></head>
<body>
@foreach ($konsumen as $Konsumen)
 {{$Konsumen->costumer}}
 @endforeach
</body></html>


@endsection