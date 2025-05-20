<!-- <header class="flex w-screen fixed z-50  h-fit">
    <a href="#" class="logo pt-6 h-full"> <img src="img/testlogo.png" alt="" class="ml-6 w-32 lg:w-38 self-center"></a>
    <label class="hamburger-menu" id="openMenu">
        <input type="checkbox">
    </label>
</header>

<div class="hidden fixed h-screen w-screen bg-zinc-950/90 top-0 right-0 justify-center" id="menuInterface" style="opacity: 1; transition: opacity 1s ease-in-out">

    <div class="flex flex-col lg:flex-row justify-center items-center gap-4 lg:gap-8">
        <div class="flex flex-col" id="menuList">
            <ul class="text-gray-100 font-light text-2xl lg:text-4xl flex flex-col gap-5">
                <li class="entryMenu1 opacity-0"><button class="hover:text-gray-400 cursor-pointer" id="toggleServices">Services</button></li>
                <li class="entryMenu2 opacity-0"><button class="hover:text-gray-400 cursor-pointer" id="toggleProjects">Portfolio</button></li>
                <li class="entryMenu3 opacity-0"><a href="" class="hover:text-gray-400 cursor-pointer">A propos</a></li>
                <li class="entryMenu4 opacity-0"><a href="" class="hover:text-gray-400 cursor-pointer">Contact</a></li>
            </ul>
        </div>
        <div class="secondstate flex flex-col lg:flex-row gap-8">
        </div>
    </div>

    <div class="flex justify-end self-end w-screen right-15 bottom-15 absolute gap-8">
        <div class="flex flex-col lg:flex-row gap-4">
            <a href="" class="self-end text-slate-500 hover:underline">Foire aux questions</a>
            <a href="" class="self-end text-slate-500 hover:underline">Mentions légales</a>
        </div>
        <a href="" class="text-3xl lg:text-4xl text-gray-50 self-end"><i class="uil uil-instagram"></i>aaa</a>
    </div>
</div>

<div class="hidden animate-fade-right animate-duration-[600ms] animate-delay-[300ms] animate-ease-in-out w-[0.1rem] h-auto "></div> -->



<header class="navbar fixed z-50 flex justify-between p-4 items-center">

    <div class="">
        <a href="/home" class="logo pt-6 h-full"> <img src="../../img/testlogo.png" alt="" class="ml-6 w-32 lg:w-38 self-center"></a>
    </div>

    <div class="hidden lg:flex">
        <ul class="menu menu-horizontal px-1 mr-4 flex xl:gap-6 text-lg uppercase font-semibold">
            <li><a href="/home">Accueil</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/about">A propos</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>

    <div class="lg:hidden">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </label>
            <ul tabindex="0" class="menu dropdown-content p-2 w-80 bg-zinc-950/90">
                <li class="p-2"><a href="/home">Accueil</a></li>
                <li class="p-2"><a href="/services">Services</a></li>
                <li class="p-2"><a href="/portfolio">Portfolio</a></li>
                <li class="p-2"><a href="/about">A propos</a></li>
                <li class="p-2"><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>

</header>