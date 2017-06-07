<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <script> src="main.js"</script>
    <script> src="js/bootstrp-datapicker.js"</script>
    <script>
        $ (function(){
            $('.datepicker').datepicker();
        });
    </script>
    </head>
<body>
<div class="well">
<br><button type="submit" class="btn btn-xs btn-danger">ปฏิทิน</button></br>
<input class="datepicker" type="text" name="date">
</div>
</body>
