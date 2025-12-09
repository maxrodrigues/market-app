<x-layouts.admin-page>
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold mb-1">Orders Management</h1>
            <span class="text-sm text-gray-600">View, filter and manage all customers orders.</span>
        </div>
        <div class="flex items-center space-x-8">
            <button class="bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                <x-icon.file-arrow-down />
                Export Data
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
                        <option>Status</option>
                        <option>Completed</option>
                        <option>Processing</option>
                        <option>Cancelled</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <input
                        type="date"
                        class="bg-gray-100 py-3 px-3 text-sm rounded-lg w-full text-gray-400"
                    />
                </div>
            </div>
            <div class="mt-5    w-full">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Order ID</th>
                            <th class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Customer</th>
                            <th class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Date</th>
                            <th class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Total</th>
                            <th class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Status</th>
                            <th class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1; $i < 10; $i++)
                            <tr class="border-b border-gray-300 text-sm">
                                <td class="py-4 px-5 font-semibold text-center">#FC3852</td>
                                <td class="py-4 px-5 ">Jane Cooper</td>
                                <td class="py-4 px-5 text-center">Oct 26, 2025</td>
                                <td class="py-4 px-5 text-center">$125.80</td>
                                <td class="py-4 px-5 text-center">
                                    <span class="bg-green-100 text-green-600 font-semibold px-4 py-1 rounded-full">Completed</span>
                                </td>
                                <td class="text-center">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="{{ route('admin.orders.view') }}">
                                            <i class="fa-solid fa-eye"></i>
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
