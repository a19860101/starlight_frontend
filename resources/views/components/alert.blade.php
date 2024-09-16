@props([
    'title' => '標題',
    'button' => '按鈕內容',
    'cancel' => '',
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
    @if($cancel != '')
    <swal-button type="cancel" >
        {{$cancel}}
    </swal-button>
    @endif
    <swal-icon type={{$type}}></swal-icon>
</template>