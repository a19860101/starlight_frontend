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
        <h2 class="text-3xl font-medium px-4">會員中心</h2>
        <ul class="flex space-x-8 ml-auto px-4">
            <li class="space-x-4">
                <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="/login"><i class="fa-regular fa-circle-user"></i></a>
                <a href="#"><i class="fa-regular fa-bell"></i></a>
            </li>
        </ul>
    </nav>
    <main class="bg-zinc-100 -mb-16 flex">
        <div class="w-60 bg-zinc-100 leading-8 py-5 border-r-2">
            <ul class="divide-y-2 *:p-5">
                <li><a href="#" class="text-xl font-medium text-zinc-500 block mb-4">會員帳號</a>
                    <ul class="pl-2 space-y-2">
                        <li><a href="/member" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">個人資料</a></li>
                        <li><a href="/member/msg-center" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">訊息中心</a></li>
                        <li><a href="/member/change-password" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">變更密碼</a></li>
                    </ul>
                </li>
                <li><a href="#" class="text-xl font-medium text-zinc-500 block mb-4">課程專區</a>
                    <ul class="pl-2 space-y-2">
                        <li><a href="/member/course-list" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">所有預錄課程</a></li>
                        <li><a href="/member/streaming-list" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">所有直撥課程</a></li>
                    </ul>
                </li>
                <li><a href="#" class="text-xl font-medium text-zinc-500 block mb-4">商品訂單</a>
                    <ul class="pl-2 space-y-2">
                        <li><a href="/member/coupon" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">我的優惠券</a></li>
                        <li><a href="/member/order" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">訂單記錄</a></li>
                    </ul>
                </li>
                <li><a href="#" class="text-xl font-medium text-zinc-500 block mb-4">服務支援</a>
                    <ul class="pl-2 space-y-2">
                        <li><a href="#" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">幫助中心</a></li>
                        <li><a href="#" class="hover:text-amber-600 duration-300 block hover:bg-zinc-300 pl-2 rounded">隱私條款</a></li>
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

