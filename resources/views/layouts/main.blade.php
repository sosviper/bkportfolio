<!DOCTYPE html>
<html lang="en">

<head>
    <!-- commom meta tag -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=== fontaswesome ===-->
    <link rel="stylesheet" href="./assets/fontaswesome/css/all.min.css" />
    <link rel="stylesheet" href="./assets/fontaswesome/css/fontawesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Roboto+Slab:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <!--=== main css ===-->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <title>BK Ingenieros S.R.L. </title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>
    @yield('preloader')
    {{-- <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER --> --}}

    <div class="w-full min-h-screen bg-fixed bg-center bg-no-repeat bg-cover bg-homeBg dark:bg-homeBg-dark md:pb-16">
        <div class="section-bg">
            <div class="flex justify-between w-full px-4">
                <!-- website Logo -->
                <a href="/" style="visibility: hidden">
                    <img class="h-[26px] lg:h-[32px]" src="{{asset('images/LOGO.jpg')}}" alt="logo" />
                </a>
                <div class="flex items-center">
                    <!-- dark and light mode toggle -->
                    <button id="theme-toggle" type="button" class="dark-light-btn">
                        <i id="theme-toggle-dark-icon" class="hidden text-xl fa-solid fa-moon"></i>
                        <i id="theme-toggle-light-icon" class="hidden text-xl fa-solid fa-sun"></i>
                    </button>
                    <!-- mobile toggle button -->
                    <button id="menu-toggle" type="button" class="menu-toggle-btn">
                        <i id="menu-toggle-open-icon" class="text-xl fa-solid fa-bars "></i>
                        <i id="menu-toggle-close-icon" class="hidden text-xl fa-solid fa-xmark "></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- mobile menu start -->
        <nav id="navbar" class="hidden lg:hidden">
            <ul
                class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                <li>
                    <a class="mobile-menu-items-active" href="./aboutOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-user"></i>
                        </span>Nosotros </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="./resumeOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-file-lines"></i>
                        </span>Resumen </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="./portfiloOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fas fa-briefcase"></i>
                        </span>Trabajos </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="./blogOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-brands fa-blogger"></i>
                        </span>Blogs </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="./contactOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-solid fa-address-book"></i>
                        </span> Contacto </a>
                </li>
            </ul>
        </nav>
        <!-- mobile menu end -->

        <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
            <!-- sidber personal info -->
            <div class="sticky hidden h-screen col-span-12 lg:col-span-4 lg:block top-44">
                <div
                    class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                    <!-- profile image -->
                    <img src="{{ asset('storage/'.$user_public->profile_photo_path) }}"
                        class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]"
                        alt="about" />
                    <div class="pt-[100px] pb-8">
                        <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> {{ $user_public->name }} </h2>
                        <h3
                            class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                            {{ $user_public->description }} </h3>
                        <div class="flex justify-center space-x-3">
                            <!-- facebook icon and link -->
                            <a href="{{ $user_public->facebook_url }}" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <!-- twitter icon and link -->
                            <a href="{{ $user_public->twitter_url }}" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <!-- dribbble icon and link -->
                            <a href="{{ $user_public->dribbble_url }}" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <!-- linkedin icon and link -->
                            <a href="{{ $user_public->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                        <!-- personal infomation start -->
                        <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] dark:bg-[#1D1D1D]">
                            <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] pb-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#E93B81] shadow-md">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Teléfono </p>
                                    <p class="dark:text-white">{{ $user_public->phone }}</p>
                                </div>
                            </div>
                            <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#6AB5B9] shadow-md">
                                    <i class="fa-solid fa-envelope-open-text"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Email </p>
                                    <p class="dark:text-white">{{ $user_public->email }}</p>
                                </div>
                            </div>
                            <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#FD7590] shadow-md">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Dirección </p>
                                    <p class="dark:text-white">{{ $user_public->address }}</p>
                                </div>
                            </div>
                            <div class="flex py-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#C17CEB] shadow-md">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Año de nacimiento </p>
                                    <p class="dark:text-white">{{ Carbon\Carbon::parse($user_public->birthdate)->format('d-m-Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- personal infomation end-->
                        <!-- dowanload button -->
                        {{--  <a href="{{ $user_public->url_cv }}"><button class="dowanload-btn">
                            <img class="mr-3" src="{{asset('images/icons/dowanload.png')}}" alt="icon" /> Descargar CV </button></a>  --}}
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-8">
                <!-- header for mobile devices start -->
                <header
                    class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
                    <nav class="hidden lg:block">
                        <ul class="flex">
                            <li> <a @if(Route::is('home')) class="menu-active" @else class="menu-item" @endif href="/">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-regular fa-user"></i>
                                    </span> Nosotros </a></li>
                            <li> <a @if(Route::is('resume')) class="menu-active" @else class="menu-item" @endif href="{{ route('resume') }}">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Resumen </a></li>
                            <li> <a @if(Route::is('jobs')) class="menu-active" @else class="menu-item" @endif href="{{ route('jobs') }}">
                                    <span class="mb-1 text-xl">
                                        <i class="fas fa-briefcase"></i>
                                    </span> Trabajos </a></li>
                            <li><a @if(Route::is('blog')) class="menu-active" @else class="menu-item" @endif href="{{ route('blog') }}">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-brands fa-blogger"></i>
                                    </span> Blogs </a></li>
                            <li> <a @if(Route::is('contact')) class="menu-active" @else class="menu-item" @endif href="{{ route('contact') }}">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> Contacto </a></li>
                        </ul>
                    </nav>
                </header>
                <!-- header for mobile devices end -->
                @yield('content')
                
            </div>
        </div>
    </div>
    <!-- End bgHomeBg -->


    <!--==== js =====-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquary.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</body>

</html>