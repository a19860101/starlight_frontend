<x-master>
    {{-- breadcrumb --}}
    <x-breadcrumb
        {{-- :crumb="" 送關聯陣列 --}}
    ></x-breadcrumb>
    <div class="container flex flex-wrap">
        <h2 class="text-4xl font-bold text-zinc-100 p-4 ">講師介紹</h2>
    </div>
    <div class="container flex flex-wrap px-4 mb-8">
        @php
        $tags = [
            ['tag_name' => '療癒','tag_url'=>'#'],
            ['tag_name' => '塔羅','tag_url'=>'#'],
            ['tag_name' => '盧恩','tag_url'=>'#'],
        ]
        @endphp
        @foreach($tags as $tag)
        <x-tag>
            <x-slot:url>{{$tag["tag_url"]}}</x-slot:url>
            #{{$tag["tag_name"]}}
        </x-tag>
        @endforeach
    </div>
    <div class="container flex flex-wrap py-4">
        @php
        $teachers = [
            ['tag' => '講師類型','t_name' => 'John Doe','t_img'=>'https://picsum.photos/id/99/600','t_url'=>'/teacher/show','t_skill'=>['塔羅','療癒']],
            ['tag' => '講師類型','t_name' => 'Jane Doe','t_img'=>'https://picsum.photos/id/49/600','t_url'=>'#','t_skill'=>['塔羅','療癒']],
            ['tag' => '講師類型','t_name' => 'Max Doe','t_img'=>'https://picsum.photos/id/19/600','t_url'=>'#','t_skill'=>['塔羅','療癒']],
            ['tag' => '講師類型','t_name' => 'K Doe','t_img'=>'https://picsum.photos/id/59/600','t_url'=>'#','t_skill'=>['塔羅','療癒']],
        ]
        @endphp
        @foreach($teachers as $t)
        <x-teacher-card
            class="lg:w-1/4 md:w-1/3 w-1/2"
            :tag="$t['tag']"
            :t_name="$t['t_name']"
            :t_skill="$t['t_skill']"
            :t_img="$t['t_img']"
            :t_url="$t['t_url']"
        ></x-teacher-card>
        @endforeach
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
        <x-teacher-card class="lg:w-1/4 md:w-1/3 w-1/2"></x-teacher-card>
    </div>

</x-master>