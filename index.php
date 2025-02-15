<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lume</title>
    <!-- npx @tailwindcss/cli -i ./assets/css/style.css -o ./assets/css/tailwind.css --watch -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>

<body>
    <header class="flex justify-between w-screen fixed z-30">
        <a href="#" class="w-32 h-14 bg-[url(../img/lume.png)] bg-center bg-no-repeat bg-[auto_18rem] logo absolute"></a>
        <label class="hamburger-menu" id="openMenu">
            <input type="checkbox">
        </label>
    </header>



    <div class="op0 flex fixed h-screen w-screen bg-zinc-950/90 top-0 right-0 z-20 justify-center items-center" id="menuInterface">

        <div class="flex flex-col lg:flex-row justify-center gap-4 lg:gap-8">
            <div class="flex flex-col op0" id="menuList">
                <ul class="text-gray-100 font-bold text-2xl lg:text-4xl flex flex-col gap-5">
                    <li><button class="hover:text-gray-400 transition-all duration-200" id="toggleServices">Services</button></li>
                    <li><button class="hover:text-gray-400 transition-all duration-200">Portfolio</button></li>
                    <li><button class="hover:text-gray-400 transition-all duration-200">A propos</button></li>
                    <li><button class="hover:text-gray-400 transition-all duration-200">Contact</button></li>
                </ul>
            </div>
            <div class="flex flex-col op0 self-center" id="menuServices">
                <ul class="text-gray-400 font-bold text-xl lg:text-4xl flex flex-col gap-5">
                    <li><button class="hover:text-gray-600 transition-all duration-200">Architectural Design</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Planning Applications</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Interior Design</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Conservation & Heritage Design</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Create & Construct</button></li>
                </ul>
            </div>
            <!-- <div class="flex flex-col op0 self-center" id="menuPortfolio">
                <ul class="text-gray-400 font-bold text-xl lg:text-4xl flex flex-col gap-5">
                    <li><button class="hover:text-gray-600 transition-all duration-200">Residential</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Commercial</button></li>
                    <li><button class="hover:text-gray-600 transition-all duration-200">Conservation & Heritage</button></li>
                </ul>
            </div> -->
        </div>

        <div class="flex justify-end self-end w-screen right-15 bottom-15 absolute gap-8">
            <a href="" class="self-end text-slate-500 hover:underline">Mentions légales</a>
            <a href="" class="text-3xl lg:text-4xl text-gray-50"><i class="uil uil-instagram"></i></a>
        </div>
    </div>



    <div class="bckground lg:zoomimg w-screen h-screen bg-center bg-no-repeat bg-cover absolute z-0">
        <main class="h-screen flex justify-start items-end ">
            <div class="flex flex-col lg:ml-18 lg:mb-18 ml-8 mb-8 gap-4 lg:max-w-[50%] max-w-[90%] bg-zinc-800/20 p-8">
                <div class="flex lg:flex-row flex-col uppercase gap-4 text-xl text-left items-start">
                    <p class="text-gray-50 text-xs lg:text-sm lg:self-center font-semibold">About</p>
                    <span class="lg:self-center text-gray-400 hidden lg:block">|</span>
                    <p class="text-gray-200 text-xs lg:text-sm lg:self-center">Architecture and interior design studio</p>
                </div>
                <p class="text-6xl font-bold text-gray-50">LUME</p>
                <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae modi et officia nisi voluptate. Doloremque, aut.</p>
                <button class="text-xl font px-12 py-4 border-2 cursor-pointer self-start bg-amber-50/5 text-gray-200 border-gray-200 hover:bg-gray-200 hover:text-gray-800 transition-all duration-300">+ d'infos</button>
            </div>
        </main>
    </div>

    <div class="bckground lg:zoomimg w-screen h-screen bg-center bg-no-repeat bg-cover absolute z-0">
        <main class="h-screen flex justify-start items-end ">
            <div class="flex flex-col lg:ml-18 lg:mb-18 ml-8 mb-8 gap-4 lg:max-w-[50%] max-w-[90%] bg-zinc-800/20 p-8">
                <div class="flex lg:flex-row flex-col uppercase gap-4 text-xl text-left items-start">
                    <p class="text-gray-50 text-xs lg:text-sm lg:self-center font-semibold">About</p>
                    <span class="lg:self-center text-gray-400 hidden lg:block">|</span>
                    <p class="text-gray-200 text-xs lg:text-sm lg:self-center">Architecture and interior design studio</p>
                </div>
                <p class="text-6xl font-bold text-gray-50">LUME</p>
                <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae modi et officia nisi voluptate. Doloremque, aut.</p>
                <button class="text-xl font px-12 py-4 border-2 cursor-pointer self-start bg-amber-50/5 text-gray-200 border-gray-200 hover:bg-gray-200 hover:text-gray-800 transition-all duration-300">+ d'infos</button>
            </div>
        </main>
    </div>


    <script type="text/javascript" src="./assets/js/script.js"></script>
</body>

</html>