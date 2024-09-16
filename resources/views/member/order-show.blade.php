<x-member-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full">
        <h3 class="w-full text-2xl font-medium border-b-2 border-zinc-300 pb-2"><i class="fa-solid fa-arrow-left"></i><a href="/member/order">返回訂單記錄</a></h3>
    </div>
    <div class="px-4 pb-60">
        <div class="grid grid-cols-3 border-b border-amber-400 pb-2 text-zinc-500">
            <div>訂單編號：0980980980</div>
            <div>訂單日期：2024/12/23</div>
            <div>訂單狀態：已完成</div>
        </div>
        <h4 class="text-xl font-medium my-4">商品明細</h4>
        <div class="grid gap-y-4 mt-4 text-zinc-600">
            <div class="text-zinc-500 border-b border-zinc-400 pb-1">預錄課程</div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
        </div>
        <div class="grid gap-y-4 mt-4 text-zinc-600">
            <div class="text-zinc-500 border-b border-zinc-400 pb-1">直播課程</div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
        </div>
        <div class="grid gap-y-4 mt-4 text-zinc-600">
            <div class="text-zinc-500 border-b border-zinc-400 pb-1">線上商品</div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
            <div class="grid grid-cols-6">
                <div>123456778</div>
                <div>商品名稱</div>
                <div>商品規格</div>
                <div>NT$22222</div>
                <div>1</div>
                <div>NT$999</div>
            </div>
        </div>
        <div class="border-b-2 border-amber-300 mt-4"></div>
        <div class="my-4">
            <h4 class="text-xl font-medium mb-4">寄送資訊</h4>
            <ul class=" text-zinc-600">
                <li>收件人姓名：張小明</li>
                <li>手機：0900 123 456</li>
                <li>地址：100 台北市中正區忠孝東路一段50號</li>
                <li>備註：--</li>
            </ul>
        </div>
        <div class="border-b-2 border-amber-300 mt-4"></div>
        <div class="my-4">
            <h4 class="text-xl font-medium mb-4">付款方式</h4>
            <div class=" text-zinc-600">信用卡</div>
        </div>
        <div class="border-b-2 border-amber-300 mt-4"></div>
        <div class="divide-y-2 border-2 *:p-4 mt-4 rounded text-right text-zinc-500">
            <div class="flex justify-end">
                <div class="w-48">優惠券</div>
                <div class="w-48">dijqwiecjqwe</div>
            </div>
            <div class="flex justify-end">
                <div class="w-48">運費總金額</div>
                <div class="w-48">NT$98</div>
            </div>
            <div class="flex justify-end">
                <div class="w-48">折抵金額</div>
                <div class="w-48">-NT$98</div>
            </div>
            <div class="flex justify-end">
                <div class="w-48">付款總金額</div>
                <div class="w-48 text-amber-500">NT$99999</div>
            </div>
            <div class="flex justify-end">
                <div class="w-48 text-amber-500">
                    <a href="#" download="true" class="px-12 py-2 text-zinc-500 text-sm text-center bg-amber-200 justify-self-end rounded">查看訂單</a>
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