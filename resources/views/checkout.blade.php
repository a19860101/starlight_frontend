<x-master>
    <x-header-title>結帳資訊</x-header-title>
    <main class='bg-white'>
        <div class="container px-4 py-6">
            <form action="">
                {{-- <div class="flex border p-2 rounded divide-x text-center text-zinc-600 mb-2">
                    <div class="w-12">
                        <input type="checkbox">
                    </div>
                    <div class="grow">商品</div>
                    <div class="w-28">單價</div>
                    <div class="w-28">數量</div>
                    <div class="w-28">小計</div>
                    <div class="w-16">編輯</div>
                </div> --}}
                <div class="border divide-y rounded mb-4">
                    <div class="flex p-2 items-center text-center text-zinc-600 bg-amber-200">
                        <div class="text-zinc-500">
                            預錄課程
                        </div>
                    </div>
                    <div class="flex p-2 items-center text-center text-zinc-600">
                        <div class="grow p-2 flex items-center justify-between">
                            <div><img src="https://picsum.photos/id/45/100" alt=""></div>
                            <div>商品名稱</div>
                            <div>商品規格</div>
                        </div>
                        <div class="w-28">NT$2323</div>
                        <div class="w-28">
                           <span>1</span>
                        </div>
                        <div class="w-28">NT$213132</div>
                        <div class="w-16"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="flex p-2 items-center text-center text-zinc-600">
                        <div class="grow p-2 flex items-center justify-between">
                            <div><img src="https://picsum.photos/id/45/100" alt=""></div>
                            <div>商品名稱</div>
                            <div>商品規格</div>
                        </div>
                        <div class="w-28">NT$2323</div>
                        <div class="w-28">
                            <span>1</span>
                        </div>
                        <div class="w-28">NT$213132</div>
                        <div class="w-16"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                </div>
                <div class="border divide-y rounded mb-4">
                    <div class="flex p-2 items-center text-center text-zinc-600 bg-amber-200">

                        <div class="text-zinc-500">
                            直播課程
                        </div>
                    </div>
                    <div class="flex p-2 items-center text-center text-zinc-600">

                        <div class="grow p-2 flex items-center justify-between">
                            <div><img src="https://picsum.photos/id/45/100" alt=""></div>
                            <div>商品名稱</div>
                            <div>商品規格</div>
                        </div>
                        <div class="w-28">NT$2323</div>
                        <div class="w-28">
                            <span>1</span>
                        </div>
                        <div class="w-28">NT$213132</div>
                        <div class="w-16"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="flex p-2 items-center text-center text-zinc-600">

                        <div class="grow p-2 flex items-center justify-between">
                            <div><img src="https://picsum.photos/id/45/100" alt=""></div>
                            <div>商品名稱</div>
                            <div>商品規格</div>
                        </div>
                        <div class="w-28">NT$2323</div>
                        <div class="w-28">
                            <span>12</span>
                        </div>
                        <div class="w-28">NT$213132</div>
                        <div class="w-16"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                </div>
                <div class="border divide-y rounded mb-4">
                    <div class="flex p-2 items-center text-center text-zinc-600 bg-amber-200">
                        <div class="text-zinc-500">
                            線上商品
                        </div>
                    </div>
                    <div class="flex p-2 items-center text-center text-zinc-600">
                        <div class="grow p-2 flex items-center justify-between">
                            <div><img src="https://picsum.photos/id/45/100" alt=""></div>
                            <div>商品名稱</div>
                            <div>商品規格</div>
                        </div>
                        <div class="w-28">NT$2323</div>
                        <div class="w-28">
                            <span>1</span>
                        </div>
                        <div class="w-28">NT$213132</div>
                        <div class="w-16"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="flex p-2 items-center text-center text-zinc-600">
                        
                        <div class="grow p-2 flex items-center justify-between">
                            <div><img src="https://picsum.photos/id/45/100" alt=""></div>
                            <div>商品名稱</div>
                            <div>商品規格</div>
                        </div>
                        <div class="w-28">NT$2323</div>
                        <div class="w-28">
                            <span>3</span>
                        </div>
                        <div class="w-28">NT$213132</div>
                        <div class="w-16"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                </div>
                <div class="border-b border-amber-400 mb-4"></div>
                <div class=" rounded mb-4">
                    <h4 class="text-xl font-medium">寄送資訊</h4>
                    <div class="mb-3">郵局：NT$65</div>
                    
                    <form action="">
                        <fieldset class="border border-amber-300 p-4 rounded w-fit">
                            <legend>聯絡資訊</legend>
                            <div class="mb-3">
                                <input type="text" class="border-2 rounded p-2 w-72" placeholder="收件人姓名">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="border-2 rounded p-2 w-72" placeholder="收件人手機">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="border-2 rounded p-2 w-24" placeholder="郵遞區號">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="border-2 rounded p-2 w-96" placeholder="地址">
                            </div>
                            <div>
                                <input type="submit" value="修改" class="text-sm px-8 text-center py-2 rounded bg-amber-300">
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div>
                    <label for="" class="form-label">備註</label>
                    <textarea name="" id="" cols="60" rows="5" class="border-2 rounded"></textarea>
                </div>
                <div class="border-b border-amber-400 my-4"></div>
                <div class="space-y-4">
                    <h4 class="text-xl font-medium">付款方式</h4>
                    <div>
                        <input type="radio" name="" id="">
                        <label for="" class="ml-4">線上付款</label>
                    </div>
                    <div>
                        <input type="radio" name="" id="">
                        <label for="" class="ml-4">ATM轉帳</label>
                    </div>
                </div>
                <div class="border-b border-amber-400 my-4"></div>
                <div class="border divide-y rounded mb-4 *:p-4 text-right">
                    <div class="flex justify-end">
                        <div class="w-48">優惠券</div>
                        <div class="w-48">
                            <select name="" id="" class="bg-zinc-300 px-4 rounded">
                                <option value="">選擇優惠券</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <div class="w-48">運費總金額</div>
                        <div class="w-48">NT$99999</div>
                    </div>
                    <div class="flex justify-end">
                        <div class="w-48">折抵金額</div>
                        <div class="w-48">-NT$99999</div>
                    </div>
                    <div class="flex justify-end">
                        <div class="w-48">總金額</div>
                        <div class="w-48 text-amber-500">NT$99999</div>
                    </div>
                    <div class="flex justify-end">
                        <div class="w-64 text-amber-500">
                            <input type="button" class="px-12 py-2 text-zinc-500 text-sm text-center border-2 justify-self-end rounded" value="返回">
                            <input type="submit" class="px-12 py-2 text-zinc-500 text-sm text-center bg-amber-200 justify-self-end rounded" value="付款">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-master> 
