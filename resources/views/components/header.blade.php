
    <header class="w-full bg-white mb-6 not-has-[nav]:hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-12 items-center px-6 gap-4">
            @if (Route::has('login'))

                <!-- Logo -->
                <div class="col-span-2 pt-2">
                    @php
                        $store_manage = \App\Models\store_manage::latest()->first();
                    @endphp
                    @if($store_manage && $store_manage->logo)
                    <img src="{{ asset('storage/' . $store_manage->logo) }}" alt="Logo" class="w-20 rounded-full">
                    @else
                        <div>Default Logo</div>
                    @endif
                </div>

                <!-- Menu -->
                <div class="col-span-6">
                    <ul class="grid grid-cols-4 gap-4 text-center">
                        <li class="text-2xl">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="text-2xl">Shop</li>
                        <li class="text-2xl">Blog</li>
                        <li class="text-2xl">Contact</li>
                    </ul>
                </div>

                <!-- Cart and Auth -->
                <div class="col-span-4 flex items-center justify-end gap-4">
                    <!-- Cart Icon with badge -->
                    <div class="relative">
                        <img src="{{ asset('assets/cart.jpg') }}" alt="Cart" class="h-14">
                        <span
                            class="absolute top-0 right-[-5px] bg-red-600 text-white text-sm h-5 w-5 flex items-center justify-center rounded-full">1</span>
                    </div>

                    <!-- Auth Links -->
                    <nav class="flex items-center gap-2">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="px-4 py-1.5 text-sm border rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="px-4 py-1.5 text-sm rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A]">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="px-4 py-1.5 text-sm border rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                </div>

            @endif
        </div>
    </header>
