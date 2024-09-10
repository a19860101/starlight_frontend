<x-master>
    <x-breadcrumb></x-breadcrumb>    
    <div class="container flex flex-wrap *:px-4 *:mb-6">
        <div class="w-1/3 mb-6">
            <img src="https://picsum.photos/id/87/800" alt="">
        </div>
        <div class="w-2/3 space-y-4 text-zinc-100 px-8">
            <a href="#" class="text-zinc-500">#類型</a>
            <div>
                講師姓名：<br>John Doe
            </div>
            <div>
                講師專長：
                <ul>
                    <li>專長</li>
                    <li>專長</li>
                    <li>專長</li>
                    <li>專長</li>
                </ul>
            </div>
        </div>
        <h3 class="w-full text-3xl font-bold text-zinc-100">講師經歷</h3>
        <div class="w-full">
            <hr>
        </div>
        <div class="w-full text-zinc-100 leading-8">
            Lorem ipsum dolor sit amet, consect etur adipisicing elit. Voluptatem sunt architecto dolores, nobis necessitatibus pariatur id maxime nesciunt dicta laudantium, earum odit reiciendis placeat ipsa expedita minima fugiat magni totam vitae. Eveniet quidem nobis optio nisi facilis temporibus distinctio nesciunt fuga ea, velit accusantium fugiat dignissimos odio dicta cum numquam odit excepturi deleniti! Voluptatibus dolorem magni consequuntur aliquam voluptas in quaerat quasi qui eaque minima dolores temporibus, ipsum tenetur amet eligendi numquam maiores soluta nobis culpa. Tempore doloribus maiores quos.
        </div>
        <h3 class="w-full text-3xl font-bold text-zinc-100">已開課程</h3>
        <div class="w-full">
            <hr>
        </div>
        <x-course-card class="w-1/4"></x-course-card>
        <x-course-card class="w-1/4"></x-course-card>
        <x-course-card class="w-1/4"></x-course-card>
        <x-course-card class="w-1/4"></x-course-card>
        <h3 class="w-full text-3xl font-bold text-zinc-100">合作文章</h3>
        <div class="w-full">
            <hr>
        </div>
        <x-post-card class="w-1/4"></x-post-card>
        <x-post-card class="w-1/4"></x-post-card>
        <x-post-card class="w-1/4"></x-post-card>
        <x-post-card class="w-1/4"></x-post-card>
    </div>
</x-master>