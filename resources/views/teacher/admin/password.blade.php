<x-teacher-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full flex-col">
        <div class="w-full text-xl font-medium border-zinc-300 pb-4">
            <i class="fa-solid fa-arrow-left pr-3"></i><a href="#" onclick="history.back()">返回</a>
        </div>
        {{-- <h3 class="w-full text-2xl font-medium border-b-2 border-zinc-300 pb-2">課程行事曆</h3> --}}
    </div>
    <div class="px-4 flex flex-wrap">
        <div class=" w-full p-4 rounded-md space-y-4 border-2">
            <form action="" class="space-y-4">
                <form action="" class="space-y-4">
                    <div class="flex items-center">
                        <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">帳號</label>
                        <input type="text" class="border-2 p-2 grow">
                    </div>
                    <div class="flex items-center">
                        <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">舊密碼</label>
                        <input type="text" class="border-2 p-2 grow">
                    </div>
                    <div class="flex items-center">
                        <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">新密碼</label>
                        <input type="text" class="border-2 p-2 grow">
                    </div>
                    <div class="flex items-center">
                        <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">再次輸入新密碼</label>
                        <input type="text" class="border-2 p-2 grow">
                    </div>
                    <div class="flex justify-end gap-x-6">
                        <input type="submit" value="取消" class="btn btn-outline-gray">
                        <input type="submit" value="變更" class="btn btn-primary">
                    </div>
                </form>
            </form>
        </div>
    </div>
</x-teacher-master>
<x-alert title="密碼變更成功" button="關閉" id="success">
    <p>您的密碼變更請求已成功完成</p>
    <p>請務必牢記您的新密碼，並注意保護您的帳戶安全。</p>
</x-alert>
<x-alert title="密碼變更失敗" button="關閉" id="error" type="error">
    <p>您的密碼變更請求失敗。</p>
    <p>新密碼與舊密碼相同，請重新進行操作</p>
</x-alert>
<script>
    Swal.fire({
        template: '#success'
    })
    Swal.fire({
        template: '#error'
    })
</script>

