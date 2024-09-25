<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>和平星光</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&family=Praise&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body >
    <nav class="bg-zinc-900 items-center text-zinc-100 py-5 flex">
        <div class="w-60 border-r-2 border-zinc-700 px-4">
            <a href="/">
                <img src="/images/logo-h.png" alt="" class="w-full object-contain">
            </a>
        </div>
        <h2 class="text-3xl font-medium px-4"><a href="/teacher/admin">講師系統</a></h2>
        {{-- <ul class="flex space-x-8 ml-auto px-4">
            <li class="space-x-4">
                <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="/login"><i class="fa-regular fa-circle-user"></i></a>
                <a href="#"><i class="fa-regular fa-bell"></i></a>
            </li>
        </ul> --}}
    </nav>
    <main class="bg-zinc-100 -mb-16 flex h-[1200px]">
        <div class="w-60 bg-zinc-100 leading-8 py-5 border-r-2">
            <ul class="divide-y-2 *:p-5">
                <li><a href="#" class="text-xl font-medium text-zinc-500 block mb-4">課程管理</a>
                    <ul class="pl-2 space-y-2">
                        <li><a href="/teacher/admin/" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">公告</a></li>
                        <li><a href="/teacher/admin/calendar" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">課程行事曆</a></li>
                    </ul>
                </li>
                <li><a href="#" class="text-xl font-medium text-zinc-500 block mb-4">帳號管理</a>
                    <ul class="pl-2 space-y-2">
                        <li><a href="/teacher/admin/info" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">講師資料</a></li>
                        <li><a href="/teacher/admin/password" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">變更密碼</a></li>
                        <li><a href="#" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">登出</a></li>
                    </ul>
                </li>
                <li><a href="#" class="text-xl font-medium text-zinc-500 block mb-4">服務支援</a>
                    <ul class="pl-2 space-y-2">
                        <li><a href="/teacher/admin/help" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">講師幫助</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="w-full">
            {{$slot}}
        </div>
    </main>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

