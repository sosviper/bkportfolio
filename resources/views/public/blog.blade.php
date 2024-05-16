@extends('layouts.main')
@section('content')
    <!-- blog   section start -->
    <section class="bg-white lg:rounded-2xl dark:bg-[#111111]">
        <div class="container px-4 sm:px-5 md:px-10 lg:px-[60px]">
            <div class="pb-12">
                <h2 class="mt-12 after-effect after:left-32 lg:mt-0">Blogs</h2>
                <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 mt-[30px] grid gap-x-10 gap-y-7 mb-6">
                @forelse ($blogs as $item)
                        <!-- blog items one start -->
                        <div
                            class="p-5 rounded-lg mb-2 h-full bg-[{{ $item->color_hex }}] dark:bg-transparent dark:border-[#212425] dark:border-2">
                            <div class="overflow-hidden rounded-lg">
                                <a href="#ex1" rel="modal:open">
                                    <img class="w-full transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                        src="{{ $item->logo_url }}" alt="blog image" />
                                </a>
                            </div>
                            <div class="flex mt-4 text-tiny text-gray-lite dark:text-[#A6A6A6]">
                                <span>{{ $item->created_at }}</span>
                                <span class="dot-icon">{{ $item->subcategory }}</span>
                            </div>
                            <h3
                                class="text-lg font-medium dark:text-white duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] dark:hover:text-[#FA5252]">
                                <a href="#ex1_{{ $item->id }}" rel="modal:open">{{$item->title}}</a>
                            </h3>
                        </div>
                        <!-- blog items one end -->
                        <div id="ex1_{{ $item->id }}" class="modal-container modal">
                            <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                                <div class="pb-2 pr-3">
                                    <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="{{ $item->logo_url }}"
                                        alt="blog image" />
                                    <div class="flex mt-4 text-black text-tiny dark:text-white">
                                        <span>{{ $item->created_at }}</span>
                                        <span class="dot-icon">{{ $item->subcateogry }}</span>
                                    </div>
                                    <h2 class="mt-2 font-medium dark:text-white sm:text-3xl">{{ $item->title }}</h2>
                                    <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> 
                                        {{ $item->body }}
                                    </p>
                                   
                                </div>
            
                                
            
                            </div>
                            <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
                        </div>

                @empty
                    
                @endforelse
                

                   

            

                </div>
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
    <!-- blog section end -->
@endsection