<header class="flex w-screen fixed z-50 lg:justify-center justify-start h-fit">
    <a href="#" class="logo lg:self-center pt-6 h-full align"> <img src="./assets/img/testlogo.png" alt="" class="ml-6 w-32 lg:w-38 self-center"></a>
    <label class="hamburger-menu" id="openMenu">
        <input type="checkbox">
    </label>
</header>

<div class="op0 flex fixed h-screen w-screen bg-zinc-950/90 top-0 right-0 justify-center" id="menuInterface">

    <div class="flex flex-col lg:flex-row justify-center items-center gap-4 lg:gap-8">
        <div class="flex flex-col" id="menuList">
            <ul class="text-gray-100 font-bold text-2xl lg:text-4xl flex flex-col gap-5">
                <li><button class="hover:text-gray-400 entryMenu1" id="toggleServices">Services</button></li>
                <li><button class="hover:text-gray-400 entryMenu2" id="toggleProjects">Portfolio</button></li>
                <li><a href="" class="hover:text-gray-400 entryMenu3 cursor-pointer">A propos</a></li>
                <li><a href="" class="hover:text-gray-400 entryMenu4 cursor-pointer">Contact</a></li>
            </ul>
        </div>

        <div class="secondstate flex gap-4">
        </div>

        <!-- <div class="w-1 h-70 rounded-lg bg-gray-400" id="projectsDivider"></div>
        <div class="flex flex-col op0 self-center" id="menuProjects">
            <ul class="text-gray-400 font-bold text-xl lg:text-4xl flex flex-col gap-5">
                <li><button class="hover:text-gray-600 transition-all duration-200">Residential</button></li>
                <li><button class="hover:text-gray-600 transition-all duration-200">Commercial</button></li>
                <li><button class="hover:text-gray-600 transition-all duration-200">Conservation & Heritage</button></li>
            </ul>
        </div> -->
    </div>

    <div class="flex justify-end self-end w-screen right-15 bottom-15 absolute gap-8">
        <div class="flex flex-col lg:flex-row gap-4">
            <a href="" class="self-end text-slate-500 hover:underline">Foire aux questions</a>
            <a href="" class="self-end text-slate-500 hover:underline">Mentions légales</a>
        </div>
        <a href="" class="text-3xl lg:text-4xl text-gray-50 self-end"><i class="uil uil-instagram"></i></a>
    </div>
</div>