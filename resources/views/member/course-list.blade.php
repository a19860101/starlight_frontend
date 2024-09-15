<x-member-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full">
        <h3 class="w-full text-3xl font-medium border-b-2 border-zinc-300 pb-2">所有預錄課程</h3>
    </div>
    <div class="px-4 grid grid-cols-3 gap-4">
        <div>
            <div class="border border-zinc-300 rounded-lg overflow-clip">
                <div class="aspect-video">
                    <img src="https://picsum.photos/id/22/800" alt="" class="cover">
                </div>
                <div class="flex gap-x-2 p-2">
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">預錄</a>
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">已開課</a>
                </div>
                <div class="p-2">
                    <h4 class="font-medium mb-6">課程標題啊啊啊啊啊啊</h4>
                    <div class='space-y-2'>
                        <small class="text-zinc-400">課程進度</small>
                        <div class="flex items-center justify-between">
                            <div class="w-full bg-zinc-300 h-2 rounded-full">
                                <div class="w-[32%] bg-amber-400 h-2 rounded-full"></div>
                            </div>
                            <span for="course-1" class="ml-2 text-sm">32%</span>
                        </div>
                        <a href="#" class="w-full text-center bg-amber-200 block py-2 rounded hover:bg-amber-100 duration-300">開始上課</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="border border-zinc-300 rounded-lg overflow-clip">
                <div class="aspect-video">
                    <img src="https://picsum.photos/id/22/800" alt="" class="cover">
                </div>
                <div class="flex gap-x-2 p-2">
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">預錄</a>
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">已開課</a>
                </div>
                <div class="p-2">
                    <h4 class="font-medium mb-6">課程標題啊啊啊啊啊啊</h4>
                    <div class='space-y -2'>
                        <small class="text-zinc-400">課程進度</small>
                        <div class="flex items-center justify-between">
                            <div class="w-full bg-zinc-300 h-2 rounded-full">
                                <div class="w-[32%] bg-amber-400 h-2 rounded-full"></div>
                            </div>
                            <span for="course-1" class="ml-2 text-sm">32%</span>
                        </div>
                        <a href="#" class="w-full text-center bg-amber-200 block py-2 rounded hover:bg-amber-100 duration-300">開始上課</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="border border-zinc-300 rounded-lg overflow-clip">
                <div class="aspect-video">
                    <img src="https://picsum.photos/id/22/800" alt="" class="cover">
                </div>
                <div class="flex gap-x-2 p-2">
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">預錄</a>
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">已開課</a>
                </div>
                <div class="p-2">
                    <h4 class="font-medium mb-6">課程標題啊啊啊啊啊啊</h4>
                    <div class='space-y-2'>
                        <small class="text-zinc-400">課程進度</small>
                        <div class="flex items-center justify-between">
                            <div class="w-full bg-zinc-300 h-2 rounded-full">
                                <div class="w-[32%] bg-amber-400 h-2 rounded-full"></div>
                            </div>
                            <span for="course-1" class="ml-2 text-sm">32%</span>
                        </div>
                        <a href="#" class="w-full text-center bg-amber-200 block py-2 rounded hover:bg-amber-100 duration-300">開始上課</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="border border-zinc-300 rounded-lg overflow-clip">
                <div class="aspect-video">
                    <img src="https://picsum.photos/id/22/800" alt="" class="cover">
                </div>
                <div class="flex gap-x-2 p-2">
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">預錄</a>
                    <a href="#" class="text-white bg-amber-500 p-1 text-sm">已開課</a>
                </div>
                <div class="p-2">
                    <h4 class="font-medium mb-6">課程標題啊啊啊啊啊啊</h4>
                    <div class='space-y-2'>
                        <small class="text-zinc-400">課程進度</small>
                        <div class="flex items-center justify-between">
                            <div class="w-full bg-zinc-300 h-2 rounded-full">
                                <div class="w-[32%] bg-amber-400 h-2 rounded-full"></div>
                            </div>
                            <span for="course-1" class="ml-2 text-sm">32%</span>
                        </div>
                        <a href="#" class="w-full text-center bg-amber-200 block py-2 rounded hover:bg-amber-100 duration-300">開始上課</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-member-master>
<x-alert title="個人資料編輯成功" button="關閉" id="success">
    <p>您的個人資料已更新！</p>
    <p>請確認您的新資訊是否正確。</p>
</x-alert>
<x-alert title="個人資料有誤" button="關閉" id="error" type="error">
    <p>所有項目為必填，請完整填寫所有資料</p>
</x-alert>
<script>
    // Swal.fire({
    //     template: '#success'
    // })
    // Swal.fire({
    //     template: '#error'
    // })
</script>