<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen IWM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section id="jumbotron" class="pt-2 pb-12">
        <x-banner image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png">
            @slot('title')
                Struktur Manajemen
            @endslot
            @slot('body')
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos nemo autem eaque optio! Lorem, ipsum
                dolor sit amet consectetur adipisicing elit. Dolores repellendus doloribus repudiandae.
            @endslot
        </x-banner>
    </section>

    <hr class="h-px mx-12 bg-gray-700 border-0">

    <section id="struktur" class="py-20">
        <div class="flex flex-wrap mb-20 md:mb-32">
            <div class="w-full px-4 space-y-5 items-center">
                <h4 class="text-center md:text-lg text-gray-700 font-medium tracking-widest">Struktur</h4>
                <h2 class="text-center text-4xl md:2/5 lg:w-3/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-5xl lg:text-6xl">
                    Manajemen <span class="text-primary-800">Koperasi Syariah</span> IWM GR
                </h2>
                <hr class="h-1 w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>

        <div class="container">
            <div class="w-full">
                <div class="grid grid-cols-2 md:grid-cols-3 md:gap-8 gap-4">
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900">Bonnie Green</h5>
                            <span class="text-sm text-center text-gray-500">Visual Designer</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-center text-gray-500 dark:text-gray-400">Visual Designer</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="h-px mx-12 bg-gray-700 border-0">

    <footer>
        <x-footer/>
    </footer>


</body>

</html>
