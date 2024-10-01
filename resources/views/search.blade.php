<x-master>
    <div class="container flex flex-wrap">
        <h2 class="text-4xl text-zinc-100 font-bold w-full px-4 pt-8 pb-4">
            有 <span>40</span> 項 <span class="text-amber-400">塔羅</span> 搜尋結果
        </h2>
        <div class="w-1/4 p-4 space-y-6">
            <div>
                <form action="">
                    <input type="text" placeholder="請輸入關鍵字" class="w-full p-2 rounded">
                </form>
            </div>
        </div>
        <div class="w-3/4">
            <div class="w-full text-right py-5 pr-4 space-x-4">
                {{-- <x-breadcrumb></x-breadcrumb> --}}
                <a href="#">最熱銷</a>
                <a href="#">新上架</a>
            </div>
        </div>
        <div class="w-full flex flex-wrap content-start">
            <div class="w-full flex px-4 my-4 divide-x panel-nav hover:*:bg-amber-400 *:duration-300">
                <a href="javascript:;" data-target="#post" class="w-1/4 p-4 text-center bg-zinc-100 panel-link">文章專區</a>
                <a href="javascript:;" data-target="#streaming" class="w-1/4 p-4 text-center bg-zinc-100 panel-link">直播課程</a>
                <a href="javascript:;" data-target="#course" class="w-1/4 p-4 text-center bg-zinc-100 panel-link">預錄課程</a>
                <a href="javascript:;" data-target="#product" class="w-1/4 p-4 text-center bg-zinc-100 panel-link">線上購物</a>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 panel" id="course">
                <x-course-card  url="course/show"></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
            </div>
            <div class="hidden lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 panel" id="streaming">
                <x-course-card  url="course/show"></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
                <x-course-card ></x-course-card>
            </div>
            <div class="hidden lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 panel" id="post">
                <x-post-card  url="post/show"></x-post-card>
                <x-post-card ></x-post-card>
                <x-post-card ></x-post-card>
                <x-post-card ></x-post-card>
                <x-post-card ></x-post-card>
                <x-post-card ></x-post-card>
                <x-post-card ></x-post-card>
            </div>
            <div class="hidden lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 panel" id="product">
                <x-product-card  p_url="product/show"></x-product-card>
                <x-product-card ></x-product-card>
                <x-product-card ></x-product-card>
                <x-product-card ></x-product-card>
                <x-product-card ></x-product-card>
                <x-product-card ></x-product-card>
                <x-product-card ></x-product-card>
            </div>
        </div>
    </div>
</x-master>
<script>
    $(function(){
        $('.panel-link').click(function(){
            let panel = $(this).data('target');
            $('.panel').addClass('hidden');
            $(panel).removeClass('hidden').addClass('grid');
        })
    })
</script>
