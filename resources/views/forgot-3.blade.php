<x-master>
    <div class="container flex justify-center py-12">
        <div class="bg-zinc-100 w-2/5 p-12 rounded shadow-lg">
            <h2 class="text-2xl font-medium text-center mb-5">--驗證成功，重設密碼--</h2>
            <form action="/forgot-success" class="mb-5">
                <div class="mb-5">
                    <label for="" class="form-label">請輸入新密碼</label>
                    <input type="password" class="form-control border-2 border-zinc-300" placeholder="請輸入6~8位英數組合密碼">
                </div> 
                <div class="mb-5">
                    <label for="" class="form-label">再次輸入新密碼</label>
                    <input type="password" class="form-control border-2 border-zinc-300" placeholder="請輸入6~8位英數組合密碼">
                </div> 
                <div class="mb-5">
                    <small class="text-rose-600">*兩次密碼不相符，請重新輸入</small>
                    <br>
                    <small class="text-rose-600">*密碼格式不正確，請重新輸入</small>
                </div>
                <div class="mb-5">
                    <input type="submit" class="btn btn-primary w-full" value="重設密碼"> 
                </div>
            </form>
        </div>
    </div>
</x-master>