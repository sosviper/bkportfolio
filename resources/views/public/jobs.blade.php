@extends('layouts.main')
@section('content')
    <!-- about me section start -->
    <section id="portfolio" class="bg-white   lg:rounded-2xl dark:bg-[#111111]">
        <div class="container  mb-8 px-4 sm:px-5 md:px-10 lg:px-[60px]">
            
            <div class="py-12 ">
                <h2 class="after-effect after:left-48 lg:mt-0">Portafolio</h2>
                <!-- fillter button group -->
                <!-- fillter group buttons -->
                <ul
                    class="button-group isotop-menu-wrapper mt-[30px] flex w-full justify-start md:justify-end flex-wrap font-medium">
                    <li class="mr-4 fillter-btn md:mx-4 is-checked" data-filter="*">All</li>
                    <li class="mr-4 fillter-btn md:mx-4" data-filter=".Video">Video</li>
                    <li class="mr-4 fillter-btn md:mx-4" data-filter=".Web Design"> Web Design</li>
                    <li class="mr-4 fillter-btn md:mx-4" data-filter=".Logo"> Logo</li>
                    <li class="mr-4 fillter-btn md:mx-4" data-filter=".Graphic Design">Graphic Design</li>
                </ul>
            </div>
            <!-- End py-12 -->

            <div id="isotop-gallery-wrapper" class="mymix portfolio_list-two two-col ">
                <div class="grid-sizer"></div>
                <!-- portfolio items one start -->

                @forelse ($jobs as $job)
                <div class="portfolio_list-two-items isotop-item {{ $job->category }} custom ">
                    <div
                        class="rounded-lg bg-[{{ $job->color_hex }}] p-6 dark:bg-transparent dark:border-[2px] border-[#212425]">
                        <div class="overflow-hidden rounded-lg">
                            <a href="#portfiloOne_{{ $job->id }}" rel="modal:open">
                                <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                    src="{{ $job->logo_url }}" alt="portfolio image" />
                            </a>
                        </div>
                        <span
                            class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">{{ $job->subcategory }}</span>
                        <h2
                            class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                            <a href="#portfiloOne" rel="modal:open"> {{ $job->title }} </a>
                        </h2>
                    </div>
                </div>

                <!-- modal start for item one  -->
                <div id="portfiloOne_{{ $job->id }}" class="modal-container modal">
                    <div
                        class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                        <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                            {{ $job->subcategory }}
                        </h2>
                        <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                            <div class="space-y-2">
                                <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                    <i
                                        class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                    Proyecto :&nbsp;
                                    <span class="font-medium"> {{ $job->project_name }}</span>
                                </p>
                                <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                    <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                    Idiomas :&nbsp;
                                    <span class="font-medium">{{ $job->languages }}</span>
                                </p>
                            </div>

                            <div class="space-y-2">
                                <p
                                    class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                    <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                    Cliente :&nbsp; <span class="font-medium">{{ $job->client }}</span>
                                </p>
                                <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                    <i
                                        class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                    Preview :&nbsp;
                                    <span
                                        class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                        <a href="{{ $job->preview }}" target="_blank"
                                            rel="noopener noreferrer">{{ $job->preview }}</a>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                            {{$job->body}}
                        </p>
                        <div class="pr-3">
                            <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6"
                                src="{{ $job->logo_url }}" alt="portfolio image" />
                        </div>
                    </div>
                    <a href="#close-modal" rel="modal:close"
                        class="close bg-close-light dark:bg-close-dark">Close</a>
                </div>
                @empty
                    
                @endforelse
                

                
            </div>
        </div>

        <!-- footer start -->
        <footer class="overflow-hidden rounded-b-2xl" style="background: transparent">
            <p class="py-6 text-center text-gray-lite dark:text-color-910"> © 2023 Todos los derechos reservados
                by <a class="hover:text-[#FA5252] duration-300 transition"
                    href="me.elrincondeisma.com" target="_blank"
                    rel="noopener noreferrer"> BK Ingenieros S.R.L.</a>. </p>
        </footer>
        <!-- footer section end -->
    </section>
    <!-- about me section start -->
@endsection