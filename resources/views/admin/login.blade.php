<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk Dasbor Admin</title>
    <link rel="icon" href="{{asset('/assets/logo/logomark.png')}}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="flex items-center justify-center min-h-screen">
        <div class="flex justify-between size-full">
            <div class="flex flex-col p-10 lg:p-20 gap-10 items-center lg:items-start justify-center w-full">
                <img class=" h-16" src="{{asset('/assets/logo/logo.svg')}}" alt="Kopsyah Logo">

                <h1 class="text-2xl font-bold text-gray-900">Masuk Sebagai Admin</h1>
                <form class="w-full xl:w-2/3" action="">
                    <div class="flex flex-col gap-4">
                        <label for="admin-password">Password</label>
                        <input class="border-primary-900 border rounded-lg bg-gray-50 focus:ring-0 focus:border-primary-500" id="admin-password" type="password">
                        <button class="bg-primary-900 p-2 text-gray-50 rounded-lg hover:bg-primary-500 focus:bg-primary-900  transition duration-200" type="submit">Masuk</button>
                    </div>
                </form> 

                <a href="" class="text-primary-900">Lupa password?</a>
            </div>

            <div class="w-auto min-w-fit h-screen shrink justify-end xl:flex hidden">
                <img class="h-full w-auto" src="{{asset('/assets/images/login.png')}}" alt="">
            </div>
        </div>
    </div>
</body>
</html>