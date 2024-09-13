<x-master>
    <x-breadcrumb></x-breadcrumb>
    <div class="container flex flex-wrap text-zinc-100 *:px-4">
        <x-page-title>聯絡我們</x-page-title>
        <div class="w-full text-zinc-200 mb-6">有需要幫助的問題或想提供建議，歡迎來信</div>
        
        <div class="w-3/5">
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label req">電子郵件地址</label>
                    <input type="text" class="form-control text-zinc-900" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label req">您的姓名</label>
                    <input type="text" class="form-control text-zinc-900" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label req">您的所在地</label>
                    <input type="text" class="form-control text-zinc-900" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label req">請選擇問題類型，並在下方描述中說明您的問題</label>
                    <select name="" id="" class='form-control text-zinc-900'>
                        <option value="">--請選擇--</option>
                        <option value="">客人-帳號問題</option>
                        <option value="">客人-訂單問題</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">訂單編號或帳號（提供完整資料，可以加速處理）</label>
                    <input type="text" class="form-control text-zinc-900">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label req">請描述你的問題</label>
                    <textarea name="" id="" class="form-control text-zinc-900" cols="30" rows="10" required></textarea>
                </div>
                <div>
                    <input type="submit" value="提交問題" class="btn btn-primary">
                </div>
                <div class="text-rose-600 mt-5">*為必填項目，請填妥資訊後再次提交</div>
            </form>
        </div>
        <div class="w-2/5">
            <div class="bg-zinc-100 rounded text-zinc-900 p-8 space-y-6">
                <div class="flex">
                    <div class="pt-1"><i class="fa-solid fa-location-dot fa-xl"></i></div>
                    <div class="pl-4">
                        <div class="text-lg font-bold">地址</div>
                        <div>
                            10685臺北市大安區信義路４段199巷438號15樓
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="pt-1"><i class="fa-regular fa-envelope fa-xl"></i></div>
                    <div class="pl-4">
                        <div class="text-lg font-bold">電子信箱</div>
                        <div>
                            asdf@asdf.com
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="pt-1"><i class="fa-solid fa-phone fa-xl"></i></div>
                    <div class="pl-4">
                        <div class="text-lg font-bold">電話</div>
                        <div>
                            +886988888888
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>
<x-alert title="提交成功" button="關閉視窗">
    感謝您的來信<br>
    處理案件時間約3~4個工作天，我們會盡快回覆您的問題<br>
    若超過5個工作天，仍未收到回信，<br>
    郵件有可能會被電子郵件系統誤認為垃圾郵件，請您至垃圾信件夾檢查，或者再次來信詢問<br>
    謝謝
</x-alert>
<script>
    Swal.fire({
        template:'#my-template'
    })
</script>