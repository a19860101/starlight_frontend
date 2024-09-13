@props([
    'crumb' => [
        ['name'=>'講師介紹','url'=>'#'],
        ['name'=>'講師','url'=>'#']
    ],
])
<div class="flex text-zinc-500">
    <ul class="p-4 text-sm flex">
        @foreach($crumb as $c)
        <li class="after:content-['>'] after:px-1"><a href="{{$c['url']}}">{{$c['name']}}</a></li>
        @endforeach
    </ul>
</div>