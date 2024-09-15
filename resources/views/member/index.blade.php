<x-member-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full">
        <h3 class="w-full text-3xl font-medium border-b-2 border-zinc-300 pb-2">個人資料</h3>
    </div>
    <div class="px-4 flex flex-wrap">
        <div class="xl:w-9/12 lg:w-8/12 w-full lg:pr-8 mb-5">
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
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">職業</label>
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
                <div class="flex">
                    <input type="submit" value="儲存" class="btn btn-primary ml-auto">
                </div>
            </form>
        </div>
        <div class="xl:w-3/12 lg:w-4/12 w-full">
            <div class="border border-amber-500 bg-amber-50 p-8 space-y-6 rounded">
                <img src="/images/logo.png" alt="" class="w-24 block mx-auto">
                <div><span class="text-zinc-500 mr-8">會員編號</span>99999999</div>
                <div><span class="text-zinc-500 mr-8">入會日期</span>2024年9月21日</div>
                <div><span class="text-zinc-500 mr-8">會員期限</span>永久有效</div>
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