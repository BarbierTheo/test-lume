<!DOCTYPE html>
<html lang="fr">

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

<body class="bg-orange-100">

    <?php include_once 'menu.php'; ?>

    <?php include_once 'carousel.php'; ?>
    <main class="max-w-screen min-h-[80vh] mx-auto lg:m-0">

        <!-- <div class="flex flex-col lg:flex-row min-h-[100vh] lg:min-h-[60vh] justify-center items-center gap-16">
            <div class="w-[100%] lg:w-[50%] flex flex-col justify-center items-center">
                <div class="w-[70%] flex flex-col gap-8 text-stone-900 lg:mt-0 mt-8">
                    <p class="font-bold text-2xl lg:text-4xl">Découvrez nos derniers projets</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi doloremque minus soluta! Placeat aut nostrum nemo dolorem commodi a debitis ipsam accusantium modi. Reprehenderit recusandae commodi est qui necessitatibus consequuntur.</p>
                </div>
            </div> -->
        <section class="mx-auto mt-8 w-full lg:w-full flex lg:flex-row flex-col items-start lg:justify-between pb-8 lg:pb-14">

            <div class="p-8 flex flex-col w-full lg:w-[65vw] text-zinc-800">
                <div class="swiper swiperProjects w-full h-80">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide w-fit h-fit">
                            <div class="w-full h-full rounded-lg bg-[url(../img/modern.webp)] bg-cover bg-center bg-no-repeat"></div>
                        </div>
                        <div class="swiper-slide w-fit h-fit">
                            <div class="w-full h-full rounded-lg bg-[url(../img/modern.webp)] bg-cover bg-center bg-no-repeat"></div>
                        </div>
                        <div class="swiper-slide w-fit h-fit">
                            <div class="w-full h-full rounded-lg bg-[url(../img/modern.webp)] bg-cover bg-center bg-no-repeat"></div>
                        </div>
                        <div class="swiper-slide w-fit h-fit">
                            <div class="w-full h-full rounded-lg bg-[url(../img/modern.webp)] bg-cover bg-center bg-no-repeat"></div>
                        </div>


                    </div>
                </div>
                <div class="flex w-full lg:w-[50vw] mt-10 flex-col gap-6">
                    <h2 class="font-semibold text-5xl">Unde fuga nulla maiores</h2>
                    <p class="text-justify lg:text-left leading-6 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem commodi quo corporis dolorem dolore vero soluta velit, aspernatur atque. Consectetur porro maiores, earum veritatis ad officia alias fuga velit nisi.
                        Porro sit ut reprehenderit quo iste accusantium fugit mollitia.</p>
                    <a href="" class="m-auto lg:m-0 w-fit"><span class="flex items-center border-2 w-fit p-4 rounded-lg border-zinc-800 hover:bg-zinc-800 hover:text-zinc-100 transition-all duration-300">Découvrez nos projets</span></a>
                </div>
            </div>


            <div class="m-8 p-8 w-fit lg:w-[30vw] flex flex-col text-zinc-800 border-2 lg:mt-6 mt-10 h-fit self-start rounded-lg gap-4">
                <a href="" class="text-2xl font-semibold hover:underline">Architecture</a>
                <span class="leading-6 font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dolorem aliquam vitae cumque, esse odio illo obcaecati aperiam consequatur nobis soluta aliquid qui sed itaque illum voluptatibus, commodi suscipit. Consectetur.</span>
                <hr class="my-1">
                <a href="" class="text-2xl font-semibold hover:underline">Rendus & Visuels 3D</a>
                <span class="leading-6 font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dolorem aliquam vitae cumque, esse odio illo obcaecati aperiam consequatur nobis soluta aliquid qui sed itaque illum voluptatibus, commodi suscipit. Consectetur.</span>
                <hr class="my-1">
                <a href="" class="text-2xl font-semibold hover:underline">Conseils & Accompagnements</a>
                <span class="leading-6 font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dolorem aliquam vitae cumque, esse odio illo obcaecati aperiam consequatur nobis soluta aliquid qui sed itaque illum voluptatibus, commodi suscipit. Consectetur.</span>
            </div>
        </section>

        <section class="lg:mt-8 w-full flex flex-col gap-12 justify-center items-center mx-auto lg:px-42">
            <span class="text-4xl font-semibold">Contactez-nous</span>
            <form action="" class="flex flex-col gap-2 w-[60%]">
            <label for="" class="border border-zinc-600 p-3 rounded-lg w-[80%] lg:w-[50%] inline">
                        <span class="mr-1">Nom :</span>
                        <input type="text" class="font-light w-fit grow">
                    </label>
            </form>
        </section>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="./assets/js/scriptmenucarousel.js"></script>
</body>

</html>