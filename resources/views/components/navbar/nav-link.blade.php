@props([
    'name',
    'icon',
    'route',
])

<a href="{{ route($route) }}" class="">
    <x-dynamic-component :component="'icon.' . $icon" class="text-xl mr-2"/>
    <span>{{ $name }}</span>
</a>
