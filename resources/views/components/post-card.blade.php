@props(
    [
        'url' => '#'
    ]
)
<div {{$attributes->merge(['class'=>'p-4'])}}>
    <div class="bg-zinc-100 rounded-lg p-4">
        <div class="flex justify-between items-center">
            <div class="w-16 aspect-square bg-amber-200 rounded"></div>
            <div class="text-6xl font-bold text-amber-200 font-display pr-2">01</div>
        </div>
        <div><small class="text-zinc-300">2024年3月1日</small></div>
        <h3 class="text-lg font-bold"><a href="{{$url}}">文章標題</a></h3>
        <div>
            <p class="leading-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa vitae in dolorum eum distinctio cum accusamus amet vel? 
            </p>
        </div>
    </div>
</div>