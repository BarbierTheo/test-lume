<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/chatbot.php';
include_once __DIR__ . '/../../templates/menu.php';
include_once __DIR__ . '/../../templates/loader.php';
?>

<section class="min-h-screen w-full flex flex-col justify-end items-center gap-8 lg:gap-8 relative overflow-hidden" id="hero">
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-b from-transparent via-gray-50 to-neutral-700/50 mix-blend-multiply z-10"></div>
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-t from-transparent to-neutral-600/15 mix-blend-multiply z-10"></div>
    <img src="../../img/about/Urban_Competition.avif" alt="" class="w-full !h-[100vh] object-cover object-center zoom-carousel">
    <div class="absolute inset-0 max-w-full overflow-hidden flex flex-col text-orange-50 gap-4 px-4 lg:px-20 pb-20 justify-end box-border z-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[50%] flex flex-col items-center lg:items-start justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold uppercase">BUILT ON VISION</span>
                <div class="flex flex-col text-md lg:text-xl font-semibold">
                    <span>Découvrez qui nous sommes</span>
                </div>
            </div>

            <div class="lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                    <a href="/services" class="btn-principal">Découvrez nos services</a>
                    <a href="/portfolio" class="btn-secondaire">Découvrez notre travail</a>
                </div>
            </div>
        </div>
    </div>
</section>


<main class="min-w-screen">

    <section class="min-h-[100vh] w-screen flex flex-col justify-center items-center gap-8 lg:gap-8">


    </section>

</main>


<?php include_once __DIR__ . '/../../templates/footer.php';
include_once __DIR__ . '/../../templates/end.php' ?>