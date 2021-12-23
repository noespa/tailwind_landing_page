<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Landing Page</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
">

</head>

<body class="antialiased font-Nunito">
    {{-- Header --}}
    <header>
        <nav class="container flex items-center py-4 mt-4 sm:mt-12">
            <div class="flex items-center py-1">
                <div class="p-1 mr-3 text-white bg-indigo-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                    </svg>
                </div>
                <p class="font-black uppercase">Bookmark</p>
            </div>
            <ul class="items-center justify-end flex-1 hidden gap-12 text-xs uppercase sm:flex text-bookmark-blue">
                <li class="cursor-pointer">Features</li>
                <li class="cursor-pointer">Pricing</li>
                <li class="cursor-pointer">Contact</li>
                <button type="button" class="py-3 text-white uppercase rounded-md px-7 bg-bookmark-red">Login</button>
            </ul>
            <div class="flex justify-end flex-1 sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </nav>
    </header>

    {{-- Hero --}}
    <section class="relative">
        <div class="container flex flex-col-reverse items-center gap-12 lg:flex-row mt-14 lg:mt-28">
            {{-- Content --}}
            <div class="flex flex-col items-center flex-1 lg:items-start">
                <h2 class="mb-6 text-3xl text-center text-bookmark-blue md:text-4xl lg:text-5xl lg:text-left">A Simple
                    Bookmark Manager</h2>
                <p class="mb-6 text-lg text-center text-bookmark-grey lg:text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quasi architecto culpa nam eius ipsa
                    sint dolorum esse dolore, similique corrupti. Porro, facere at maiores doloremque reiciendis
                    accusamus cumque harum?
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">Get in on
                        Chrome</button>
                    <button type="button" class="btn btn-white hover:bg-bookmark-purple hover:text-white">Get in on
                        Firefox</button>
                </div>
            </div>
            {{-- Image --}}
            <div class="z-10 flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
                    src="https://www.ratujlaptopa.pl/cache/thumbs/740__494/bf0c76ed0cbc3df28cc63ea0d7ba39c3/wolno-dzia%C5%82a.jpg"
                    alt="">
            </div>
        </div>
        {{-- Rounded Rectangle --}}
        <div
            class="absolute right-0 hidden w-2/4 overflow-hidden rounded-l-full md:block bg-bookmark-purple h-80 top-32 lg:-bottom-28">
        </div>
    </section>

    {{-- Feature --}}
    <section class="py-20 mt-20 bg-bookmark-white lg:mt-60">
        {{-- Heading --}}
        <div class="px-2 mx-auto sm:w-3/4 lg:w-5/12">
            <h1 class="text-3xl text-center text-bookmark-blue">Features</h1>
            <p class="mt-4 text-center text-bookmark-grey">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, saepe ducimus! Reiciendis recusandae est
                aut doloribus, eius, commodi esse aliquid suscipit dolor quidem officia iusto dicta molestias sint
                eligendi molestiae.
            </p>
        </div>
        {{-- Feature #1 --}}
        <div class="relative mt-20 lg:mt-24">
            <div class="container flex flex-col items-center justify-center lg:flex-row gap-x-24">
                {{-- Image --}}
                <div class="z-10 flex justify-center flex-1 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
                        src="https://www.ratujlaptopa.pl/cache/thumbs/740__494/bf0c76ed0cbc3df28cc63ea0d7ba39c3/wolno-dzia%C5%82a.jpg"
                        alt="">
                </div>
                {{-- Content --}}
                <div class="flex flex-col items-center flex-1 lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Bookmark in one click</h1>
                    <p class="my-4 text-center text-bookmark-grey lg:text-left sm:w-3/4 lg:w-full">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis tempore numquam inventore
                        aliquam quis assumenda laboriosam illo culpa deleniti, saepe excepturi maxime voluptatem.
                        Repudiandae ducimus officia id tempore facilis ab?
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More
                        info</button>
                </div>
            </div>
            {{-- Rounded Rectangle --}}
            <div
                class="absolute hidden w-2/4 overflow-hidden rounded-r-full lg:block bg-bookmark-purple h-80 top-32 -bottom-24 -left-36">
            </div>
        </div>
        {{-- Feature #2 --}}
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col items-center justify-center lg:flex-row-reverse gap-x-24">
                {{-- Image --}}
                <div class="z-10 flex justify-center flex-1 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
                        src="https://www.ratujlaptopa.pl/cache/thumbs/740__494/bf0c76ed0cbc3df28cc63ea0d7ba39c3/wolno-dzia%C5%82a.jpg"
                        alt="">
                </div>
                {{-- Content --}}
                <div class="flex flex-col items-center flex-1 lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Inteligent search</h1>
                    <p class="my-4 text-center text-bookmark-grey lg:text-left sm:w-3/4 lg:w-full">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis tempore numquam inventore
                        aliquam quis assumenda laboriosam illo culpa deleniti, saepe excepturi maxime voluptatem.
                        Repudiandae ducimus officia id tempore facilis ab?
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More
                        info</button>
                </div>
            </div>
            {{-- Rounded Rectangle --}}
            <div
                class="absolute right-0 hidden w-2/4 overflow-hidden rounded-l-full lg:block bg-bookmark-purple h-80 top-32 -bottom-24">
            </div>
        </div>
        {{-- Feature #3 --}}
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col items-center justify-center lg:flex-row gap-x-24">
                {{-- Image --}}
                <div class="z-10 flex justify-center flex-1 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
                        src="https://www.ratujlaptopa.pl/cache/thumbs/740__494/bf0c76ed0cbc3df28cc63ea0d7ba39c3/wolno-dzia%C5%82a.jpg"
                        alt="">
                </div>
                {{-- Content --}}
                <div class="flex flex-col items-center flex-1 lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Share your bookmarks</h1>
                    <p class="my-4 text-center text-bookmark-grey lg:text-left sm:w-3/4 lg:w-full">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis tempore numquam inventore
                        aliquam quis assumenda laboriosam illo culpa deleniti, saepe excepturi maxime voluptatem.
                        Repudiandae ducimus officia id tempore facilis ab?
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More
                        info</button>
                </div>
            </div>
            {{-- Rounded Rectangle --}}
            <div
                class="absolute hidden w-2/4 overflow-hidden rounded-r-full lg:block bg-bookmark-purple h-80 top-32 -bottom-24 -left-36">
            </div>
        </div>
    </section>

    {{-- Download  --}}
    <section class="py-20 mt-20">
        {{-- Heading --}}
        <div class="px-2 mx-auto sm:w-3/4 lg:w-5/12">
            <h1 class="text-3xl text-center text-bookmark-blue">Download extension</h1>
            <p class="mt-4 text-center text-bookmark-grey">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, saepe ducimus! Reiciendis recusandae est
                aut doloribus, eius, commodi esse aliquid suscipit dolor quidem officia iusto dicta molestias sint
                eligendi molestiae.
            </p>
        </div>
        {{-- Cards --}}
        <div class="container grid max-w-screen-lg grid-cols-1 gap-16 mt-16 lg:grid-cols-3 md:grid-cols-2">
            {{-- Card 1 --}}
            <div class="flex flex-col justify-between rounded-md shadow-md lg:mb-16">
                <div class="flex flex-col items-center p-6">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTc4OrBNyAlbJUYZ-qUMm4HrPMv2f1TWB3sTZXKN9aN4cpy47U4Lsbpzv0m_emBey1a6g&usqp=CAU"
                        alt="">
                    <h3 class="mt-2 mb-2 text-lg text-bookmark-blue">Add to Firefox</h3>
                    <p class="mb-2 font-light text-bookmark-grey">Minimum version 62</p>
                </div>
                <div class="">
                    <hr class="border-b border-bookmark-white">
                    <div class="flex p-6">
                        <button type="button" class="flex-1 btn btn-purple hover:bg-bookmark-white hover:text-black">Add
                            &
                            Install
                            Extension</button>
                    </div>
                </div>
            </div>
            {{-- Card 2 --}}
            <div class="flex flex-col rounded-md shadow-md lg:my-8">
                <div class="flex flex-col items-center p-6 ">
                    <img src="https://bi.im-g.pl/im/c5/f0/10/z17761989Q,Google-Chrome---logo-aplikacji.jpg" alt="">
                    <h3 class="mt-2 mb-2 text-lg text-bookmark-blue">Add to Chrome</h3>
                    <p class="mb-2 font-light text-bookmark-grey">Minimum version 62</p>
                </div>
                <hr class="border-b border-bookmark-white">
                <div class="flex p-6">
                    <button type="button" class="flex-1 btn btn-purple hover:bg-bookmark-white hover:text-black">Add &
                        Install
                        Extension</button>
                </div>
            </div>
            {{-- Card 3 --}}
            <div class="flex flex-col rounded-md shadow-md lg:mt-16">
                <div class="flex flex-col items-center p-6">
                    <img src="https://i1.wp.com/portable.info.pl/wp-content/uploads/2019/01/Opera_12_icon.jpg" alt="">
                    <h3 class="mt-2 mb-2 text-lg text-bookmark-blue">Add to Opera</h3>
                    <p class="mb-2 font-light text-bookmark-grey">Minimum version 62</p>
                </div>
                <hr class="border-b border-bookmark-white">
                <div class="flex p-6">
                    <button type="button" class="flex-1 btn btn-purple hover:bg-bookmark-white hover:text-black">Add &
                        Install
                        Extension</button>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-20 bg-bookmark-white">
        <div class="container">
            {{-- Heading --}}
            <div class="px-2 mx-auto sm:w-3/4 lg:w-5/12">
                <h1 class="text-3xl text-center text-bookmark-blue">Frequently Asked Question</h1>
                <p class="mt-4 text-center text-bookmark-grey">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, saepe ducimus! Reiciendis recusandae
                    est
                    aut doloribus, eius, commodi esse aliquid suscipit dolor quidem officia iusto dicta molestias sint
                    eligendi molestiae.
                </p>
            </div>
            {{-- FAQ Items --}}
            <div class="flex-col mx-auto mt-12 sm:w-3/4 lg:w-5/12">
                <div class="flex items-center py-4 border-b">
                    <span class="flex-1">What is a Bookmark?</span>
                    <svg class="w-4 h-4 text-bookmark-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="flex items-center py-4 border-b">
                    <span class="flex-1">How can I request a new browser?</span>
                    <svg class="w-4 h-4 text-bookmark-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="flex items-center py-4 border-b">
                    <span class="flex-1">Is there a mobile App?</span>
                    <svg class="w-4 h-4 text-bookmark-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="flex items-center py-4 border-b">
                    <span class="flex-1">What about other browser?</span>
                    <svg class="w-4 h-4 text-bookmark-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <button type="button"
                    class="flex mx-auto mt-12 btn btn-purple hover:bg-bookmark-white hover:text-black">More
                    Info</button>
            </div>
        </div>
    </section>

    {{-- Contact Us --}}
    <section class="py-20 text-white bg-bookmark-purple">
        <div class="container">
            <div class="mx-auto sm:w-3/4 lg:w-2/4">
                <p class="mb-8 text-center uppercase fnt-light">35,000+ ALREADY JOINED</p>
                <h1 class="text-3xl text-center">Stay up-to-date with what we`re doing</h1>
                <div class="flex flex-col gap-6 mt-8 sm:flex-row">
                    <input type="text" placeholder="Enter your email address"
                        class="flex-1 px-2 py-3 text-black rounded-md focus:outline-none">
                    <button type="button"
                        class="mx-auto btn bg-bookmark-red hover:bg-bookmark-white hover:text-black">Contact
                        Us</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="py-8 bg-bookmark-blue">
        <div class="container flex flex-col items-center md:flex-row">
            <div class="flex flex-wrap items-center justify-center flex-1 gap-12 md:justify-start">
                <div class="p-1 mr-3 text-white bg-indigo-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                    </svg>
                </div>
                <ul class="flex gap-12 text-xs text-white uppercase">
                    <li class="cursor-pointer">Features</li>
                    <li class="cursor-pointer">Pricing</li>
                    <li class="cursor-pointer">Contact</li>
                </ul>
            </div>
            <div class="flex gap-10 mt-12 md:mt-0">
                <ul class="flex gap-12 text-xl text-white">
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-facebook-square"></i></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
