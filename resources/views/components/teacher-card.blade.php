@props([
    'tag'=>'預設類型',
    't_name'=>'預設姓名',
    't_skill'=>['塔羅','頌缽'],
    't_img'=>'https://picsum.photos/id/40/400',
    't_url'=>'#',
])
<div {{$attributes->merge(['class'=>'p-4'])}}>
    <div class="bg-zinc-100 rounded p-4">
        <a href="{{$t_url}}">

            <div class="aspect-square mb-4"><img src="{{$t_img}}" alt="" class="rounded-lg cover"></div>
            <div class="text-center">
                <div><small class="text-zinc-300">#{{$tag}}</small></div>
                <h3 class="text-lg font-bold">{{$t_name}}</h3>
                @foreach($t_skill as $s)
                <ul class="text-zinc-500">
                    <li>{{$s}}</li>
                </ul>
                @endforeach
            </div>
        </a>
    </div>
</div>