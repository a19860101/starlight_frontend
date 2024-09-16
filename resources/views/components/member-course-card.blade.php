@props([
    'tags'=>['預錄','已開課'],
    'title' => '課程標題12345',
    'progress' => '40%',
    'url' => '/member/course/show'
])
<div>
    <div class="border border-zinc-300 rounded-lg overflow-clip">
        <div class="aspect-video">
            <img src="https://picsum.photos/id/22/800" alt="" class="cover">
        </div>
        <div class="flex gap-x-2 p-2">
            @foreach($tags as $tag)
            <a href="#" class="text-white bg-amber-500 p-1 text-sm">{{$tag}}</a>
            @endforeach
        </div>
        <div class="p-2">
            <h4 class="font-medium mb-6">{{$title}}</h4>
            <div class='space-y-2'>
                <small class="text-zinc-400">課程進度</small>
                <div class="flex items-center justify-between">
                    <div class="w-full bg-zinc-300 h-2 rounded-full">
                        <div class=" bg-amber-400 h-2 rounded-full" style="width:{{$progress}}"></div>
                    </div>
                    <span for="course-1" class="ml-2 text-sm">{{$progress}}</span>
                </div>
                <a href="{{$url}}" target="_blank" class="w-full text-center bg-amber-200 block py-2 rounded hover:bg-amber-100 duration-300">開始上課</a>
            </div>
        </div>
    </div>
</div>