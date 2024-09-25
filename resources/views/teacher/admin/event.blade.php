<x-teacher-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full flex-col">
        <div class="w-full text-xl font-medium border-zinc-300 pb-4">
            <i class="fa-solid fa-arrow-left pr-3"></i><a href="#" onclick="history.back()">返回課程行事曆</a>
        </div>
        {{-- <h3 class="w-full text-2xl font-medium border-b-2 border-zinc-300 pb-2">課程行事曆</h3> --}}
    </div>
    <div class="px-4 flex flex-wrap">
        <div class=" w-full p-4 rounded-md space-y-4 border-2">
            <form action="" class="space-y-4">
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">課程名稱</label>
                    <input type="text" class="border-2 p-2 grow" @readonly(true) value="塔羅初階">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">課程類型</label>
                    <input type="text" class="border-2 p-2 grow" @readonly(true) value="直播">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">開課日期</label>
                    <input type="text" class="border-2 p-2 grow" @readonly(true) value="2024-12-01">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">報名人數</label>
                    <input type="text" class="border-2 p-2 grow" @readonly(true) value="120">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">Zoom ID</label>
                    <input type="text" class="border-2 p-2 grow" @readonly(true) value="000-000-000">
                </div>

            </form>
        </div>
    </div>
</x-teacher-master>

