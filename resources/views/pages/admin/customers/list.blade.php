<x-layouts.admin-page>
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold mb-1">Customers Management</h1>
            <span class="text-sm text-gray-600">View, manage, and edit customer accounts.</span>
        </div>
        <div class="flex items-center space-x-8">
            <button class="bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                <i class="fa-solid fa-plus"></i>
                Add New Customer
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
                        <td class="py-3 px-5">Customer Name</td>
                        <td class="py-3 px-5">E-mail</td>
                        <th class="py-3 px-5">Registration Date</th>
                        <th class="py-3 px-5">Total Orders</th>
                        <th class="py-3 px-5">Status</th>
                        <th class="py-3 px-5">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 1; $i < 10; $i++)
                        <tr class="border-b border-gray-300">
                            <td class="py-4 px-5 font-semibold">Jane Doe</td>
                            <td class="py-4 px-5 text-gray-400">jane.d@example.com</td>
                            <td class="py-4 px-5 text-center text-gray-400">2025-10-27</td>
                            <td class="py-4 px-5 text-center text-gray-400">12 Orders</td>
                            <td class="py-4 px-5 text-center text-xs">
                                <span class="bg-green-100 text-green-600 font-semibold px-4 py-1 rounded-full">Active</span>
                            </td>
                            <td class="text-center">
                                <div class="flex justify-center items-center space-x-2">
                                    <a href="{{ route('admin.customers.view') }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
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
