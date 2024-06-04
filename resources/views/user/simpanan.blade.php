<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset('/assets/logo/logomark.png') }}">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 h-screen">
    
    @include('components.navigation.sidebar', ['active' => 'Simpanan'])
    <div class="ml-64 h-full">
        @include('maintenance')
    </div>
</body>
</html>