<x-master>
    <div class="container flex flex-wrap">
        <h2 class="text-4xl text-zinc-100 font-bold w-full px-4 pt-8 pb-4">直播課程</h2>
        <div class="w-1/4 p-4 space-y-6">
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
        </div>
        <div class="w-3/4 flex flex-wrap content-start">
            <div class="w-full text-right py-5 pr-4 space-x-4">
                {{-- <x-breadcrumb></x-breadcrumb> --}}
                <a href="#">最熱銷</a>
                <a href="#">新上架</a>
            </div>
            <x-course-card class="w-1/3"></x-course-card>
            <x-course-card class="w-1/3"></x-course-card>
            <x-course-card class="w-1/3"></x-course-card>
            <x-course-card class="w-1/3"></x-course-card>
            <x-course-card class="w-1/3"></x-course-card>
            <x-course-card class="w-1/3"></x-course-card>
            <x-course-card class="w-1/3"></x-course-card>
        </div>
    </div>

</x-master>