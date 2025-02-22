<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lume</title>
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <!-- npx @tailwindcss/cli -i ./assets/css/style.css -o ./assets/css/tailwind.css --watch -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>

<body>
    
<?php

include_once 'menu.php'; ?>


    <div class="swiper bg-zinc-950/90">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="bg-[url(../img/modern.webp)] w-screen h-screen bg-center bg-no-repeat bg-cover z-5 flex justify-start">
                    <main class="h-screen w-screen flex flex-col justify-end">
                        <div class="flex flex-col lg:ml-18 lg:mb-18 ml-8 mb-8 gap-2 lg:max-w-[50%] max-w-[90%] z-20">
                            <div class="flex lg:flex-row flex-col uppercase gap-4 text-xl text-left items-start">
                                <p class="text-gray-50 text-sm lg:text-md lg:self-center font-semibold animate-fade-down animate-duration-[800ms] animate-ease-in-out">About</p>
                                <span class="lg:self-center text-gray-400 hidden lg:block animate-fade animate-duration-[800ms] animate-ease-in-out">|</span>
                                <p class="text-gray-200 text-sm lg:text-md lg:self-center animate-fade-left animate-duration-[800ms] animate-ease-in-out">Architecture and interior design studio</p>
                            </div>
                            <p class="text-4xl lg:text-7xl font-bold text-gray-50 animate-fade-up animate-duration-[800ms] animate-ease-in-out">LUME</p>
                            <p class="text-gray-200 text-md lg:text-base mb-4 animate-fade-up animate-duration-[800ms] animate-ease-in-out">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae modi et officia nisi voluptate. Doloremque, aut.</p>
                            <button class="moreInfos text-xl font px-12 py-4 border-2 cursor-pointer self-start bg-amber-50/5 text-gray-200 border-gray-200 hover:bg-gray-200 hover:text-gray-800 transition-all duration-300">Plus d'infos</button>
                        </div>
                    </main>
                    <div class="bg-gradient-to-b from-transparent via-gray-50  to-neutral-900 w-screen h-screen absolute mix-blend-multiply z-10"></div>
                    <div class="bg-gradient-to-t from-transparent  to-neutral-600/50 w-screen h-screen absolute mix-blend-multiply z-10"></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-[url(../img/tst2.png)] w-screen h-screen bg-center bg-no-repeat bg-cover z-5 flex justify-start">
                    <main class="h-screen w-screen flex flex-col justify-end">
                        <div class="flex flex-col lg:ml-18 lg:mb-18 ml-8 mb-8 gap-2 lg:max-w-[50%] max-w-[90%] z-20">
                            <div class="flex lg:flex-row flex-col uppercase gap-4 text-xl text-left items-start">
                                <p class="text-gray-50 text-sm lg:text-md lg:self-center font-semibold animate-fade-down animate-duration-[800ms] animate-ease-in-out">About</p>
                                <span class="lg:self-center text-gray-400 hidden lg:block animate-fade animate-duration-[800ms] animate-ease-in-out">|</span>
                                <p class="text-gray-200 text-sm lg:text-md lg:self-center animate-fade-left animate-duration-[800ms] animate-ease-in-out">Architecture and interior design studio</p>
                            </div>
                            <p class="text-4xl lg:text-7xl font-bold text-gray-50 animate-fade-up animate-duration-[800ms] animate-ease-in-out">LUME</p>
                            <p class="text-gray-200 text-md lg:text-base mb-4 animate-fade-up animate-duration-[800ms] animate-ease-in-out">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae modi et officia nisi voluptate. Doloremque, aut.</p>
                            <button class="moreInfos text-xl font px-12 py-4 border-2 cursor-pointer self-start bg-amber-50/5 text-gray-200 border-gray-200 hover:bg-gray-200 hover:text-gray-800 transition-all duration-300">Plus d'infos</button>
                        </div>
                    </main>
                    <div class="bg-gradient-to-b from-transparent via-gray-50  to-neutral-900 w-screen h-screen absolute mix-blend-multiply z-10"></div>
                    <div class="bg-gradient-to-t from-transparent  to-neutral-600/50 w-screen h-screen absolute mix-blend-multiply z-10"></div>
                </div>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="./assets/js/script.js"></script>
</body>

</html>