<x-alert title="付款成功" button="會員中心" cancel="去逛逛" id="success">
    <h3>訂單編號：[訂單編號]</h3>
    <p>親愛的顧客，感謝您的購買，我們將會盡快處理您的訂單！</p>
    <p>因第三方支付有連線時間差，請等待30分鐘後，</p>
    <p> 再至會員中心查看訂單詳情。</p>
    <p>如有任何問題或需要進一步幫助，請隨時與我們聯繫。</p>
    <p>感謝您的支持！</p>
</x-alert>
<x-alert title="付款失敗" button="關閉" id="error" type="error">
    <p>親愛的顧客</p>
    <p>很抱歉通知您，您的付款未成功完成。</p>
    <p> 請您重新購買商品，並重新嘗試付款。</p>
    <p>如果問題仍然存在，請聯繫您的銀行以獲取進一步幫助。</p>
    <p>謝謝您的理解和支持！</p>
</x-alert>
<script>
    Swal.fire({
        template: '#success',
        cancelButtonText:`<a href="/course">去逛逛</a>`,
        confirmButtonText:`<a href="/member">會員中心</a>`
    })
    // Swal.fire({
    //     template: '#error'
        // cancelButtonText:`<a href="/course">去逛逛</a>`,
        // confirmButtonText:`<a href="/member">會員中心</a>`
    // })
</script>