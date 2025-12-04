@props([
    'name',
    'haveFilterByDays',
])
<div class="flex justify-between items-center">
    <div class="flex flex-col">
        <h1 class="text-3xl font-bold mb-1">{{ $name }}</h1>
        <span class="text-sm text-gray-600">Here's a overview of your store's performance</span>
    </div>
    <div class="flex items-center space-x-8">
        <div class="bg-slate-300 rounded-lg py-1 px-3 text-gray-700">
            <button class="py-1 px-2 hover:bg-white hover:rounded-lg">Today</button>
            <button class="py-1 px-2 bg-white rounded-lg">7 Days</button>
            <button class="py-1 px-2 hover:bg-white hover:rounded-lg">30 Days</button>
        </div>
        <div class="flex items-center space-x-5">
            <div class="space-x-1">
                <x-icon.magnifying-glass class="text-xl text-gray-600" />
                <x-icon.bells class="text-xl text-gray-600" />
            </div>
            <div class="bg-red-300 px-3 py-3 rounded-full text-center">
                <i class="fa-solid fa-user-astronaut text-2xl text-red-600"></i>
            </div>
        </div>
    </div>
</div>
