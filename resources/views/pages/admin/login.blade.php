<x-layouts.admin>
    <div class="h-screen flex flex-col justify-center items-center w-full">
        <div class="mx-auto px-3 py-10 w-[390px] space-y-10 bg-white rounded-lg shadow-md">
            <div class="flex flex-col items-center space-y-3">
                <div class="bg-sky-300 rounded-full p-2 w-15 h-15 text-center flex items-center justify-center">
                    <i class="fa-solid fa-store text-3xl text-sky-600"></i>
                </div>
                <div class="flex flex-col items-center">
                    <h1 class="font-bold text-2xl">{{ __('auth.login_title') }}</h1>
                    <span class="text-sm text-gray-600 text-center">{{ __('auth.login_subtitle') }}</span>
                </div>
            </div>
            <form action="{{ route('admin.login.process') }}" method="POST">
                @csrf
                @method('POST')
                <div class="px-3 space-y-2">
                <div class="flex flex-col">
                    <label class="text-sm mb-1">{{ __('auth.username_field') }}</label>
                    <div class="relative flex flex-col">
                        <i class="fa-solid fa-envelope absolute insert-0 top-3 text-gray-300 pl-2 text-lg"></i>
                        <input
                            type="text"
                            placeholder="you@example.com"
                            class="bg-admin py-2 rounded-md pl-8 w-full placeholder:text-gray-400 outline-none border border-gray-300"
                        />
                        @error('username')
                            <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col mt-5">
                    <label class="text-sm mb-1">{{ __('auth.password_field') }}</label>
                    <div class="relative flex flex-col">
                        <i class="fa-solid fa-lock absolute insert-0 top-3 text-gray-300 pl-2 text-lg"></i>
                        <input
                            type="password"
                            placeholder="Enter your password"
                            class="bg-admin py-2 rounded-md pl-8 w-full placeholder:text-gray-400 outline-none border border-gray-300"
                        />
                        <i class="fa-solid fa-eye absolute insert-0 top-3 right-0 text-gray-300 pr-7 text-lg"></i>
                        @error('password')
                        <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit" class="bg-sky-600 hover:bg-sky-800 py-2 w-full rounded-lg font-semibold text-white">Login</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</x-layouts.admin>
