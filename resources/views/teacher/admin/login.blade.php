<x-master>
    <div class="container flex justify-center py-12">
        <div class="bg-zinc-100 w-2/5 p-12 rounded shadow-lg">
            <h2 class="text-2xl font-medium text-center mb-5">--講師登入--</h2>
            <form action="/teacher/admin/" class="mb-5">
                <div class="mb-5">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" class="form-control border-2 border-zinc-300">
                </div>
                <div class="mb-5">
                    <label for="" class="form-label">密碼</label>
                    <input type="password" class="form-control border-2 border-zinc-300">
                </div>
                <div class="mb-5">
                    <small class="text-rose-600">*帳號不存在，請重新輸入</small>
                    <br>
                    <small class="text-rose-600">*密碼錯誤，請重新輸入</small>
                    <br>
                    <small class="text-rose-600">*忘記密碼，請聯絡我們</small>
                </div>
                <div class="mb-5">
                    <input type="submit" class="btn btn-primary w-full" value="登入">
                </div>
            </form>
        </div>
    </div>
</x-master>
