<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png/ico" href="/assets/favicon.ico" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
    <!-- <link rel="stylesheet" href="{{url('/fonts/chequeFont.css')}}"> -->
    <title>VAJM</title>
</head>
<body>
<div id="app">

</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>