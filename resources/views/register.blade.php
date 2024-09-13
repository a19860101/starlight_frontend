<x-master>
    <div class="container flex justify-center py-12">
        <div class="bg-zinc-100 w-2/5 p-12 rounded shadow-lg">
            <h2 class="text-2xl font-medium text-center mb-5">--會員註冊--</h2>
            <form action="/register-success" class="mb-5">
                <div class="mb-5">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" class="form-control border-2 border-zinc-300">
                </div>
                <div class="mb-5">
                    <label for="" class="form-label">密碼</label>
                    <input type="password" class="form-control border-2 border-zinc-300">
                </div>
                <div class="mb-5">
                    <label for="" class="form-label">再次輸入密碼</label>
                    <input type="password" class="form-control border-2 border-zinc-300">
                </div>
                <div class="mb-5">
                    <small class="text-rose-600">*帳號格式錯誤，請重新輸入</small>
                    <br>
                    <small class="text-rose-600">*兩次密碼不相符，請重新輸入</small>
                </div>
                <div class="mb-5">
                    <input type="submit" class="btn btn-primary w-full" value="註冊">
                </div>
            </form>
            <div class='text-center text-sm mb-5'>
                已經是會員？<a href="/login" class="text-primary">去登入</a>
            </div>
        </div>
    </div>
</x-master>