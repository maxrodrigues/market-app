<x-layouts.admin-page>
    <!-- -->
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold mb-1">Add New Product</h1>
            <span class="text-sm text-gray-600">Fill in the details below to add a new product to the catalog.</span>
        </div>
    </div>
    <div class="mt-10 grid grid-cols-12 gap-4">
        <div class="col-span-9">
            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Product Information</span>
                </div>
                <div>

                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Variants</span>
                </div>
                <div>

                </div>
            </div>
        </div>
        <div class="col-span-3">
            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Media</span>
                </div>
                <div class="px-3 py-4 w-full">
                    <div class="w-full flex items-center justify-center">
                        <label class="w-full flex flex-col justify-center items-center cursor-pointer bg-gray-100 rounded-lg border border-dashed border-gray-300">
                            <div class="flex flex-col items-center justify-center p-6">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <p class="mb-2 text-sm"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input multiple type="file" class="hidden"/>
                        </label>
                    </div>
                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Price & Inventory</span>
                </div>
                <div class="px-3 py-4 grid grid-cols-2 gap-2">
                    <div class="flex flex-col space-y-1">
                        <label class="text-sm font-semibold">Price</label>
                        <input type="text" placeholder="$ 0.00" class="bg-gray-100 px-4 py-2 rounded focus:outline-none"/>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label class="text-sm font-semibold">Stock Quantity</label>
                        <input type="text" placeholder="0" class="bg-gray-100 px-4 py-2 rounded focus:outline-none"/>
                    </div>
                </div>
            </div>

            <!-- -->
            <div class="bg-white flex flex-col items-start rounded-lg mb-8">
                <div class="flex justify-between py-3 px-5 w-full space-x-3 border-b border-gray-400">
                    <span class="font-bold text-xl">Status</span>
                </div>
                <div class="px-3 my-5 flex flex-col space-y-2 w-full">
                    <ul>
                        <li class="my-3">
                            <label for="status_activated" class="flex items-center justify-start w-full px-4 py-2.5 text-base border border-gray-300 rounded cursor-pointer has-checked:bg-sky-200 has-checked:border-sky-400">
                                <input type="radio" name="status" id="status_activated" class="hidden"/>
                                Active
                            </label>
                        </li>
                        <li class="my-3">
                            <label for="status_draft" class="flex items-center justify-start w-full px-4 py-2.5 text-base border border-gray-300 rounded cursor-pointer has-checked:bg-sky-200 has-checked:border-sky-400">
                                <input type="radio" name="status" id="status_draft" class="hidden"/>
                                Draft
                            </label>
                        </li>
                        <li class="my-3">
                            <label for="status_deactivated" class="flex items-center justify-start w-full px-4 py-2.5 text-base border border-gray-300 rounded cursor-pointer has-checked:bg-sky-200 has-checked:border-sky-400">
                                <input type="radio" name="status" id="status_deactivated" class="hidden"/>
                                Deactivated
                            </label>
                        </li>
                    </ul>

                    {{--<div class="border border-gray-300 rounded flex items-center px-2">
                        <input type="radio" name="status" id="status_deactivated"/>
                        <label for="status_deactivated" class="w-full py-3 px-1">Deactivated</label>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-page>
