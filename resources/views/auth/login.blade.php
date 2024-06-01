<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk Akun</title>
    <link rel="icon" href="{{asset('/assets/logo/logomark.png')}}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="flex items-center justify-center min-h-screen">
        <div class="flex justify-between size-full">
            <div class="flex flex-col p-10 lg:p-20 gap-10 items-center lg:items-start justify-center w-full">
                <img class="h-16" src="{{asset('/assets/logo/logo.svg')}}" alt="Kopsyah Logo">

                <h1 class="text-2xl font-bold text-gray-900">Masuk</h1>
                <form class="w-full" action="{{route('login')}}" method="POST">
                    @csrf
                    
                    <div class="flex flex-col gap-4">
                        <div>
                            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-700">Nomor Anggota</label>
                            <input name="user_id" type="number" id="user_id" class="bg-gray-50 border border-gray-500 text-gray-900 placeholder-gray-700 text-sm rounded-lg focus:ring-primary-500 focus:border-gray-500 block w-full p-2.5" placeholder="1234567">
                            
                            @error('user_id')
                                <p class="mt-2 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                            <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-500 text-gray-900 placeholder-gray-700 text-sm rounded-lg focus:ring-primary-500 focus:border-gray-500 block w-full p-2.5" placeholder="Password...">
                            
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>

                        <button class="bg-primary-900 p-2 text-gray-50 rounded-lg hover:bg-primary-500 focus:bg-primary-900  transition duration-200" type="submit">Masuk</button>
                    </div>
                </form> 

                <a href="" class="text-primary-900">Lupa password?</a>
            </div>

            <div class="w-auto min-w-fit h-screen shrink justify-end lg:flex hidden">
                <img class="h-full w-auto" src="{{asset('/assets/images/login.png')}}" alt="">
            </div>
        </div>
    </div>
</body>
</html>