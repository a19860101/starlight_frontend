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
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">中文姓名</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">英文姓名</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">生日</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">性別</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12 shrink-0" style="text-align-last: justify">電話</label>
                    <input type="text" class="border-2 p-2 xl:w-2/12 sm:w-3/12 w-5/12 mr-2">
                    <input type="text" class="border-2 p-2 xl:w-10/12 sm:w-9/12 w-7/12">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">信箱</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">地址</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">銀行代碼</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">銀行名稱</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">分行代碼</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">分行名稱</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">帳戶名稱</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">銀行帳號</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex">
                    <input type="submit" value="修改" class="btn btn-primary ml-auto">
                </div>
            </form>
        </div>
    </div>
</x-teacher-master>
<x-alert title="講師資料編輯成功" button="關閉" id="success">
    <p>您的講師資料已更新！</p>
    <p>請再次確認資訊是否正確。</p>
</x-alert>
<x-alert title="講師資料有誤" button="關閉" id="error" type="error">
    <p>所有項目為必填，請完整填寫所有資料</p>
</x-alert>
<script>
    // Swal.fire({
    //     template: '#success'
    // })
    Swal.fire({
        template: '#error'
    })
</script>

