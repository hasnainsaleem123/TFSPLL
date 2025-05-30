@extends('layouts.app')

@section('content')
    {{-- header --}}
    <div class="md:h-[300px] h-[100px] relative flex justify-center items-center overflow-hidden ">
        <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
            class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
        <h2
            class="text-white 2xl:text-[50px] xl:text-[40px] lg:text-[30px] sm:text-[20px] text-[18px] font-montagu-slab font-bold relative">
            Players
        </h2>
    </div>


    {{-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$                 batter section           $$$$$$$$$$$$$$$$$$$$$$ --}}
    {{-- batter section without slick --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[16px]  lg:w-[88%] w-[94%] mt-[100px] mb-[100px] hidden lg:block">
        <h2 class="text-[30px] font-bold font-montagu-slab text-[#09154B] pb-[30px]">
            Enrolled as a Batter
        </h2>

        <div class="hidden lg:grid grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Batter
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Batter
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Batter
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Batter
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>
        </div>
    </div>


    {{-- batter section with slick for mbile view --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[35px]  lg:w-[88%] w-[94%] lg:my-[100px] my-[30px] lg:hidden">
        <h2
            class="xl:text-[30px] lg:text-[25px] text-[18px] font-bold font-montagu-slab text-[#09154B] lg:pb-[30px] pb-[15px]">
            Enrolled as an Batter
        </h2>

        <div class="lg:hidden">
            <div class="batters_section">


                <!-- Card 1 -->
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Batter
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Batter
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Batter
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Batter
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$       Bowler                                $$$$$$$$$$$$$$$$$$$$$$$ --}}
    {{-- bowler section without slick --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[16px]  lg:w-[88%] w-[94%] mt-[100px] mb-[100px] hidden lg:block">
        <h2 class="text-[30px] font-bold font-montagu-slab text-[#09154B] pb-[30px]">
            Enrolled as a Bowler
        </h2>

        <div class="hidden lg:grid grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#094AB7] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#F6C200] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Bowler
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card 2 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#094AB7] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#F6C200] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Bowler
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>


            {{-- card 3 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#094AB7] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#F6C200] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Bowler
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>


            {{-- card 4 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#094AB7] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#F6C200] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Bowler
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card-5 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#094AB7] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#F6C200] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Bowler
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card-6 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#094AB7] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#F6C200] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Bowler
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card-7 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#094AB7] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#F6C200] px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Bowler
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>


        </div>

    </div>


    {{-- bowler section with slick for mbile view --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[35px]  lg:w-[88%] w-[94%] lg:my-[100px] my-[30px] lg:hidden">
        <h2
            class="xl:text-[30px] lg:text-[25px] text-[18px] font-bold font-montagu-slab text-[#09154B] lg:pb-[30px] pb-[15px]">
            Enrolled as an Bowler
        </h2>

        <div class="lg:hidden">
            <div class="bowler_section">


                <!-- Card 1 -->
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#094AB7] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#F6C200] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Bowler
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                {{-- card 2 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#094AB7] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#F6C200] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Bowler
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>


                {{-- card 3 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#094AB7] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#F6C200] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Bowler
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>


                {{-- card 4 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#094AB7] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#F6C200] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Bowler
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>


                {{-- card-5 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#094AB7] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#F6C200] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Bowler
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>


                {{-- card-6 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#094AB7] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#F6C200] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Bowler
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                {{-- card-7 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#094AB7] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#F6C200] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Bowler
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

            </div>

        </div>


    </div>


    {{-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$    ALL ROUNDER                                           $$$$$$$$$$$$$$$$$$$$$$$ --}}
    {{-- all rounder section  without slick --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[16px]  lg:w-[88%] w-[94%] mt-[100px] mb-[100px] hidden lg:block">
        <h2 class="text-[30px] font-bold font-montagu-slab text-[#09154B] pb-[30px]">
            Enrolled as an Allrounder
        </h2>

        <div class="hidden lg:grid lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card 2 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card 3 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>


            {{-- card 4 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card-5 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card-6 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

            {{-- card-7 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>
            {{-- card-8 --}}
            <div class=" border-2 border-[#F4F4F4]">
                <div class="bg-[#F6C200] flex justify-center ">
                    <div class="pt-[40px]">
                        <div class="relative flex justify-center">

                            <div class="h-[246px]">
                                <img src="{{ asset('storage/players/1.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="absolute bottom-0  text-center bg-[#094AB7] lg:px-[40px] xl:px-[50px] py-[7px]"
                                style="transform: skewX(-20deg);">

                                <p class="text-[13px] font-dm-sans font-normal text-white"
                                    style="display: inline-block; transform: skewX(20deg);">
                                    Allrounder
                                </p>

                            </div>

                        </div>



                    </div>
                </div>
                {{-- 2nd section --}}
                <div class=" text-center">
                    <p class="text-[18px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid Arbab</p>
                    <p class="text-[30px] font-dm-sans font-bold pt-[10px]">1230</p>
                    <p class="text-[14px] font-dm-sans font-normal pt-[10px] text-[#828282]">runs</p>

                </div>

                {{-- 3rd section --}}
                <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                    <p class="text-[16px] font-dm-sans font-bold">Played With TW</p>
                </div>
            </div>

        </div>


    </div>


    {{-- all rounder section with slick for mbile view --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[35px]  lg:w-[88%] w-[94%] lg:my-[100px] my-[30px] lg:hidden">
        <h2
            class="xl:text-[30px] lg:text-[25px] text-[18px] font-bold font-montagu-slab text-[#09154B] lg:pb-[30px] pb-[15px]">
            Enrolled as an Allrounder
        </h2>

        <div class="lg:hidden">
            <div class="allround_section">

                <!-- Card 1 -->
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                {{-- card 2 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                {{-- card 3 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>


                {{-- card 4 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                {{-- card-5 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>

                {{-- card-6 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>
                {{-- card-7 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>
                {{-- card-8 --}}
                <div class=" border-2 border-[#F4F4F4] mx-[3px]">
                    <div class="bg-[#F6C200] flex justify-center ">
                        <div class="pt-[40px]">
                            <div class="relative flex justify-center">

                                <div class="h-[246px] hidden md:block">
                                    <img src="{{ asset('storage/players/1.png') }}" alt=""
                                        class="md:w-full w-[108px] h-full object-cover">
                                </div>
                                <div class="  w-[108px]  md:hidden">
                                    <img src="{{ asset('storage/players/2.png') }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="absolute bottom-0  text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                    style="transform: skewX(-20deg);">

                                    <p class="md:text-[13px] text-[10px]  font-dm-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        Allrounder
                                    </p>

                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- 2nd section --}}
                    <div class=" text-center">
                        <p class="md:text-[18px] text-[14px] font-dm-sans font-bold text-[#094AB7] pt-[10px]">Jamshaid
                            Arbab</p>
                        <p class="md:text-[30px] text-[18px] font-dm-sans font-bold md:pt-[10px] pt-[6px]">1230</p>
                        <p
                            class="md:text-[14px] text-[10px] font-dm-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                            runs</p>

                    </div>

                    {{-- 3rd section --}}
                    <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                        <p class="md:text-[16px] text-[10px] font-dm-sans font-bold">Played With TW</p>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <script>
        $('.events-slider').on('edge', function(event, slick, direction) {
            //Edge: last slide of the slider when infinity=false
            console.log('edge was hit');
        });
        $('.batters_section').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            margin: 10,

            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.bowler_section').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            margin: 10,

            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.allround_section').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            margin: 10,

            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
