<x-master>
    <header class="h-[600px]">
        <img src="/images/banner.png" alt="" class="cover">
        <img src="/images/banner.png" alt="" class="cover">
        <img src="/images/banner.png" alt="" class="cover">
    </header>
    <section class="py-12">
        <div class="container flex flex-wrap">
            <h2 class="text-4xl font-bold text-center w-full mb-8">文章專區</h2>
            <x-post-card class="w-1/2"></x-post-card>
            <x-post-card class="w-1/2"></x-post-card>
            <div class="w-full text-center py-8">
                <a href="#" class="btn btn-primary">More</a>
            </div>

        </div>
    </section>
    <section class="py-12">
        <div class="container flex flex-wrap">
            <h2 class="text-4xl font-bold text-center w-full mb-8">直播課程</h2>
            @php
                $datas = [
                    [
                        'badge' => '直播',
                        'tag' => '課程類型A',
                        'title' => '課程標題',
                        'desc' => '課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述',
                        'img' => 'https://picsum.photos/id/40/800/600',
                        'url' => '#'
                    ],
                    [
                        'badge' => '直播',
                        'tag' => '課程類型2',
                        'title' => '課程標題B',
                        'desc' => '課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述',
                        'img' => 'https://picsum.photos/id/10/800/600',
                        'url' => '#'
                    ],
                    [
                        'badge' => '直播',
                        'tag' => '課程類型3',
                        'title' => '課程標題C',
                        'desc' => '課程敘述程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述',
                        'img' => 'https://picsum.photos/id/20/800/600',
                        'url' => '#'
                    ],
                    [
                        'badge' => '直播',
                        'tag' => '課程類型D',
                        'title' => '課程標題4',
                        'desc' => '課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述',
                        'img' => 'https://picsum.photos/id/30/800/600',
                        'url' => '#'
                    ],
                ]
            @endphp
            @foreach($datas as $data)
            <x-course-card
                class="w-1/4 p-4"
                :badge="$data['badge']"
                :tag="$data['tag']"
                :title="$data['title']"
                :desc="$data['desc']"
                :img="$data['img']"
                :url="$data['url']"
            ></x-course-card>
            @endforeach

            <div class="w-full text-center py-8">
                <a href="#" class="btn btn-focus-p">More</a>
            </div>
        </div>
    </section>
    <hr>
    <section class="py-12">
        <div class="container flex flex-wrap">
            <h2 class="text-4xl font-bold text-center w-full mb-8">預錄課程</h2>
            @foreach($datas as $data)
            <x-course-card
                class="w-1/4 p-4"
                badge="預錄"
                :tag="$data['tag']"
                :title="$data['title']"
                :desc="$data['desc']"
                :img="$data['img']"
                :url="$data['url']"
            ></x-course-card>
            @endforeach
            <div class="w-full text-center py-8">
                <a href="#" class="btn btn-focus-p">More</a>
            </div>
        </div>
    </section>
    <section class="py-12">
        <div class="container flex flex-wrap">
            <h2 class="text-4xl font-bold text-center w-full mb-8">線上購物</h2>
            @php
                $products = [
                    [
                        'tag' => '商品類型',
                        'p_name' => '商品名稱',
                        'p_img' => 'https://picsum.photos/id/28/800/600',
                        'p_price' => '99999',
                        'p_sale' => '999',
                        'p_url' => '#'
                    ],
                    [
                        'tag' => '商品類型',
                        'p_name' => '商品名稱',
                        'p_img' => 'https://picsum.photos/id/98/800/600',
                        'p_price' => '99999',
                        'p_sale' => '999',
                        'p_url' => '#'
                    ],
                    [
                        'tag' => '商品類型',
                        'p_name' => '商品名稱',
                        'p_img' => 'https://picsum.photos/id/58/800/600',
                        'p_price' => '99999',
                        'p_sale' => '999',
                        'p_url' => '#'
                    ],
                    [
                        'tag' => '商品類型',
                        'p_name' => '商品名稱',
                        'p_img' => 'https://picsum.photos/id/22/800/600',
                        'p_price' => '99999',
                        'p_sale' => '999',
                        'p_url' => '#'
                    ]
                ]
            @endphp
            @foreach($products as $p)
            <x-product-card
                class="w-1/4"
                :tag="$p['tag']"
                :p_name="$p['p_name']"
                :p_img="$p['p_img']"
                :p_price="$p['p_price']"
                :p_sale="$p['p_sale']"
                :p_url="$p['p_url']"
            ></x-product-card>
            @endforeach

            <div class="w-full text-center py-8">
                <a href="#" class="btn btn-primary">More</a>
            </div>
        </div>
    </section>

</x-master>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<script>
    $(function(){
        $('header').slick({
            autoplay: true
        });
    })
</script>
