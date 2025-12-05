<x-layouts.admin-page>
    <x-admin.title name="Dashboard"/>
    <div class="mt-10 grid grid-cols-4 gap-4">
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2">
            <span class="text-gray-600">Total Revenue</span>
            <span class="font-bold text-3xl">$128,435.50</span>
            <div class="text-xs text-green-600 font-semibold">
                <i class="fa-solid fa-arrow-up"></i>
                11,2%
            </div>
        </div>
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2">
            <span class="text-gray-600">New Orders</span>
            <span class="font-bold text-3xl">1,204</span>
            <div class="text-xs text-green-600 font-semibold">
                <i class="fa-solid fa-arrow-up"></i>
                5,8%
            </div>
        </div>
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2">
            <span class="text-gray-600">Low Stock Items</span>
            <span class="font-bold text-3xl">27</span>
            <div class="text-xs text-yellow-600 font-semibold">
                <i class="fa-solid fa-warning"></i>
                Needs attention
            </div>
        </div>
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2">
            <span class="text-gray-600">New Customers</span>
            <span class="font-bold text-3xl">89</span>
            <div class="text-xs text-red-600 font-semibold">
                <i class="fa-solid fa-arrow-down"></i>
                15,0%
            </div>
        </div>
    </div>
    <div class="mt-10 grid grid-cols-3 gap-4">
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2 col-span-2">
            <div class="font-bold text-xl">
                Revenue Overtime
            </div>
        </div>
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2 col-span-1">
            <div class="font-bold text-xl">
                Low Stock Alerts
            </div>
            <div class="flex flex-col w-full space-y-3 mt-5">
                <div class="flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="font-semibold">Organic Bananas</span>
                        <span class="text-xs text-gray-400">SKU: FR-001</span>
                    </div>
                    <span class="text-yellow-500 font-semibold">5 left</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="font-semibold">Whole Milk, 1 Gallon</span>
                        <span class="text-xs text-gray-400">SKU: DY-012</span>
                    </div>
                    <span class="text-yellow-500 font-semibold">8 left</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="font-semibold">Sourdough Bread</span>
                        <span class="text-xs text-gray-400">SKU: BK-005</span>
                    </div>
                    <span class="text-red-500 font-semibold">2 left</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="font-semibold">Free-Range Eggs</span>
                        <span class="text-xs text-gray-400">SKU: DY-002</span>
                    </div>
                    <span class="text-yellow-500 font-semibold">9 left</span>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10 grid grid-cols-12 gap-4">
        <div class="bg-white py-5 px-6 flex flex-col items-start rounded-lg space-y-2 col-span-12">
            <div class="font-bold text-xl">
                Latest Orders
            </div>
            <div class="w-full">
                <table class="w-full">
                    <thead>
                        <tr>
                            <td class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Order ID</td>
                            <td class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Customer</td>
                            <td class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Date</td>
                            <td class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Total</td>
                            <td class="bg-gray-200 py-3 px-5 text-gray-600 uppercase text-sm font-bold">Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300 text-sm">
                            <td class="py-4 px-5 font-semibold">#FC3852</td>
                            <td class="py-4 px-5 ">Jane Cooper</td>
                            <td class="py-4 px-5 ">Oct 26, 2025</td>
                            <td class="py-4 px-5 ">$125.80</td>
                            <td class="py-4 px-5 ">
                                <span class="bg-green-100 text-green-600 font-semibold px-4 py-1 rounded-full">Completed</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 text-sm">
                            <td class="py-4 px-5 font-semibold">#FC3851</td>
                            <td class="py-4 px-5 ">Wade Warren</td>
                            <td class="py-4 px-5 ">Oct 26, 2025</td>
                            <td class="py-4 px-5 ">89.50</td>
                            <td class="py-4 px-5 ">
                                <span class="bg-blue-100 text-blue-600 font-semibold px-4 py-1 rounded-full">Processing</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 text-sm">
                            <td class="py-4 px-5 font-semibold">#FC3850</td>
                            <td class="py-4 px-5 ">Ester Howard</td>
                            <td class="py-4 px-5 ">Oct 26, 2025</td>
                            <td class="py-4 px-5 ">$210.00</td>
                            <td class="py-4 px-5 ">
                                <span class="bg-green-100 text-green-600 font-semibold px-4 py-1 rounded-full">Completed</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 text-sm">
                            <td class="py-4 px-5 font-semibold">#FC3849</td>
                            <td class="py-4 px-5 ">Robert Fox</td>
                            <td class="py-4 px-5 ">Oct 26, 2025</td>
                            <td class="py-4 px-5 ">$45.20</td>
                            <td class="py-4 px-5 ">
                                <span class="bg-red-100 text-red-600 font-semibold px-4 py-1 rounded-full">Cancelled</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 text-sm">
                            <td class="py-4 px-5 font-semibold">#FC3848</td>
                            <td class="py-4 px-5 ">Howard Wade</td>
                            <td class="py-4 px-5 ">Oct 26, 2025</td>
                            <td class="py-4 px-5 ">$93.24</td>
                            <td class="py-4 px-5 ">
                                <span class="bg-red-100 text-red-600 font-semibold px-4 py-1 rounded-full">Cancelled</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin-page>
