@extends('layouts.app')


@section('content')
    <style>
        .management_section .management_section_box,
        .story_section .story_section_box {
            margin: 15px;
        }

        .management_section .slick-list,
        .story_section .slick-list {
            margin: 0 -15px;


        }
    </style>
    {{-- hero section --}}
    <div class="relative w-full h-full">
        <!-- Bottom Image -->
        <img src="{{ asset('storage/about/about1.png') }}" alt="" class="w-full h-full object-cover">

        <!-- Middle Image (1st overlay) -->
        <img src="{{ asset('storage/about/about2.png') }}" alt="" class="absolute top-0 left-0 w-full  object-contain">

        <!-- Top Image (2nd overlay) -->
        <img src="{{ asset('storage/about/about3.png') }}" alt=""
            class="absolute top-0 left-0 w-full h-full object-contain">

        <!-- Text Block -->
        <div class="absolute 2xl:bottom-20 lg:left-20 xl:bottom-15 lg:bottom-10 md:left-15 bottom-5 left-4">
            <p class="text-white font-dm-sans font-semibold 2xl:text-[18px] xl:text-[14px] text-[10px]">Chief Executive
                Officer</p>
            <p
                class="font-montserrat font-bold  2xl:text-[40px] xl:text-[30px] lg:text-[20px] md:text-[15px] 2xl:mt-[20px] text-[12px] text-white">
                Naeem
                Abbas: TFSC Premier
                League
                Fxtures &
                Results</p>

        </div>
    </div>


    {{-- tfsc managemnt --}}
    <div class="bg-[#094AB7]">
        <div class="px-[80px]">
            <div class="grid grid-cols-9 xl:mt-[90px] md:mt-[60px] mt-[40px] py-[90px]">
                <div class="col-span-3">
                    <p class="font-montagu-slab text-[30px] font-bold text-white">TFSC Premier League
                        Management</p>
                    <p class="font-dm-sans font-normal text-[18px] leading-[24px] mt-[20px] max-w-[547px]">
                        Twenty Four Seven Consultancy Premier League Twenty Four Seven Consultancy Premier League Twenty
                        Four Seven Consultancy Premier League Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Quisquam magni nam nisi laboriosam
                    </p>
                    <button class=" px-[80px] py-[8px] bg-yellow-400 mt-[30px]">
                        View All
                    </button>
                </div>



                <div class="col-span-6 ">
                    <div class="management_section  ">

                        <div class="relative management_section_box">
                            <img src="{{ asset('storage/about/danish.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p class="absolute bottom-5 left-5 text-[24px] font-montserrat font-bold text-white">Chief
                                Operating
                                Officer:
                                Danish Ather

                            </p>
                        </div>
                        <div class="relative management_section_box">
                            <img src="{{ asset('storage/about/muzahir.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p class="absolute bottom-5 left-5 text-[24px] font-montserrat font-bold text-white">Director
                                Operations:
                                Muzahir Hussain

                            </p>
                        </div>
                        <div class="relative management_section_box">
                            <img src="{{ asset('storage/about/salman.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p class="absolute bottom-5 left-5 text-[24px] font-montserrat font-bold text-white">Director
                                Administration:
                                Muhammad Sulaman
                            </p>
                        </div>
                        <div class="relative management_section_box">
                            <img src="{{ asset('storage/about/salman.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p class="absolute bottom-5 left-5 text-[24px] font-montserrat font-bold text-white">Director
                                Administration:
                                Muhammad Sulaman
                            </p>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- tfsc community --}}
    <div class="bg-[#FFF4ED] mt-[100px] py-[60px]">
        <div class="px-[80px]">
            <h2 class="text-[#094AB7] font-montagu-slab font-bold text-[30px]">
                TFSC Community
            </h2>
            <div class="mt-[30px] relative">
                <!-- Background Image -->
                <img src="{{ asset('storage/about/comunity.png') }}" alt="" class="w-full h-[550px] object-cover">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-[#094AB7] opacity-80"></div>

                <!-- Centered Content -->
                <div class="absolute inset-0 flex items-center justify-center ">
                    <div class="grid grid-cols-2 max-w-[741px] relative">
                        <div class="col-span-1">
                            <div class="bg-[#094AB7] ">
                                <div class="pt-[30px] px-[40px]">
                                    <p class="font-dm-sans text-[24px] font-bold text-white">Do You Want Feel Part Of
                                        TFS Premier League</p>
                                    <div class="flex justify-center">
                                        <img src="{{ asset('storage/about/tfsc1.png') }}" alt=""
                                            class="w-[258px]  max-h-[282px] object-cover">
                                    </div>
                                </div>



                            </div>


                        </div>
                        <div class="absolute bottom-8 right-0 bg-white px-[50px] py-[30px]">
                            <p class=" font-dm-sans text-[24px] font-bold ">Join the TFSC
                                Community
                            </p>
                            <button class="px-[42px] py-[9px] bg-yellow-400 font-dm-sans text-[14px] mt-[15px] ">Become
                                Premium

                            </button>

                        </div>


                    </div>

                </div>
            </div>


        </div>

    </div>


    {{-- our Story --}}
    <div class="bg-[#FFF4ED] mt-[100px]">
        <div class="py-[60px] px-[80px]">
            <h2 class="font-montagu-slab text-[#094AB7] font-bold text-center text-[30px]">Our Stories</h2>
            <p class="font-dm-sans text-[18px] text-center mt-[20px]">Twenty Four Seven Consultancy Premier League Twenty
                Four Seven
                <br>
                Consultancy
                Premier League Twenty Four Seven Consultancy Premier League
            </p>

            <div class="story_section  py-[30px]">
                <div class="story_section_box">
                    <img src="{{ asset('storage/about/ourstory1.png') }}" alt="">
                    <p class="absolute bottom-12  text-[#F6C200] text-lg font-semibold px-[20px]">
                        Chief Operating Officer: Danish Ather
                    </p>
                </div>

                <div class="story_section_box">
                    <img src="{{ asset('storage/about/ourstory2.png') }}" alt="">
                    <p class="absolute bottom-12  text-[#F6C200] text-lg font-semibold px-[20px]">
                        Chief Operating Officer: Danish Ather
                    </p>
                </div>
                <div class="story_section_box">
                    <img src="{{ asset('storage/about/ourstory3.png') }}" alt="">
                    <p class="absolute bottom-12  text-[#F6C200] text-lg font-semibold px-[20px]">
                        Chief Operating Officer: Danish Ather
                    </p>
                </div>
                <div class="story_section_box">
                    <img src="{{ asset('storage/about/ourstory3.png') }}" alt="">
                    <p class="absolute bottom-12  text-[#F6C200] text-lg font-semibold px-[20px]">
                        Chief Operating Officer: Danish Ather
                    </p>
                </div>
            </div>

        </div>

    </div>

    {{-- tfsc owners --}}
    <div class="bg-[#094AB7]">
        <div class="px-[80px] pt-[60px]">
            <h2 class="font-montagu-slab text-[30px] font-bold text-white">Teams Owners</h2>
        </div>

        {{-- team owners grid --}}
        <div class="grid grid-cols-7 pt-[30px] pb-[80px]">

            {{-- emplty grid --}}
            <div class="col-span-1">
            </div>
            {{-- other grid --}}
            <div class="col-span-6">
                <div class="owner_section grid grid-cols-4">
                    {{-- item 1 --}}
                    <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                        </div>

                        <!-- Text over the image -->
                        <div class="absolute bottom-10 left-10 text-white text-center ">
                            <h2 class="font-montagu-slab text-[22px] font-bold">Jamshed Arbab Khan</h2>
                            <p class="text-[14px] font-bold font-dm-sans">Timber Wolves</p>
                        </div>
                    </div>
                    {{-- item 2 --}}
                    <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                        </div>

                        <!-- Text over the image -->
                        <div class="absolute bottom-10 left-10 text-white text-center ">
                            <h2 class="font-montagu-slab text-[22px] font-bold">Jamshed Arbab Khan</h2>
                            <p class="text-[14px] font-bold font-dm-sans">Timber Wolves</p>
                        </div>
                    </div>
                    {{-- item 3 --}}
                    <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                        </div>

                        <!-- Text over the image -->
                        <div class="absolute bottom-10 left-10 text-white text-center ">
                            <h2 class="font-montagu-slab text-[22px] font-bold">Jamshed Arbab Khan</h2>
                            <p class="text-[14px] font-bold font-dm-sans">Timber Wolves</p>
                        </div>
                    </div>
                    {{-- item 4 --}}
                    <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                        </div>

                        <!-- Text over the image -->
                        <div class="absolute bottom-10 left-10 text-white text-center ">
                            <h2 class="font-montagu-slab text-[22px] font-bold">Jamshed Arbab Khan</h2>
                            <p class="text-[14px] font-bold font-dm-sans">Timber Wolves</p>
                        </div>
                    </div>
                    <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                        </div>

                        <!-- Text over the image -->
                        <div class="absolute bottom-10 left-10 text-white text-center ">
                            <h2 class="font-montagu-slab text-[22px] font-bold">Jamshed Arbab Khan</h2>
                            <p class="text-[14px] font-bold font-dm-sans">Timber Wolves</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- TFSC Premier League Sponsers  --}}
    <div class="my-[100px] relative">
        <div>
            <img src="{{ asset('storage/about/sponsor.png') }}" alt="" class="h-full">
        </div>
        <div class="absolute inset-0 bg-white opacity-80"></div>
        <div class="grid grid-cols-3 py-[60px] absolute top-0">
            <div></div>

            <div class="">
                <h2 class="font-montagu-slab text-[#094AB7] font-semibold text-center text-[30px]">TFSC Premier League
                    Sponsers
                </h2>
                <p class="font-dm-sans text-[18px] text-center mt-[20px] leading-[24px]">Twenty Four Seven Consultancy
                    Premier League
                    Twenty
                    Four Seven
                    <br>
                    Consultancy
                    Premier League Twenty Four Seven Consultancy Premier League
                </p>
                <div class="absolute left-0 right-0 mt-[40px]">
                    {{-- line break --}}
                    <div class="border-b border-b-[#808080]"></div>

                    <div
                        class="md:w-[84%] md:mx-auto xl:px-[80px] lg:px-[40px] px-[20px] flex justify-center gap-[40px] md:gap-[100px] ">

                        <div class="py-[30px] flex justify-center">
                            <img class="w-[88px] h-[88px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/1.png') }}" alt="KFC" class="object-cover">
                        </div>
                        <div class="py-[46px] flex justify-center">
                            <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/2.png') }}" alt="Sports network" class="object-cover">
                        </div>
                        <div class="py-[46px] flex justify-center">
                            <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/3.png') }}" alt="BKT" class="object-cover">
                        </div>
                        <div class="py-[46px] flex justify-center">
                            <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/4.png') }}" alt="kayo" class="object-cover">
                        </div>

                    </div>

                    {{-- line break --}}
                    <div class="border-b border-b-[#808080]"></div>

                    <div
                        class="md:w-[84%] md:mx-auto xl:px-[80px] lg:px-[40px] px-[20px] flex flex-wrap justify-center gap-[40px] md:gap-[100px]">

                        <div class="pt-[40px] pb-[50px] flex justify-center">
                            <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/5.png') }}" alt="Foxtel" class="object-cover">
                        </div>
                        <div class="pt-[40px] pb-[50px] flex justify-center">
                            <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/6.png') }}" alt="weber" class="object-cover">
                        </div>

                    </div>

                    {{-- line break --}}
                    <div class="border-b border-b-[#808080]"></div>
                </div>
            </div>
            <div></div>
        </div>
    </div>

    <script>
        $('.management_section').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll      
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.story_section').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll      
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.owner_section').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll      
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
