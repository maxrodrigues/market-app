<div class="w-full py-3 pl-3 text-gray-600 hover:bg-sky-300 hover:rounded-lg hover:text-sky-700">
    <a href="#" class="">
        <x-dynamic-component :component="'icon.' . $icon" class="text-xl mr-2"/>
        <span>{{ $name }}</span>
    </a>
</div>
