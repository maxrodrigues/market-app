<x-layouts.admin-page>
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold mb-1">Product Catalog</h1>
        </div>
        <div class="flex items-center space-x-8 w-1/3">
            <button class="bg-white hover:bg-gray-300 py-2 px-4 w-full rounded-lg font-semibold text-black cursor-pointer border border-gray-300">
                Manage Categories
            </button>
            <button class="bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                <i class="fa-solid fa-plus"></i>
                Add New Product
            </button>
        </div>
    </div>
    <div class="mt-10 grid grid-cols-12 gap-4">
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2 col-span-12">
            <div class="font-bold text-xl w-full space-x-3 grid grid-cols-12">
                <div class="relative col-span-5">
                    <x-icon.magnifying-glass class="absolute text-gray-300 top-3.5 left-3 text-sm"/>
                    <input
                        type="text"
                        placeholder="Search by Order ID, Customer name..."
                        class="bg-gray-100 pl-9 py-3 text-sm rounded-lg w-full text-gray-600 placeholder:text-sm placeholder:text-gray-300 focus:outline-2 focus:outline-gray-400"
                    />
                </div>
                <div class="relative col-span-2">
                    <x-icon.fa-arrow-down-wide-short class="text-sm text-gray-300 absolute top-4 left-3"/>
                    <select class="bg-gray-100 text-gray-300 w-full pl-8 py-3 rounded-lg text-sm focus:outline-2 focus:outline-gray-400 focus:text-gray-600">
                        <option>Category</option>
                    </select>
                </div>
                <div class="relative col-span-2">
                    <x-icon.fa-arrow-down-wide-short class="text-sm text-gray-300 absolute top-4 left-3"/>
                    <select class="bg-gray-100 text-gray-300 w-full pl-8 py-3 rounded-lg text-sm focus:outline-2 focus:outline-gray-400 focus:text-gray-600">
                        <option>Status</option>
                    </select>
                </div>
            </div>
            <div class="mt-5    w-full">
                <table class="w-full">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm font-bold">
                        <td class="py-3 px-5">Product Name</td>
                        <td class="py-3 px-5">Category</td>
                        <th class="py-3 px-5">Price</th>
                        <th class="py-3 px-5">Stock</th>
                        <th class="py-3 px-5">Status</th>
                        <th class="py-3 px-5">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 1; $i < 10; $i++)
                        <tr class="border-b border-gray-300">
                            <td class="py-4 px-5">
                                <div class="flex space-x-2 items-center">
                                    <img src="{{ asset('img/fresh-bananas.jpg') }}" class="w-14 rounded"/>
                                    <div class="flex flex-col space-y-1 items-center justify-start">
                                        <span class="w-full font-semibold">Organic Bananas</span>
                                        <span class="w-full text-xs">SKU: FR-001</span>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-5 text-gray-400">Fruits</td>
                            <td class="py-4 px-5 text-center font-semibold text-gray-400">$2.76</td>
                            <td class="py-4 px-5 text-center text-gray-400">120 units</td>
                            <td class="py-4 px-5 text-center text-xs">
                                <span class="bg-green-100 text-green-600 font-semibold px-4 py-1 rounded-full">Completed</span>
                            </td>
                            <td class="text-center">
                                <div class="flex justify-center items-center space-x-2">
                                    <a href="{{ route('admin.orders.view') }}">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <form action="#">
                                        <button type="submit">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
            <div>

            </div>
        </div>
    </div>
</x-layouts.admin-page>
