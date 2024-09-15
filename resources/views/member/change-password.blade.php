<x-member-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full">
        <h3 class="w-full text-3xl font-medium border-b-2 border-zinc-300 pb-2">變更密碼</h3>
    </div>
    <div class="px-4 flex flex-wrap">
        <div class="xl:w-9/12 lg:w-8/12 w-full lg:pr-8 mb-5">
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
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">再次輸入新密碼</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex items-center">
                    <label for="" class="mr-6 text-zinc-500 lg:w-16 w-12" style="text-align-last: justify">地址</label>
                    <input type="text" class="border-2 p-2 grow">
                </div>
                <div class="flex justify-end gap-x-6">
                    <input type="submit" value="取消" class="btn btn-outline-gray">
                    <input type="submit" value="變更" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</x-member-master>
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