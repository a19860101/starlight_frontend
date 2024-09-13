<x-master>
    <div class="container flex justify-center py-12">
        <div class="bg-zinc-100 w-2/5 p-12 rounded shadow-lg">
            <h2 class="text-2xl font-medium text-center mb-5">--忘記密碼--</h2>
            <div class="mb-5">
                <p class="text-center">
                    請輸入註冊時的電子信箱帳號
                </p>
                <p class="text-center">
                    我們將發送驗證碼至該信箱
                </p>
            </div>
            <form action="/forgot-2" class="mb-5">
                <div class="mb-5">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" class="form-control border-2 border-zinc-300">
                </div> 

                <div class="mb-5">
                    <input type="submit" class="btn btn-primary w-full" value="驗證信箱"> 
                </div>
            </form>
            <div class='text-center text-sm mb-5'>
                <a href="/login">返回登入</a>
            </div>
            <div class='text-center text-sm mb-5'>
                還不是會員？<a href="/register" class="text-primary">去註冊</a>
            </div>
        </div>
    </div>
</x-master>