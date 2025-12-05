<x-layouts.admin>
    <div class="h-screen grid grid-cols-6 gap-4">
        <div class="col-span-1 bg-white flex flex-col justify-between px-5">
            <x-navbar.nav />
        </div>
        <div class="col-span-5 py-5 px-6 mt-5 overflow-y-scroll">
            {{ $slot }}
        </div>
    </div>
</x-layouts.admin>
