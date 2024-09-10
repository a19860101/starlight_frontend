<x-master>
    <div class="container flex flex-wrap">
        <h2 class="text-4xl text-zinc-100 font-bold w-full px-4 pt-8 pb-4">文章專區</h2>
        <div class="w-1/3 p-4 space-y-6">
            <div>
                <form action="">
                    <input type="text" placeholder="請輸入關鍵字" class="w-full p-2 rounded">
                </form>
            </div>
            <div class="bg-amber-100 rounded p-6">
                <ul class="space-y-6">
                    <li><a href="">標籤</a></li>
                    <li><a href="">標籤</a></li>
                    <li><a href="">標籤</a></li>
                    <li><a href="">標籤</a></li>
                    <li><a href="">標籤</a></li>
                    <li><a href="">標籤</a></li>
                    <li><a href="">標籤</a></li>
                    <li><a href="">標籤</a></li>
                </ul>
            </div>
            <div class="bg-amber-100 rounded p-6 space-y-6">
                <h3 class="text-2xl font-bold">近期熱門</h3>
                <ul class="space-y-6">
                    <li class="flex items-center">
                        <div class="text-6xl font-bold p-3">
                            1
                        </div>
                        <div>
                            <h5 class="text-xl font-bold"><a href="">文章標題</a></h5>
                            <p class="text-sm text-zinc-600">Lorem ipsum dolor sit amet consectetur  eum.</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="text-6xl font-bold p-3">
                            2
                        </div>
                        <div>
                            <h5 class="text-xl font-bold"><a href="">文章標題</a></h5>
                            <p class="text-sm text-zinc-600">Lorem ipsum dolor sit amet consectetur  eum.</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="text-6xl font-bold p-3">
                            3
                        </div>
                        <div>
                            <h5 class="text-xl font-bold"><a href="">文章標題</a></h5>
                            <p class="text-sm text-zinc-600">Lorem ipsum dolor sit amet consectetur  eum.</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="text-6xl font-bold p-3">
                            4
                        </div>
                        <div>
                            <h5 class="text-xl font-bold"><a href="">文章標題</a></h5>
                            <p class="text-sm text-zinc-600">Lorem ipsum dolor sit amet consectetur  eum.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-2/3 flex flex-wrap content-start">
            <div class="w-full text-right py-5 pr-4 space-x-4">
                <a href="#">最熱銷</a>
                <a href="#">新上架</a>
            </div>
            <x-post-card class="w-1/2" url="/post/show"></x-post-card>
            <x-post-card class="w-1/2"></x-post-card>
            <x-post-card class="w-1/2"></x-post-card>
        </div>
    </div>

</x-master>