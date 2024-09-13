<x-master>
    <div class="container flex justify-center py-12">
        <div class="bg-zinc-100 w-2/5 p-12 rounded shadow-lg">
            <h2 class="text-2xl font-medium text-center mb-5">--輸入驗證碼--</h2>
            <form action="/forgot-3" class="mb-5">
                <div class="mb-5">
                    <label for="" class="form-label">請輸入驗證信件中的6位驗證碼</label>
                    <input type="text" class="form-control border-2 border-zinc-300" placeholder="請輸入6位驗證碼">
                </div> 
                <div class="mb-5">
                    <small class="text-rose-600">*驗證碼錯誤，請重新輸入</small>
                </div>
                <div class="mb-5">
                    <input type="submit" class="btn btn-primary w-full" value="驗證"> 
                </div>
            </form>
            

            <div class='text-center text-sm mb-5'>
                <p class="text-zinc-400">
                    若未收到驗證信件，請在垃圾信件夾查詢<br>或者點擊下方返回，重新輸入電子信箱
                </p>
            </div>
            <div class='text-center text-sm mb-5'>
                <a href="/forgot" class="hover:text-primary">返回，重新輸入電子信箱</a>
            </div>
        </div>
    </div>
</x-master>