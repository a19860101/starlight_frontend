@props([
    'tag'=>'預設類型',
    'p_name'=>'預設商品名稱',
    'p_price'=>299,
    'p_sale'=> 99,
    'p_img'=>'https://picsum.photos/id/43/800',
    'p_url'=>'#',
])
<div {{$attributes->merge(['class'=>'p-4'])}}>
    <div class="bg-zinc-100 rounded p-4">
        <a href="{{$p_url}}">

            <div class="aspect-square mb-4"><img src="{{$p_img}}" alt="" class="rounded-lg cover"></div>
            <div class="text-center">
                <div><small class="text-zinc-300">#{{$tag}}</small></div>
                <h3 class="text-lg font-bold">{{$p_name}}</h3>
                <div><del class="text-zinc-300"><small>NT.{{$p_price}}</small></del></div>
                <div class="text-secondary font-bold">NT.{{$p_sale}}</div>
            </div>
        </a>
    </div>
</div>