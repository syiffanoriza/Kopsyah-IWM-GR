<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    <div class="m-10">
        <x-accordion title="Halo Teman" valuea="Flowbite is an open-source library of interactive components built on top
        of Tailwind CSS including buttons, dropdowns, modals, navbars, and more." valueb="Flowbite is an open-source library of interactive components built on top
        of Tailwind CSS including buttons, dropdowns, modals, navbars, and more."/>
    </div>
    <x-footer/>
</body>
</html>