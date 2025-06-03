<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/chatbot.php';
include_once __DIR__ . '/../../templates/menu.php';
// include_once __DIR__ . '/../../templates/loader.php';
?>

<section class="min-h-screen w-full flex flex-col justify-end items-center gap-8 lg:gap-8 relative overflow-hidden" id="hero">
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-b from-transparent via-gray-50 to-neutral-700/50 mix-blend-multiply z-10"></div>
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-t from-transparent to-neutral-600/15 mix-blend-multiply z-10"></div>
    <img src="../../img/about/Urban_Competition.avif" alt="" class="w-full !h-[100vh] object-cover object-center zoom-carousel">
    <div class="absolute inset-0 max-w-full overflow-hidden flex flex-col text-orange-50 gap-4 px-4 lg:px-20 pb-20 justify-end box-border z-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[70%] flex flex-col items-center lg:items-start justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold uppercase">FOIRE AUX QUESTIONS</span>
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

<main class="lg:max-w-[1200px] px-4 lg:mx-auto flex flex-col gap-24 mt-8 mb-32">

    <section class="flex flex-col items-center gap-4 py-8" id="more">
        <form method="get" class="flex gap-2 lg:gap-4 w-full">
            <input type="text" placeholder="Rechercher par nom d'article" class="input grow" name="search" />
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                </svg>
                <span class="hidden lg:block">Rechercher</span>
            </button>
        </form>

        <div class="flex flex-col justify-center gap-4 py-16 text-white">

            <div class="flex flex-col gap-2">
                <?php foreach ($faq as $value) { ?>
                    <div class="collapse collapse-arrow bg-neutral-950/50 rounded-xl">
                        <input type="checkbox" />
                        <div class="collapse-title font-semibold"><?= $value["faq_title"] ?></div>
                        <div class="collapse-content text-sm flex flex-col font-light gap-2">
                            <?= $value["faq_article"] ?>
                        </div>
                    </div>
                <?php }
                if (!$faq) { ?>
                    <div class="flex flex-col items-center gap-4">
                        <span>Aucun résultat trouvé</span>
                        <a href="/faq" class="btn">Retourner aux autres questions</a>
                    </div>
                <?php  } ?>

            </div>

        </div>



    </section>

</main>


<?php include_once __DIR__ . '/../../templates/footer.php';
include_once __DIR__ . '/../../templates/end.php' ?>