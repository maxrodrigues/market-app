<x-layouts.admin>
    <div class="h-screen flex flex-col justify-center items-center w-full">
        <div class="mx-auto px-3 py-10 w-[390px] space-y-10 bg-white rounded-lg shadow-md">
            <div class="flex flex-col items-center space-y-3">
                <div class="bg-sky-300 rounded-full p-2 w-15 h-15 text-center flex items-center justify-center">
                    <i class="fa-solid fa-store text-3xl text-sky-600"></i>
                </div>
                <div class="flex flex-col items-center">
                    <h1 class="font-bold text-2xl">{{ __('auth.forgot_title') }}</h1>
                    <span class="text-sm text-gray-600 text-center">{{ __('auth.forgot_subtitle') }}</span>
                </div>
            </div>
            <form action="" method="post">
                @csrf
                @method('POST')
                <div class="px-3 space-y-2">
                    <div class="flex flex-col">
                        <label for="email" class="text-xs font-medium mb-1">{{ __('auth.username_field') }}</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="admin@freshmarket.com"
                            class="bg-admin py-2 rounded-md px-2 w-full text-sm placeholder:text-gray-400 outline-none border border-gray-300"
                        />
                    </div>
                    <div>
                        <button type="submit" class="bg-sky-600 hover:bg-sky-800 py-2 w-full rounded-lg font-semibold text-white">
                            Send Password Reset Link
                        </button>
                    </div>
                    <div class="text-center mt-10">
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
