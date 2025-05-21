@extends('layouts.app')

@section('content')
    <div class="mt-10">
        <div class="container d-flex">
            <div id="test1" class="font-calibri text-[20px] text-center font-bold text-[#0A0443]">
                an apple a day keeps the doctor away
            </div>
            <div id="test2" class="font-calibri text-[20px] text-center font-bold text-[#0A0443]">
                an orange a day keeps the doctor away
            </div>

            <script>
                alert("test");
                $(document).ready(function() {
                    const a = $("#test1").text();
                    console.log(a);
                    const b = $("#test2").html();
                    console.log(b);
                });
            </script>

            <div>
                <form id="1" class="bg-white border border-black p-4 w-fit mx-auto rounded shadow">
                    <div class="flex items-center mb-4">
                        <label for="age" class="w-32">Name:</label>
                        <input type="text" id="age" name="age" min="0" required
                            class="border border-gray-300 rounded px-2 py-1">
                    </div>
                    <div id="2" class="flex items-center mb-4">
                        <label for="age" class="w-32">Age:</label>
                        <input type="number" id="age" name="age" min="0" required
                            class="border border-gray-300 rounded px-2 py-1">
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="car" class="w-32">Choose a car:</label>
                        <select id="car" name="car" required class="border border-gray-300 rounded px-2 py-1">
                            <option value="">--Select a car--</option>
                            <option value="volvo">Volvo</option>
                            <option value="bmw">BMW</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
                    </div>
                </form>

                <script>
                    $(document).ready(function() {
                        $('#1,#2').focus(function() {
                            $(this).css('background-color', 'lime');
                        });
                        $('#1,#2').blur(function() {
                            $(this).css('background-color', '#ffffff');
                        });
                    });
                </script>


            </div>
        </div>
    </div>



    <div class="container">
        <div class="flex">
            <div class="h-10 w-10 bg-amber-900">
                dhsjd
                <div class="h-10 w-10 bg-amber-500">
                    dhsjd
                </div>
            </div>


        </div>

    </div>
@endsection


{{-- header --}}
<div>
    <div class="w-full z-10 bg-[#094AB7] xl:px-[80px] lg:px-[60px] px-[20px] py-[29px] relative">

        <div class="absolute top-0 left-0 md:hidden">
            <img src="{{ asset('storage/new/ls.png') }}" alt="" class="grayscale opacity-20">
        </div>
        <div class="absolute top-0 right-0 md:hidden">
            <img src="{{ asset('storage/new/rs.png') }}" alt="" class="grayscale opacity-20">
        </div>

        <div class="flex justify-between items-center relative z-20">



            <div class="flex items-center xl:space-x-[51px] lg:space-x-[30px] space-x-[20px]">

                <!-- Logo -->
                <div class="relative object-cover object-center">
                    <img src="{{ asset('storage/new/logo.png') }}" alt="Logo" class="z-10 w-full max-w-[44px]">
                </div>



                <!-- Navigation (Hidden on small screens, flex on md and above) -->
                <div class="flex">
                    <nav>
                        <ul
                            class="flex 2xl:space-x-[32px] xl:space-x-[29px] lg:space-x-[15px] sm:space-x-[10px] items-center text-white sm:text-[10px] 2xl:text-[16px] xl:text-[14px] lg:text-[12px] font-normal font-montagu-slab 
                            md:text-left">
                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/">Home</a>


                            </li>

                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/about">About</a>

                            </li>

                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/matches">Teams</a>

                            </li>

                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/ranking">Rankings</a>

                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/ranking">Fixtures</a>

                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/ranking">Top Fans</a>

                            </li>
                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/ranking">Awards</a>

                            </li>

                            <li class="relative group cursor-pointer hover:text-gray-300">
                                <a href="/news">Players</a>

                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

            {{-- right --}}
            <div class="flex items-center">
                <div class>
                    <button
                        class="2xl:px-[22px] xl:px-[16px] lg:px-[10px] px-[5px] py-1 border-l-1 border-r-1 border-white text-white hover:cursor-pointer 2xl:text-[16px] xl:text-[13px] lg:text-[12px] md:text-[10px] font-montagu-slab">
                        Join TFSC PL
                    </button>
                </div>
                <div class="xl:pl-[30px] lg:pl-[15px] sm:pl-[12px]">
                    <img src="{{ asset('storage/new/tfs logo.png') }}" alt="Logo" class="w-full max-w-[164px]">
                </div>

            </div>
        </div>

    </div>

</div>




<div class="lg:col-span-8">
    <div class="bg-blue-950 relative">
        <!-- Background image -->
        <img src="{{ asset('storage/new/vd-bg.png') }}" alt="" class="h-full w-full object-cover">

        <!-- Video over image with side border -->
        <video autoplay muted loop
            class="absolute top-0 left-1/2 -translate-x-1/2 md:w-[97%] w-full h-full object-cover">
            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
        </video>


    </div>
    <div
        class="bg-[#094AB7] font-montagu-slab font-bold text-[18px] 2xl:text-[34px] xl:text-[30px] lg:text-[25px] text-white text-center py-[18px] w-full">
        <p>Twenty Four Seven Premier League</p>

    </div>

</div>
