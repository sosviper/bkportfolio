@extends('layouts.main')
@section('content')
    <!-- resume section start -->
    <div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
        <div class="container sm:px-5 md:px-10 lg:px-14">
            <div class="px-4 py-12 md:px-0">
                <!-- resume page title -->
                <h2 class="after-effect after:left-44">Resumen</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-6 gap-y-6 mt-[30px]">
                    <!-- eductation start -->
                    <div>
                        <div class="flex items-center mb-4 space-x-2">
                            <i class="fa-solid text-6xl text-[#F95054] fa-graduation-cap"></i>
                            <h4 class="text-5xl font-medium dark:text-white"> Educación </h4>
                        </div>
                        @forelse ($educations as $item)
                            <div
                            class="bg-[{{ $item->color_hex }}] dark:bg-transparent py-4 pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">{{ $item->dates }}</span>
                                <h3 class="text-xl dark:text-white"> {{ $item->title }} </h3>
                                <p class="dark:text-[#b7b7b7]"> {{ $item->description }} </p>
                            </div>
                        @empty
                            
                        @endforelse
                        
                        
                    </div>
                    <!-- eductation end -->

                    <!-- experiment start -->
                    <div>
                        <div class="flex items-center mb-4 space-x-2">
                            <i class="fa-solid text-6xl text-[#F95054] fa-briefcase"></i>
                            <h4 class="text-5xl font-medium dark:text-white"> Experiencia </h4>
                        </div>
                        @forelse ($experiences as $item)
                            
                            <div
                                class="py-4 pl-5 pr-3 space-y-2 mb-6 rounded-lg bg-[{{ $item->color_hex }}] dark:bg-transparent dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">{{ $item->dates }}</span>
                                <h3 class="text-xl dark:text-white"> {{ $item->title }} </h3>
                                <p class="dark:text-[#b7b7b7]"> {{ $item->description }} </p>
                            </div>
                        @empty
                            
                        @endforelse
                        
                    </div>
                    <!-- experiment start -->
                </div>
            </div>
        </div>


        <!-- working section start -->
        <div class="container bg-color-810 dark:bg-[#0D0D0D] py-12 px-2 sm:px-5 md:px-10 lg:px-20">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <div class="col-span-1">
                    <h4 class="mb-6 text-5xl font-medium dark:text-white"> Working Skills </h4>
                    @forelse ($workingSkills as $skill)
                        <div class="mb-5">
                            <div class="flex justify-between mb-1">
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">{{$skill->title}}</span>
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">{{ $skill->percentage }}%</span>
                            </div>
                            <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                <div class="bg-[{{ $skill->color_hex }}] h-1 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                            </div>
                    </div>
                    @empty
                        
                    @endforelse
                    

                    

                </div>

                <div class="col-span-1">
                    <h4 class="mb-8 text-5xl font-medium dark:text-white"> Conocimientos </h4>
                    <div class="flex gap-y-5 gap-x-2.5 flex-wrap">
                        @forelse ($knoledges as $item)
                            <button class="resume-btn">{{ $item->title }}</button>
                            
                        @empty
                            
                        @endforelse
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- working section end -->

       <!-- footer start -->
       <footer class="overflow-hidden rounded-b-2xl" style="background: transparent">
        <p class="py-6 text-center text-gray-lite dark:text-color-910"> © 2023 Todos los derechos reservados
            by <a class="hover:text-[#FA5252] duration-300 transition"
                href="me.elrincondeisma.com" target="_blank"
                rel="noopener noreferrer"> BK Ingenieros S.R.L.</a>. </p>
    </footer>
    <!-- footer section end -->
    </div>
    <!-- resume section start -->
@endsection