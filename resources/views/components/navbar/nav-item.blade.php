@props([
    'isActive' => false,
    'icon',
    'name'
])

@if($isActive)
    <div class="w-full py-3 pl-3 text-gray-600 bg-sky-300 rounded-lg text-sky-700">
        <x-navbar.nav-link icon="{{ $icon }}" name="{{ $name }}"/>
    </div>
@else
    <div class="w-full py-3 pl-3 text-gray-600 hover:bg-sky-300 hover:rounded-lg hover:text-sky-700">
        <x-navbar.nav-link icon="{{ $icon }}" name="{{ $name }}"/>
    </div>
@endif
