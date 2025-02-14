<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- npx @tailwindcss/cli -i ./style.css -o ./tailwind.css --watch -->
    <link rel="stylesheet" href="./tailwind.css">
</head>

<body>
    <header class="flex justify-between w-screen fixed z-30">
        <a href="#" class="w-45 h-14 bg-[url(./lume.png)] bg-center bg-no-repeat bg-[auto_18rem] logo absolute"></a>
        <label class="hamburger-menu" id="openMenu">
            <input type="checkbox" >
        </label>

    </header>



    <div class="fixed h-screen w-screen bg-zinc-950/90 top-0 right-0 z-20 hidden" id="menuInterface">

    </div>


    <div class="bg-gradient-to-tr from-zinc-800 to-transparent z-10 w-screen h-screen">

        <div class="bg-[url(./modern.webp)] w-screen h-screen bg-center bg-no-repeat bg-cover absolute z-0 bg-gradient-to-tr from-zinc-800 to-slate-50/5">

            <main class="h-screen flex justify-start items-end">
                <div class="flex flex-col ml-24 mb-24 gap-4 max-w-[50%] bg-zinc-800/30 p-8">
                    <div class="flex uppercase gap-4 text-xl">
                        <p class="text-gray-50 text-sm self-center">About</p>
                        <span class="self-center text-gray-400">|</span>
                        <p class="text-gray-200 text-sm self-center">Architecture and interior design studio</p>
                    </div>
                    <p class="text-6xl font-bold text-gray-50">LUME</p>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae modi et officia nisi voluptate. Doloremque, aut. Perferendis aliquam itaque cum, esse delectus assumenda ad. Mollitia animi sit quis voluptatum dolor?</p>
                    <button class="text-xl font px-12 py-4 border-2 cursor-pointer self-start bg-amber-50/5 text-gray-200 border-gray-200 hover:bg-gray-200 hover:text-gray-800 transition-all duration-300">+ d'infos</button>
                </div>
            </main>
        </div>
        
        <script type="text/javascript" src="./script.js"></script>
</body>

</html>