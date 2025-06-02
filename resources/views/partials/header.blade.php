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
            <!-- Left: Logo + Navigation (Logo only visible on small) -->
            <div class="md:col-span-2 flex items-center xl:gap-[51px] lg:-[41px] gap-[20px]">
                <!-- Logo -->
                <div class="relative w-[40px] min-w-[40px]">
                    <img src="{{ asset('storage/new/logo.png') }}" alt="Logo" class="w-full h-full">
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex">
                    <nav>
                        <ul
                            class="flex xl:gap-[20px] lg:gap-[15px] sm:gap-[8px] items-center text-white sm:text-[px] 2xl:text-[16px] xl:text-[12px] md:text-[10px] font-normal font-montagu-slab md:text-left text-nowrap">
                            <li class="relative group cursor-pointer hover:text-gray-300"><a href="/">Home</a>
                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300"><a href="/about">About</a>
                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300"><a href="/teams">Teams</a>
                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300"><a
                                    href="/ranking">Rankings</a>
                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300"><a
                                    href="/matches">Fixtures</a>
                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300"><a
                                    href="/drafting">Drafting</a>
                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300"><a href="/news">News</a>
                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300"><a href="/players">Players</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Center: Empty Space -->
            <div class="col-span-1 hidden">
            </div>

            <!-- Right: Desktop Button + Logo -->
            <div class="col-span-3 md:col-span-2 flex items-center justify-end md:space-x-[10px] space-x-14">
                <!-- Desktop CTA -->
                <div class="hidden xl:flex lg:flex md:flex items-center space-x-[10px]">
                    <button
                        class="2xl:px-[22px] xl:px-[16px] lg:px-[10px] px-[5px] py-1 border-l-1 border-r-1 border-white text-white hover:cursor-pointer 2xl:text-[16px] xl:text-[13px] md:text-[10px] font-montagu-slab text-nowrap">
                        Join TFSC PL
                    </button>
                </div>

                <!-- Right Logo -->
                <div class="xl:pl-[30px] lg:pl-[15px] sm:pl-[12px] ">
                    <img src="{{ asset('storage/new/tfs logo.png') }}" alt="Logo" class="w-[150px]">
                </div>

                <!-- Burger Button moved here (visible only on small screens) -->
                <button class="md:hidden text-white focus:outline-none ml-4" @click="open = !open">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path x-show="!open" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>



        <!-- Mobile Navigation -->
        <div class="md:hidden text-center" x-show="open" x-transition>
            <nav>
                <ul class="space-y-2 text-white text-sm font-montagu-slab ">
                    <li><a href="/" class="block py-1 hover:text-gray-300">Home</a></li>
                    <li><a href="/about" class="block py-1 hover:text-gray-300">About</a></li>
                    <li><a href="/matches" class="block py-1 hover:text-gray-300">Teams</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Rankings</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Fixtures</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Top Fans</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Awards</a></li>
                    <li><a href="/news" class="block py-1 hover:text-gray-300">Players</a></li>
                </ul>
            </nav>
        </div>


    </div>
    {{-- site links --}}
    <div class="xl:px-[80px] lg:px-[40px] px-[20px] bg-[#F6C200] flex justify-between py-[13px] items-center">

        <div
            class="space-x-[20px] flex text-white 2xl:text-[16px] lg:text-[14px] sm:text-[12px] font-dm-sans font-normal max-[765px]:hidden">
            <p>Extended Health Services</p>
            <p>ScribeAlign</p>
            <p>24-7Consultancy</p>
        </div>
        <div class="flex justify-center space-x-[15px]">
            <!-- Facebook Icon -->
            <i class="fab fa-facebook-f text-white pl-3"></i>
            <!-- X (Twitter/X) Icon -->
            <i class="fab fa-twitter text-white"></i>
            <!-- YouTube Icon -->
            <i class="fab fa-youtube text-white"></i>
            <!-- Instagram Icon -->
            <i class="fab fa-instagram text-white"></i>
            <!-- LinkedIn Icon -->
            <i class="fab fa-linkedin-in text-white"></i>
            <!-- TikTok Icon -->
            <i class="fab fa-tiktok text-white"></i>
            <!-- WhatsApp Icon -->
            <i class="fab fa-whatsapp text-white"></i>
        </div>
        <div class="md:hidden">
            <button
                class="2xl:px-[22px] xl:px-[16px] lg:px-[10px] px-[5px] py-1 text-white hover:cursor-pointer font-montserrat text-[12px] font-semibold ">
                Join TFSC PL
            </button>
        </div>


    </div>
</header>
