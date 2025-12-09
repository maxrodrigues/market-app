<x-layouts.admin-page>
    <!-- -->
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold mb-1">Orders Management</h1>
            <span class="text-sm text-gray-600">View, filter and manage all customers orders.</span>
        </div>
        <div class="flex items-center space-x-6 w-1/3">
            <button class="bg-white hover:bg-gray-300 py-2 px-4 w-full rounded-lg font-semibold text-black cursor-pointer border border-gray-300">
                <x-icon.print class="" />
                Print Invoice
            </button>
            <button class="bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                <x-icon.file-arrow-down />
                Process Refund
            </button>
        </div>
    </div>

    <!-- -->
    <div class="mt-10 grid grid-cols-12 gap-4">
        <div class="col-span-9">
            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Purchased Items (5)</span>
                </div>
                <div class="w-full">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100 text-gray-400 uppercase text-sm font-bold">
                                <th class="py-3 px-5">Product</th>
                                <th class="py-3 px-5">Quantity</th>
                                <th class="py-3 px-5">Price</th>
                                <th class="py-3 px-5">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i = 1; $i < 4; $i++)
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-5">
                                    <div class="flex space-x-2">
                                        <img src="{{ asset('img/fresh-bananas.jpg') }}" class="w-14 rounded"/>
                                        <div class="flex flex-col space-y-1 items-center justify-start">
                                            <span class="w-full font-semibold">Organic Bananas</span>
                                            <span class="w-full text-xs">SKU: FR-001</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 text-center">2</td>
                                <td class="py-3 text-center">$1.29</td>
                                <td class="py-3 text-center font-semibold">$2.68</td>
                            </tr>
                        @endfor
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Order History</span>
                </div>
            </div>
        </div>

        <div class="col-span-3">
            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Order Status</span>
                    <span class="bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full text-xs">Completed</span>
                </div>
                <div class="w-full py-3 px-5">
                    <div class="flex flex-col mb-4 space-y-1">
                        <span class="text-gray-400 text-sm">Update Status</span>
                        <select class="py-2 px-4 rounded bg-gray-100 focus:outline-none">
                            <option>Processing</option>
                            <option>Cancelled</option>
                            <option>Pending</option>
                            <option>Delivered</option>
                        </select>
                    </div>
                    <button class="w-full bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                        Update
                    </button>
                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Customer</span>
                </div>
                <div class="w-full py-3 px-5">
                    <div>
                        <img src="" />
                        <div>
                            <span>Olivia Smith</span>
                            <span>customer@example.com</span>
                        </div>
                    </div>
                    <div>
                        <span>Shipping Address</span>
                        <span>123 Maple Street</span>
                        <span>Springfield, IL 62704</span>
                        <span>United States</span>
                    </div>
                    <div>
                        <span>Billing Address</span>
                        <span>Same as shipping address</span>
                    </div>
                    <div>
                        <span>Payment Method</span>
                        <div>
                            <div>
                                <i class="fa-brands fa-cc-visa"></i>
                            </div>
                            <span>
                                Visa ending in 1234
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Internal Notes</span>
                </div>
                <div class="w-full py-3 px-5 space-y-2">
                    <textarea class="w-full bg-gray-100 rounded p-3 focus:outline-none" rows="4" placeholder="Add note for internal use..."></textarea>
                    <button class="w-full bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                        Add Note
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-page>
