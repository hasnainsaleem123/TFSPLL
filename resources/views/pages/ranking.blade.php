@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    <div class="h-[300px] bg-[#094AB7] flex flex-col justify-center items-center mb-10 relative">
        {{-- <img src="{{ asset('storage/ranking/bg.png') }}" alt="" class="absolute w-full inset-0 h-full "> --}}
        <h2 class="text-white text-[50px] font-bold relative">Rankings</h2>
    </div>

    {{-- ist section --}}
    <div class="2xl:px-[80px] xl:px-[60px] md:px-[40px] px-[16px] h-[484px] mb-[60px]">
        {{-- team ranking --}}
        <div class="  bg-[#094AB7] mb-5">
            <h1 class="md:text-[24px] sm:text-[20px] text-[15px] font-bold font-montserrat px-5 py-3.5 text-white ">
                Teams Ranking</h1>
        </div>

        {{-- button --}}
        <div class="mb-5 ">
            <div class="flex items-center justify-between">
                <!-- Teams Button -->
                <div class="flex justify-center items-center gap-5">
                    <button
                        class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold">
                        Players
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                            fill="none">
                            <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#094AB7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button
                        class="flex items-center md:gap-2 min-[365px]:gap-1 md:px-5 sm:px-3 min-[365px]:px-2 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                        Men
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                            fill="none">
                            <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#094AB7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <!-- View All Button -->
                <button
                    class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                        fill="none">
                        <path d="M0.999999 6.25L5.5 10M5.5 10L10 6.25M5.5 10L5.5 1" stroke="#094AB7" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- table maiin div --}}
        <div class="relative bg-[#094AB7]">
            {{-- image --}}
            {{-- <div>
                <img src="{{ asset('storage/ranking/r.png') }}" alt=""
                    class="absolute top-0 left-0 w-full h-[338px] rounded-[10px] object-cover">
            </div> --}}

            {{-- IST table --}}
            <div class="relative">
                <table class="w-full text-white font-dm-sans font-bold border-collapse ">
                    <thead class="border-b-[1px] border-[#0EA825] font-bold">
                        <tr class="text-white text-left xl:text-[18px] lg:text-[16px] sm:text-[14px] text-[12px]">
                            <th class="text-center py-4 w-[96.52px]">Pos</th>
                            <th class="w-[56px]"></th>
                            <th class="w-[301]">Teams</th>
                            <th class="w-[278px] pl-10">M</th>
                            <th class="w-[117px] ">W</th>
                            <th class="text-center w-[190px]">L</th>
                            <th class="text-center w-[205px]">Pts</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- ist row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px] ">
                            <td class="text-center">1.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="pl-10">9</td>
                            <td class="pl-1">
                                9
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 2nd row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px]">
                            <td class="text-center">2.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="pl-10">9</td>
                            <td class="pl-1">
                                9
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 3rd row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px]">
                            <td class="text-center">3.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="pl-10">9</td>
                            <td class="pl-1">
                                9
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 4th row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px]">
                            <td class="text-center">4.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="pl-10">9</td>
                            <td class="pl-1">
                                9
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        <tr>
                            <td colspan="7"
                                class="py-5 text-center text-[#14CD5B] lg:text-[14px] sm:text-[13px] text-[11px] font-montserrat font-medium ">
                                . Group A - Ranking
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>


        </div>
    </div>

    {{-- 2nd section --}}
    <div class="2xl:px-[80px] xl:px-[60px] md:px-[40px] px-[16px] h-[484px] mb-[60px]">
        {{-- team ranking --}}
        <div class="  bg-[#094AB7] mb-5">
            <h1 class="md:text-[24px] sm:text-[20px] text-[15px] font-bold font-montserrat px-5 py-3.5 text-white ">
                Players Ranking</h1>
        </div>

        {{-- button --}}
        <div class="mb-5 ">
            <div class="flex items-center justify-between">
                <!-- Teams Button -->
                <div class="flex justify-center items-center gap-5">
                    <button
                        class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold">
                        Players
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                            fill="none">
                            <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#094AB7" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button
                        class="flex items-center md:gap-2 min-[365px]:gap-1 md:px-5 sm:px-3 min-[365px]:px-2 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                        Men
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                            fill="none">
                            <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#094AB7" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <!-- View All Button -->
                <button
                    class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2  border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                        fill="none">
                        <path d="M0.999999 6.25L5.5 10M5.5 10L10 6.25M5.5 10L5.5 1" stroke="#094AB7" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- table maiin div --}}
        <div class="relative bg-[#094AB7]">
            {{-- image --}}
            {{-- <div>
                <img src="{{ asset('storage/ranking/r.png') }}" alt=""
                    class="absolute top-0 left-0 w-full h-[338px] rounded-[10px] object-cover">
            </div> --}}

            {{-- 2nd table --}}
            <div class="relative">
                <table class="w-full text-white font-dm-sans font-bold border-collapse ">
                    <thead class="border-b-[1px] border-[#0EA825] font-bold">
                        <tr class="text-white text-left xl:text-[18px] lg:text-[16px] sm:text-[14px] text-[12px]">
                            <th class="text-center py-4 w-[96.52px]">Pos</th>
                            <th class="w-[56px]"></th>
                            <th class="w-[301]">Teams</th>
                            <th class="w-[278px] pl-10">Names</th>
                            <th class="w-[117px]"></th>
                            <th class="text-center w-[190px]">Scores</th>
                            <th class="text-center w-[205px]">Ratings</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- ist row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px] ">
                            <td class="text-center">1.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px]  font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[8px] pl-10">M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 2nd row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px] ">
                            <td class="text-center">2.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px]  font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[8px] pl-10">M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 3rd row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px] ">
                            <td class="text-center">3.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px]  font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[8px] pl-10">M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 4th row --}}
                        <tr
                            class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[11px] ">
                            <td class="text-center">4.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td
                                class="flex items-center xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[10px]  font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td class="xl:text-[16px] lg:text-[14px] sm:text-[13px] text-[8px] pl-10">M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        <tr>
                            <td colspan="7"
                                class="py-5 text-center text-[#14CD5B] lg:text-[14px] sm:text-[13px] text-[11px]  font-montserrat font-medium ">
                                . Batsman - Ranking
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>


        </div>
    </div>
@endsection
