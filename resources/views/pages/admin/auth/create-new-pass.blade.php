<x-layouts.admin>
    <div class="h-screen flex flex-col justify-center items-center w-full">
        <div class="mx-auto px-3 py-10 w-[390px] space-y-10 bg-white rounded-lg shadow-md">
            <div class="flex flex-col items-center space-y-3">
                <div class="bg-sky-300 rounded-full p-2 w-15 h-15 text-center flex items-center justify-center">
                    <i class="fa-solid fa-store text-3xl text-sky-600"></i>
                </div>
                <div class="flex flex-col items-center">
                    <h1 class="font-bold text-2xl">Set a New Password</h1>
                    <span class="text-sm text-gray-600 text-center">Create a new password for your account. It must be at least 8 characters long.</span>
                </div>
            </div>
            <form action="{{ route('admin.reset-password.post') }}" method="post">
                @csrf
                @method('POST')
                <div class="px-3 space-y-2">
                    <div class="flex flex-col">
                        <label for="email" class="text-xs font-medium mb-1">New Password</label>
                        <input
                            id="newPassword"
                            type="password"
                            name="password"
                            placeholder="********"
                            class="bg-admin py-2 rounded-md px-2 w-full text-sm placeholder:text-gray-400 outline-none border border-gray-300"
                        />
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-xs font-medium mb-1">Confirm New Password</label>
                        <input
                            id="newPassword"
                            type="password"
                            name="password"
                            placeholder="********"
                            class="bg-admin py-2 rounded-md px-2 w-full text-sm placeholder:text-gray-400 outline-none border border-gray-300"
                        />
                    </div>
                    <div class="flex flex-col my-5">
                        <label>
                            <input type="checkbox" disabled>
                            <span class="text-xs text-gray-600">Minimum 8 characters</span>
                        </label>
                        <label>
                            <input type="checkbox" disabled>
                            <span class="text-xs text-gray-600">Includes a number</span>
                        </label>
                        <label>
                            <input type="checkbox" disabled>
                            <span class="text-xs text-gray-600">Includes a special characters</span>
                        </label>
                    </div>
                    <div class="">
                        <button type="submit" class="bg-sky-600 hover:bg-sky-800 py-3 w-full rounded-lg font-semibold text-white">
                            Update Password
                        </button>
                    </div>
                    <div class="text-center mt-2">
                        <a href="{{ route('admin.login') }}" class="text-sm font-semibold text-sky-800">
                            Back to Login
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="mt-10">
            <span class="text-sm text-gray-400">© FreshMart. All rights reserved.</span>
        </div>
    </div>
</x-layouts.admin>
