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
    <main class="bg-zinc-100 -mb-16">
        <x-member-breadcrumb />
        <div class="container px-4 mb-6">
            <h2 class="text-xl font-medium pb-2">影片名稱</h2>
            <div class="border-b-2 border-zinc-400"></div>
        </div>
        <div class="grid grid-cols-3 px-4 gap-x-6">
            <div>
                <h3 class="p-3">課程單元</h3>
                <ul class="divide-y">
                    <li class="divide-y">
                        <a href="#" class="block p-3 bg-amber-200 toggle-link">
                            <h4 class="font-medium flex justify-between">章節一 哈哈哈哈哈哈哈啊<i class="fa-solid fa-chevron-up"></i></h4>
                            <small class="text-zinc-500">2單元,0小時23分鐘</small>
                        </a>
                        <div class="divide-y pl-4 toggle-panel">
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">1-1 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">1-2 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">1-3 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                        </div>

                    </li>
                    <li class="divide-y">
                        <a href="#" class="block p-3 bg-amber-200 toggle-link">
                            <h4 class="font-medium flex justify-between">章節一 哈哈哈哈哈哈哈啊<i class="fa-solid fa-chevron-up"></i></h4>
                            <small class="text-zinc-500">2單元,0小時23分鐘</small>
                        </a>
                        <div class="divide-y pl-4 toggle-panel">
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">2-1 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">2-2 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="block p-3 bg-amber-200 toggle-link">
                            <h4 class="font-medium flex justify-between">章節一 哈哈哈哈哈哈哈啊<i class="fa-solid fa-chevron-up"></i></h4>
                            <small class="text-zinc-500">2單元,0小時23分鐘</small>
                        </a>
                        <div class="divide-y pl-4 toggle-panel">
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">2-1 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">2-2 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">2-2 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                            <a href="#" class="block p-3">
                                <h4 class="font-medium">2-2 哈哈哈哈哈哈哈啊</h4>
                                <small class="text-zinc-400">2單元,0小時23分鐘</small>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-span-2">
                {{-- vimeo --}}
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/911816030?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="A LINE ALONE Arc'teryx - Ivan Le Pays"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                {{-- vimeo --}}
                <div>
                    <div class="w-full flex v-info">
                        <a href="#about" class="text-center grow border-b-2 py-4 v-active">課程簡介</a>
                        <a href="#knows" class="text-center grow border-b-2 py-4">上課須知</a>
                    </div>
                    <div class="py-6 leading-8 v-content" id="about">
                        課程簡介：
                        這門課程旨在幫助學員通過一系列深入的內省和實踐活動，探索自我，激發內在力量，實現心靈成長和個人發展。無論您是希望更了解自己，克服內心的挑戰，還是尋找更大的生命意義，這門課程都將為您提供豐富而深入的學習體驗。

                        在課程中，您將學到：
                        - 自我認識和意識提升的基礎知識
                        - 與情緒和壓力管理相關的技巧和策略
                        - 內在和外在導向的目標設定和達成
                        - 尋找和發揮您的潛能與生命目的

                        通過豐富的視頻講座、引導冥想、實踐任務和小組討論，您將在這個旅程中獲得深刻的洞察力，啟發內在的智慧，並開啟個人成長的無限可能性。

                        我們誠摯邀請您加入我們，一起踏上這段充滿啟發和轉變的心靈成長之旅！
                    </div>
                    <div class="py-6 leading-8 hidden v-content" id="knows">
                        上課須知：
                        這門課程旨在幫助學員通過一系列深入的內省和實踐活動，探索自我，激發內在力量，實現心靈成長和個人發展。無論您是希望更了解自己，克服內心的挑戰，還是尋找更大的生命意義，這門課程都將為您提供豐富而深入的學習體驗。

                        在課程中，您將學到：
                        - 自我認識和意識提升的基礎知識
                        - 與情緒和壓力管理相關的技巧和策略
                        - 內在和外在導向的目標設定和達成
                        - 尋找和發揮您的潛能與生命目的

                        通過豐富的視頻講座、引導冥想、實踐任務和小組討論，您將在這個旅程中獲得深刻的洞察力，啟發內在的智慧，並開啟個人成長的無限可能性。

                        我們誠摯邀請您加入我們，一起踏上這段充滿啟發和轉變的心靈成長之旅！
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('.toggle-link').click(function(){
                $(this).next().slideToggle();
            })
            $('.v-info').find('a').click(function(){
                $('.v-info').find('a').removeClass('v-active');
                $(this).addClass('v-active')
                let t = $(this).attr('href');
                $('.v-content').hide();
                $(t).fadeIn();
            })
        })
    </script>

</body>
</html>

