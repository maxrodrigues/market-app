<x-layouts.admin-page>
    <!-- -->
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold mb-1">Jane Doe</h1>
            <span class="text-sm text-gray-600">Customer ID: CUST-8A67B5</span>
        </div>
        <div class="flex items-center space-x-6">
            <button class="bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                <i class="fa-regular fa-envelope"></i>
                Send Message
            </button>
        </div>
    </div>

    <div class="mt-10 grid grid-cols-12 gap-4">
        <div class="col-span-3">
            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Personal Information</span>
                </div>
                <div class="w-full py-3 px-5 flex flex-col space-y-2">
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Email Address</span>
                        <span class="font-medium">jane.doe@example.com</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Phone Number</span>
                        <span class="font-medium">+1 (555) 123-4567</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Join Date</span>
                        <span class="font-medium">January 15, 2022</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Last Login</span>
                        <span class="font-medium">2 hours ago</span>
                    </div>
                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Loyalty Program</span>
                </div>
                <div class="w-full py-3 px-5 flex flex-col space-y-2">
                    <div class="flex justify-between items-center">
                        <span class="text-sm">Tier</span>
                        <span class="text-sm font-medium text-yellow-700">Gold Member</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm">Points Balance</span>
                        <span class="text-sm font-medium text-blue-700">4,820 pts</span>
                    </div>
                    <div class="bg-gray-300 rounded-lg">
                        <div class="h-2 bg-blue-700 rounded-lg" style="width: 45%"></div>
                    </div>
                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Internal Notes</span>
                </div>
                <div class="w-full py-3 px-5">
                    <div class="space-y-4 border-b border-gray-300 pb-6">
                        <div class="flex justify-start space-x-2">
                            <img src="https://i.pravatar.cc/50?img=69" class="rounded-full w-12 h-12">
                            <div class="">
                                <p class="text-sm text-justify mb-1">Lorem ipsum lacinia inceptos porttitor potenti himenaeos interdum habitasse, egestas quisque ac cursus ut feugiat mollis habitant, tellus ante bibendum aenean sagittis risus tristique.</p>
                                <p class="text-xs text-gray-600 font-medium">Admin Smith - <span class="font-light">Nov 2, 2023, 10:53 AM</span></p>
                            </div>
                        </div>
                        <div class="flex justify-start space-x-2">
                            <img src="https://i.pravatar.cc/50?img=39" class="rounded-full w-12 h-12">
                            <div class="">
                                <p class="text-sm text-justify mb-1">Lorem ipsum lacinia inceptos porttitor potenti himenaeos interdum habitasse, egestas quisque ac cursus ut feugiat mollis habitant.</p>
                                <p class="text-xs text-gray-600 font-medium">Jon Doe - <span class="font-light">Nov 15, 2023, 10:53 AM</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col py-4 space-y-3">
                        <textarea
                            rows="3"
                            placeholder="Type your note here..."
                            class="bg-gray-100 resize-none p-3 border border-gray-300 rounded text-sm focus:outline-none"
                        ></textarea>
                        <button class="bg-sky-600 hover:bg-sky-800 py-2 px-4 w-full rounded-lg font-semibold text-white cursor-pointer">
                            Add Note
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-9">
            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between px-5 w-full space-x-3 border-b border-gray-400">
                    <ul class="flex flex-wrap">
                        <li class="inline-block p-4 border-b font-medium text-blue-700 border-blue-700">
                            Order History
                        </li>
                        <li class="inline-block p-4 border-b border-transparent font-medium hover:text-blue-700 hover:border-blue-700">
                            Saved Address
                        </li>
                        <li class="inline-block p-4 border-b border-transparent font-medium hover:text-blue-700 hover:border-blue-700">
                            Payment Methods
                        </li>
                    </ul>
                </div>
                <div class="w-full py-3 px-5 flex flex-col space-y-2">
                    <table class="w-full">
                        <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm font-bold">
                            <td class="py-3 px-5">Order ID</td>
                            <td class="py-3 px-5">Date</td>
                            <th class="py-3 px-5">Total</th>
                            <th class="py-3 px-5">Status</th>
                            <th class="py-3 px-5"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i = 1; $i < 5; $i++)
                            <tr class="border-b border-gray-300">
                                <td class="py-4 px-5 font-semibold">#ORD-2023-1204</td>
                                <td class="py-4 px-5 text-gray-400">Oct 26, 2023</td>
                                <td class="py-4 px-5 text-center text-gray-400">$146.98</td>
                                <td class="py-4 px-5 text-center text-xs">
                                    <span class="bg-green-100 text-green-600 font-semibold px-4 py-1 rounded-full">Delivered</span>
                                </td>
                                <td class="text-center">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="{{ route('admin.orders.view') }}">
                                            <i class="fa-solid fa-ellipsis"></i>
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
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Customer Interactions Timeline</span>
                </div>
                <div class="px-7 py-7 w-full">
                    <ol class="relative border-s border-gray-300">
                        <li class="mb-5 ms-6">
                            <span class="absolute flex justify-center items-center py-2 px-1.5 rounded-full bg-green-200 -left-3.5 ring-8 ring-white">
                                <x-icon.cart-shopping class="text-green-700"/>
                            </span>
                            <div class="flex flex-col ml-1 py-1">
                                <div class="flex justify-between">
                                    <span class="font-semibold">Order placed - #OR-2023-1265</span>
                                    <span class="text-gray-400 text-sm">October, 25, 2025 at 02:40 PM</span>
                                </div>
                                <span class="text-gray-400 font-medium">Place an order for 12 items, totaling $145,50</span>
                            </div>
                        </li>
                        <li class="mb-5 ms-6">
                            <span class="absolute flex justify-center items-center py-2 px-1.5 rounded-full bg-sky-200 -left-3.5 ring-8 ring-white">
                                <i class="fa-solid fa-headset w-6 text-sky-400"></i>
                            </span>
                            <div class="flex flex-col ml-1 py-1">
                                <div class="flex justify-between">
                                    <span class="font-semibold">Support Ticket #1233 Open</span>
                                    <span class="text-gray-400 text-sm">October, 25, 2025 at 03:15 PM</span>
                                </div>
                                <span class="text-gray-400 font-medium">Inquiry about a missing item in order #OR-2023-1432. Ticket solved and item re-shipped.</span>
                            </div>
                        </li>
                        <li class="mb-5 ms-6">
                            <span class="absolute flex justify-center items-center py-2 px-1.5 rounded-full bg-purple-200 -left-3.5 ring-8 ring-white">
                                <i class="fa-regular fa-comment-dots w-6 text-purple-400"></i>
                            </span>
                            <div class="flex flex-col ml-1 py-1">
                                <div class="flex justify-between">
                                    <span class="font-semibold">Message from Admin</span>
                                    <span class="text-gray-400 text-sm">October, 25, 2025 at 03:15 PM</span>
                                </div>
                                <span class="text-gray-400 font-medium">Sent a promotional message about the summer sale.</span>
                            </div>
                        </li>
                        <li class="mb-5 ms-6">
                            <span class="absolute flex justify-center items-center py-2 px-1.5 rounded-full bg-yellow-200 -left-3.5 ring-8 ring-white">
                                <i class="fa-regular fa-user w-6 text-yellow-400"></i>
                            </span>
                            <div class="flex flex-col ml-1 py-1">
                                <div class="flex justify-between">
                                    <span class="font-semibold">Account Created</span>
                                    <span class="text-gray-400 text-sm">October, 25, 2025 at 03:15 PM</span>
                                </div>
                                <span class="text-gray-400 font-medium">Customer registered a new account on the platform.</span>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-page>
