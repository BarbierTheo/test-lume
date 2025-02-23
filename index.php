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

<body class="bg-orange-100">

    <?php include_once 'menu.php'; ?>

    <?php include_once 'carousel.php'; ?>
    <div class="max-w-[1600px] m-auto">

        <div class="flex flex-col lg:flex-row min-h-[100vh] lg:min-h-[60vh] justify-center items-center gap-16">
            <div class="w-[100%] lg:w-[50%] flex flex-col justify-center items-center">
                <div class="w-[70%] flex flex-col gap-8 text-stone-900 lg:mt-0 mt-8">
                    <p class="font-bold text-2xl lg:text-4xl">Découvrez nos derniers projets</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi doloremque minus soluta! Placeat aut nostrum nemo dolorem commodi a debitis ipsam accusantium modi. Reprehenderit recusandae commodi est qui necessitatibus consequuntur.</p>
                </div>
            </div>

            <div class="w-[100%] lg:w-[50%]">
                <div class="swiper swiperProjects w-[80%] lg:h-96">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide bg-stone-900/95 rounded-lg">
                            <div class="flex flex-col lg:flex-row items-center h-full p-8 gap-4 lg:gap-4">
                                <div class="bg-[url(../img/modern.webp)] w-full lg:w-[40%] h-54 lg:h-full rounded-lg bg-center bg-cover lg:bg-contain bg-no-repeat"></div>
                                <div class="self-start w-full lg:w-[60%] flex flex-col gap-4">
                                    <a href="" class="text-orange-50 text-xl font-bold">SEBHAI</a>
                                    <div class="flex gap-2">
                                        <a href="" class="text-orange-50 font-semibold uppercase">Projets</a>
                                        <span class="text-gray-400">|</span>
                                        <a href="" class="text-orange-100 uppercase">Concept</a>
                                    </div>
                                    <p class="text-orange-50 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nostrum optio deleniti explicabo culpa veritatis veniam ullam sit, iure nulla quam itaque. Sunt, id. Possimus officia asperiores aspernatur perferendis aperiam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide bg-stone-900/95 rounded-lg">
                            <div class="flex flex-col lg:flex-row items-center h-full p-8 gap-4 lg:gap-4">
                                <div class="bg-[url(../img/modern.webp)] w-full lg:w-[40%] h-54 lg:h-full rounded-lg bg-center bg-cover lg:bg-contain bg-no-repeat"></div>
                                <div class="self-start w-full lg:w-[60%] flex flex-col gap-4">
                                    <a href="" class="text-orange-50 text-xl font-bold">SEBHAI</a>
                                    <div class="flex gap-2">
                                        <a href="" class="text-orange-50 font-semibold uppercase">Projets</a>
                                        <span class="text-gray-400">|</span>
                                        <a href="" class="text-orange-100 uppercase">Concept</a>
                                    </div>
                                    <p class="text-orange-50 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nostrum optio deleniti explicabo culpa veritatis veniam ullam sit, iure nulla quam itaque. Sunt, id. Possimus officia asperiores aspernatur perferendis aperiam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide bg-stone-900/95 rounded-lg">
                            <div class="flex flex-col lg:flex-row items-center h-full p-8 gap-4 lg:gap-4">
                                <div class="bg-[url(../img/modern.webp)] w-full lg:w-[40%] h-54 lg:h-full rounded-lg bg-center bg-cover lg:bg-contain bg-no-repeat"></div>
                                <div class="self-start w-full lg:w-[60%] flex flex-col gap-4">
                                    <a href="" class="text-orange-50 text-xl font-bold">SEBHAI</a>
                                    <div class="flex gap-2">
                                        <a href="" class="text-orange-50 font-semibold uppercase">Projets</a>
                                        <span class="text-gray-400">|</span>
                                        <a href="" class="text-orange-100 uppercase">Concept</a>
                                    </div>
                                    <p class="text-orange-50 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nostrum optio deleniti explicabo culpa veritatis veniam ullam sit, iure nulla quam itaque. Sunt, id. Possimus officia asperiores aspernatur perferendis aperiam.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="./assets/js/scriptmenucarousel.js"></script>
</body>

</html>