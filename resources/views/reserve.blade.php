<x-master>
    <header class="bg-cover bg-fixed bg-center py-8" style="background-image:url('/images/reserve.png')">
        <div class="container">
            <x-page-title>線上預約</x-page-title>
            <div class="px-4 mt-5">
                <div class="bg-zinc-800/50 text-zinc-100 p-6 leading-7 mb-5 border border-zinc-500 rounded">
                    <h3 class="text-2xl font-medium mb-5">請詳閱以下線上預約須知</h3>
                    親愛的顧客：
                    <br>
                    感謝您選擇我們的服務！為了確保您的預約順利進行，請注意以下重要事項：
                    <ul class="list-decimal list-inside">
                        <li>提前預約： 請在您計劃使用服務的日期前提前預約。我們建議您提前預約至少 24 小時以確保能夠安排到您理想的時間。</li>
                        <li>確認時間和日期： 在確定預約時，請仔細核對預約的時間和日期，以免出現混淆或錯誤。</li>
                        <li>準時到達： 請務必準時到達您的預約地點。如有延誤或無法按時到達，請提前通知我們以便進行安排。</li>
                        <li>取消或修改預約： 如果您需要取消或修改預約，請提前通知我們，以便我們為其他客戶安排時間。請注意，可能會有取消或修改預約的限制時間。</li>
                        <li>預約需知： 在預約之前，請詳細閱讀並理解我們的預約需知，包括有關付款、取消政策、服務內容等方面的信息。</li>
                        <li>確認預約細節： 在預約完成後，請確保您收到了預約確認的通知，並仔細核對預約的細節和條款。</li>
                        <li>隨身攜帶所需文件： 根據服務的性質，請準備好相關的證件或文件，以便預約期間使用或核查。</li>
                        <li>提前準備： 根據預約的服務類型，請提前做好相應的準備工作，以確保預約能夠順利進行。</li>
                    </ul>
                    如果您有任何疑問或需要進一步的幫助，請隨時與我們聯繫。我們期待為您提供優質的服務，祝您預約愉快！
                </div>
                <div class="text-center"><a href="" class="btn btn-primary">立即預約</a></div>
                
            </div>
        </div>
    </header>
    <div class="container flex flex-wrap py-8">
        <h2 class="text-4xl font-medium text-center w-full mb-8">填寫預約資訊</h2>
        <div class="w-1/2 text-zinc-100 pr-8">
            <p>請選擇欲預約的日期及時間</p>
            <p>並填寫完整預約資訊預約成功，您將會收到電子郵件通知</p>
            <p>預約時間後的簡易流程：</p>
            <ul class="list-decimal list-inside">
                <li>收到確認通知。</li>
                <li>準時抵達。</li>
                <li>享受服務。</li>
                <li>完成後給予評價。</li>
            </ul>
        </div>
        <div class="w-1/2">
            <form action="">
                <div class="mb-5">
                    <input type="date" class="form-control" placeholder="選擇日期">
                </div>
                <div class="mb-5">
                    <input type="time" class="form-control" placeholder="選擇日期">
                </div>
                <div class="mb-5">
                    <input type="text" class="form-control" placeholder="請輸入姓名">
                </div>
                <div class="mb-5">
                    <input type="text" class="form-control" placeholder="請輸入手機號碼">
                </div>
                <div class="mb-5">
                    <input type="text" class="form-control" placeholder="請輸入電子信箱">
                </div>
                <div>
                    <input type="submit" class='btn btn-primary' value="送出預約資訊">
                </div>
            </form>
        </div>
    </div>

</x-master>
<x-alert title="預約資訊已送出" button="關閉視窗">
    感謝您的來信<br>處理案件時間約3~4個工作天，我們會盡快回覆您的問題<br>
    若超過5個工作天，仍未收到回信，<br>
    郵件有可能會被電子郵件系統誤認為垃圾郵件，<br>
    請您至垃圾信件夾檢查，或者再次來信詢問<br>
    謝謝
</x-alert> 
<script>
    Swal.fire({
        template:'#my-template'
    })
</script>
