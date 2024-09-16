<x-member-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full">
        <h3 class="w-full text-2xl font-medium border-b-2 border-zinc-300 pb-2"><a href="#">返回我的優惠券</a></h3>
    </div>
    <div class="px-4 pb-60">
        <h3>感謝</h3>
        
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