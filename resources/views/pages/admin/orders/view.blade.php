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
                                <th class="py-3 px-5 text-right ">Subtotal</th>
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
                                <td class="py-3 px-5 text-right font-semibold">$2.68</td>
                            </tr>
                        @endfor
                        </tbody>
                        <tfoot class="bg-gray-100">
                            <tr class="">
                                <td></td>
                                <td colspan="2" class="pt-10 pb-1 text-gray-600">Subtotal:</td>
                                <td class="pt-10 pb-1 px-5 text-right font-semibold">$81.07</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2" class="py-1 text-gray-600">Shipping:</td>
                                <td class="py-1 px-5 text-right font-semibold">$5.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2" class="py-1 text-gray-600">Tax:</td>
                                <td class="py-1 px-5 text-right font-semibold">$3.43</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" class="py-1 pr-5 text-right">
                                    <hr class="text-gray-300"/>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2" class="py-5 font-semibold">Total:</td>
                                <td class="py-3 px-5 text-right font-semibold">$89.50</td>
                            </tr>
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
                    <div class="flex py-2 border-b border-gray-300 space-x-3 ">
                        <img src="https://i.pravatar.cc/150?img=49" class="rounded-full w-14" />
                        <div class="flex flex-col">
                            <span class="text-sky-600 font-semibold">Olivia Smith</span>
                            <span class="text-sm text-gray-400">customer@example.com</span>
                        </div>
                    </div>
                    <div class="flex flex-col border-b border-gray-300 py-2 space-y-1">
                        <span class="font-semibold">Shipping Address</span>
                        <span class="text-sm text-gray-500">123 Maple Street</span>
                        <span class="text-sm text-gray-500">Springfield, IL 62704</span>
                        <span class="text-sm text-gray-500">United States</span>
                    </div>
                    <div class="flex flex-col border-b border-gray-300 py-2">
                        <span class="font-semibold">Billing Address</span>
                        <span class="text-sm text-gray-500">Same as shipping address</span>
                    </div>
                    <div class="flex flex-col py-2 space-y-2">
                        <span class="font-semibold">Payment Method</span>
                        <div class="flex space-x-2">
                            <div>
                                <!-- Change icon for image -->
                                <i class="fa-brands fa-cc-visa text-xl"></i>
                            </div>
                            <span class="text-gray-500">
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
