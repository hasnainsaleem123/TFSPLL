<header>
    <div class="w-full z-10 bg-[#094AB7] xl:px-[80px] lg:px-[40px] px-[20px] py-[29px] relative" x-data="{ open: false }">

        <!-- Background Images -->
        <div class="absolute top-0 left-0 max-[768px]:w-full max-[768px]:h-full">
            <img src="{{ asset('storage/new/ls.png') }}" alt=""
                class="grayscale opacity-20 w-full h-full object-cover">
        </div>
        <div class="absolute top-0 right-0 max-[768px]:w-full max-[768px]:h-full">
            <img src="{{ asset('storage/new/rs.png') }}" alt=""
                class="grayscale opacity-20 w-full h-full object-cover">
        </div>

        <!-- Main Header Flex -->
        <div class="grid grid-cols-4 relative z-20">
            <!-- Left: Logo + Desktop Nav -->
            <div
                class="md:col-span-2 flex items-center justify-start 2xl:gap-[51px] xl:gap-[45px] lg:gap-[40px] md:gap-[20px] gap-[20px]">
                <div class="relative w-[40px] min-w-[40px]">
                    <img src="{{ asset('storage/new/logo.png') }}" alt="Logo" class="w-full h-full">
                </div>
                <div class="hidden md:flex">
                    <nav>
                        <ul
                            class="flex xl:gap-[20px] lg:gap-[15px] sm:gap-[8px] items-center text-white 2xl:text-[16px] xl:text-[12px] md:text-[10px] font-normal font-montagu-slab">
                            <li class="group hover:text-gray-300"><a href="/">Home</a></li>
                            <li class="group hover:text-gray-300"><a href="/about">About</a></li>
                            <li class="group hover:text-gray-300"><a href="/teams">Teams</a></li>
                            <li class="group hover:text-gray-300"><a href="/ranking">Rankings</a></li>
                            <li class="group hover:text-gray-300"><a href="/matches">Fixtures</a></li>
                            <li class="group hover:text-gray-300"><a href="/ranking">Top Fans</a></li>
                            <li class="group hover:text-gray-300"><a href="/ranking">Awards</a></li>
                            <li class="group hover:text-gray-300"><a href="/players">Players</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Center: Empty -->
            <div class="col-span-1 hidden"></div>

            <!-- Right: CTA + Logo + Burger -->
            <div class="col-span-3 md:col-span-2 flex items-center justify-end md:space-x-[10px] space-x-14">
                <div class="hidden xl:flex lg:flex md:flex items-center space-x-[10px]">
                    <button
                        class="2xl:px-[22px] xl:px-[16px] lg:px-[10px] px-[5px] py-1 border-l border-r border-white text-white 2xl:text-[16px] xl:text-[13px] md:text-[10px] font-montagu-slab">
                        Join TFSC PL
                    </button>
                </div>
                <div class="xl:pl-[30px] lg:pl-[15px] sm:pl-[12px]">
                    <img src="{{ asset('storage/new/tfs logo.png') }}" alt="Logo" class="w-[150px]">
                </div>
                <div class="md:hidden ml-4 z-30">
                    <button @click="open = !open" class="text-white focus:outline-none">
                        <template x-if="!open">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </template>
                        <template x-if="open">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </template>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden absolute top-full left-0 w-full bg-[#094AB7] text-center z-20" x-show="open" x-transition
            @click.outside="open = false">
            <nav>
                <ul class="space-y-2 text-white text-sm font-montagu-slab py-4">
                    <li><a href="/" class="block hover:text-gray-300">Home</a></li>
                    <li><a href="/about" class="block hover:text-gray-300">About</a></li>
                    <li><a href="/matches" class="block hover:text-gray-300">Teams</a></li>
                    <li><a href="/ranking" class="block hover:text-gray-300">Rankings</a></li>
                    <li><a href="/ranking" class="block hover:text-gray-300">Fixtures</a></li>
                    <li><a href="/ranking" class="block hover:text-gray-300">Top Fans</a></li>
                    <li><a href="/ranking" class="block hover:text-gray-300">Awards</a></li>
                    <li><a href="/players" class="block hover:text-gray-300">Players</a></li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- Site Links --}}
    <div class="xl:px-[80px] lg:px-[40px] px-[20px] bg-[#F6C200] flex justify-between py-[13px] items-center">
        <div
            class="space-x-[20px] flex text-white 2xl:text-[16px] lg:text-[14px] sm:text-[12px] font-dm-sans max-[765px]:hidden">
            <p>Extended Health Services</p>
            <p>ScribeAlign</p>
            <p>24-7Consultancy</p>
        </div>
        <div class="flex justify-center space-x-[15px]">
            <i class="fab fa-facebook-f text-white pl-3"></i>
            <i class="fab fa-twitter text-white"></i>
            <i class="fab fa-youtube text-white"></i>
            <i class="fab fa-instagram text-white"></i>
            <i class="fab fa-linkedin-in text-white"></i>
            <i class="fab fa-tiktok text-white"></i>
            <i class="fab fa-whatsapp text-white"></i>
        </div>
        <div class="md:hidden">
            <button
                class="2xl:px-[22px] xl:px-[16px] lg:px-[10px] px-[5px] py-1 text-white font-montserrat text-[12px] font-semibold">
                Join TFSC PL
            </button>
        </div>
    </div>
</header>
