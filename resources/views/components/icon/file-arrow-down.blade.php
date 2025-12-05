@props([
    'class' => ""
])
<i {{ $attributes->class(["fa-solid", "fa-file-arrow-down"])->merge([$class]) }}></i>
