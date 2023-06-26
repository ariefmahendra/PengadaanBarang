<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- tailwindcss --}}
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/chart_resume.js'])
    {{-- <style>
        * {
            border: 1px solid red;
        }
    </style> --}}
</head>

<body class="bg-[#EFEFEF]">
    <header class="bg-blue-300 h-20 rounded-b-3xl drop-shadow-xl fixed w-full top-0 left-0 z-50">
        <div class="flex justify-center items-center h-full">
            <img class="scale-75" src="img\logoItera.png" alt="Logo">
            <div>
                <div class="text-black text-sm font-montserrat font-bold">Pengadaan ITERA</div>
                <div class="text-black text-xl font-montserrat font-extrabold">Koordinator Pengadaan</div>
                <div class="text-black text-sm font-montserrat font-bold">10-Juni-2023</div>
            </div>
            <div class="flex-grow"></div>
            <ul class="flex justify-end items-center">
                <li class="rounded-lg mx-3 p-2 w-24 h-14 bg-white bg-opacity-80 hover:bg-white">
                    <a href="#"
                        class="text-black text-sm flex flex-col items-center font-montserrat font-regular">
                        <img src="img/dashboard.png" alt="Dashboard" class="h-6 mb-1">
                        Dashboard
                    </a>
                </li>
                <li class="relative rounded-lg mx-3 p-2 w-24 h-14 bg-white bg-opacity-80 hover:bg-white">
                    <a href="/resume"
                        class="text-black text-sm flex flex-col items-center font-montserrat font-regular">
                        <img src="img/resume.png" alt="Resume" class="h-6 mb-1">
                        Resume
                    </a>
                </li>
                <li class="relative rounded-lg mx-3 p-2 w-24 h-14 bg-white bg-opacity-80 hover:bg-white">
                    <a href="/user"
                        class="text-black text-sm flex flex-col items-center font-montserrat font-regular">
                        <img src="img/user.png" alt="User" class="h-6 mb-1">
                        User
                    </a>
                </li>
                <li class="relative rounded-lg mx-3 p-2 w-24 h-14 bg-white bg-opacity-80 hover:bg-white">
                    <a href="/"
                        class="text-black text-sm flex flex-col items-center font-montserrat font-regular">
                        <img src="img/profile.png" alt="Profile" class="h-6 mb-1">
                        Profile
                    </a>
                </li>
                <li class="relative rounded-lg mx-3 p-2 w-24 h-14 bg-white bg-opacity-80 hover:bg-white">
                    <a href="#"
                        class="text-black text-sm flex flex-col items-center font-montserrat font-regular">
                        <img src="img/logout.png" alt="Logout" class="h-6 mb-1">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <section class="mt-20 z-0">
        @yield('content')
    </section>

    <footer class="bg-blue-300 h-10 drop-shadow-lg w-full fixed bottom-0 z-50">
        <div class="flex justify-center items-center h-full">
            <span class="text-black text-sm font-montserrat font-regular">© 2023 Copyright:
                Institut Teknologi Sumatera</span>
        </div>
    </footer>
</body>


</html>
