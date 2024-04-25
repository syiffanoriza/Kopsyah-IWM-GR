<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    <x-banner image="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg">
        <x-slot name="title">
            KOPSYAH IWM GRAHARAYA
        </x-slot>
        <x-slot name="body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi facilis odit dolor corrupti similique ad cupiditate fugit aliquam deleniti fuga.
        </x-slot>
    </x-banner>
</body>
</html>