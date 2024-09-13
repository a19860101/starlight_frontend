@props([
    'title' => '標題',
    'button' => '按鈕內容',
    'type' => 'success',
    'id' => 'my-template'
])
<template id={{$id}}>
    <swal-title>
        {{$title}}
    </swal-title>
    <swal-html>
        {{$slot}}
    </swal-html>
    <swal-button type="confirm" >
        {{$button}}
    </swal-button>
    <swal-icon type={{$type}}></swal-icon>
</template>