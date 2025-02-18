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
    <header class="flex w-screen fixed z-50 lg:justify-center">
        <a href="#" class="w-64 h-64 bg-[url(../img/logo.png)] bg-cover bg-center bg-no-repeat logo self-center"></a>
        <label class="hamburger-menu" id="openMenu">
            <input type="checkbox">
        </label>
    </header>



    <div class="op0 flex fixed h-[100vh] w-screen bg-zinc-950/90 top-0 right-0 justify-center items-center" id="menuInterface">

        <div class="flex flex-col lg:flex-row justify-center gap-4 lg:gap-8">
            <div class="flex flex-col op0" id="menuList">
                <ul class="text-gray-100 font-bold text-2xl lg:text-4xl flex flex-col gap-5 animate-rotate-x animate-once animate-duration-[800ms] animate-ease-in">
                    <li><button class="hover:text-gray-400 transition-all duration-200" id="toggleServices">Services</button></li>
                    <li><button class="hover:text-gray-400 transition-all duration-200" id="toggleProjects">Portfolio</button></li>
                    <li><button class="hover:text-gray-400 transition-all duration-200">A propos</button></li>
                    <li><button class="hover:text-gray-400 transition-all duration-200">Contact</button></li>
                </ul>
            </div>

            <div class="w-1 h-70 rounded-lg bg-gray-400 op0" id="servicesDivider"></div>
            <div class="flex flex-col op0 self-center" id="menuServices">
                <ul class="text-gray-400 font-bold text-xl lg:text-4xl flex flex-col gap-5">
                    <li><button class="hover:text-gray-600 transition-all duration-200">Architectural Design</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Planning Applications</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Interior Design</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Conservation & Heritage Design</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Create & Construct</button></li>
                </ul>
            </div>
            <div class="w-1 h-70 rounded-lg bg-gray-400 op0" id="projectsDivider"></div>
            <div class="flex flex-col op0 self-center" id="menuProjects">
                <ul class="text-gray-400 font-bold text-xl lg:text-4xl flex flex-col gap-5">
                    <li><button class="hover:text-gray-600 transition-all duration-200">Residential</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Commercial</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Conservation & Heritage</button></li>
                </ul>
            </div>
        </div>

        <div class="flex justify-end self-end w-screen right-15 bottom-15 absolute gap-8">
            <a href="" class="self-end text-slate-500 hover:underline">Mentions légales</a>
            <a href="" class="text-3xl lg:text-4xl text-gray-50"><i class="uil uil-instagram"></i></a>
        </div>
    </div>



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