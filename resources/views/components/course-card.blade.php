@props([
    'badge'=>'課程',
    'tag'=>'課程類型',
    'title'=>'課程標題',
    'desc'=>'課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述課程敘述',
    'img'=>'https://picsum.photos/id/54/800',
    'url'=>'#'
])
<div {{ $attributes->merge(['class'=>'p-4']) }}>
    <div class="rounded-lg overflow-clip bg-zinc-100 h-full relative">
        @if($badge == '直播')
        <div class="absolute bg-focus-p text-zinc-100 text-sm p-1">{{$badge}}</div>
        @endif
        <div class="aspect-video">
            <img src="{{$img}}" alt="" class="cover">
        </div>
        <div class=" p-4 space-y-3 text-center">
            <a href="{{$url}}">
                <div><small class="text-zinc-300">#{{$tag}}</small></div>
                <h3 class="text-lg font-bold">{{$title}}</h3>
                <p>
                    {!!Str::limit($desc,60)!!}
                </p>
            </a>
        </div>
    </div>
</div>