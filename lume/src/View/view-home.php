<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/menu.php';
include_once __DIR__ . '/../../templates/carousel.php'; ?>


<main class="lg:max-w-[1200px] px-4 lg:mx-auto">
    <h1 class="sr-only">Agence d'architecture sur Rouen</h1>
    <!-- CONSTRUIRE, IMAGINER, REINVENTER -->
    <section class="flex flex-col justify-center gap-4 py-16 text-white">
        <div class="flex flex-col leading-8 lg:leading-12 title1">
            <span>Construire,</span>
            <span>imaginer,</span>
            <span>réinventer</span>
        </div>
        <div class="flex flex-col lg:flex-row gap-4">
            <img src="../../img/index/terrasse.avif" alt="terrasse avec hamac" class="lg:w-[50%] max-h-[40rem] object-cover">
            <div class="flex flex-col lg:w-[50%] justify-between">
                <div class="flex flex-col gap-2">
                    <span>Fondée en 2024 à Rouen, notre agence d'architecture conçoit des espaces durables, élégants et fonctionnels. Nous accompagnons particuliers et professionnels dans la réalisation de projets uniques, pensés pour s’intégrer harmonieusement à leur environnement.</span>
                    <span>Entre créativité et rigueur, notre équipe pluridisciplinaire mêle expertise technique et sensibilité artistique pour imaginer les lieux de demain.</span>
                </div>
                <a href="/about" class="btn-secondaire self-center lg:self-start mt-4 lg:mt-0">En savoir plus</a>
            </div>
        </div>
    </section>


    <!-- NOS PROJETS -->
    <section class="flex flex-col justify-center gap-4 py-16 text-white">
        <span class="title1">Portfolio</span>

        <!-- <div class="flex gap-4 flex-wrap">
                <button class="py-2 px-3 font-semibold !bg-zinc-100 rounded-full text-black !text-sm !uppercase cursor-pointer">Tous</button>
                <button class="py-2 px-3 font-semibold hover:!bg-zinc-100 rounded-full hover:text-black !text-sm !uppercase transition-all duration-300 cursor-pointer">Résidentiel</button>
                <button class="py-2 px-3 font-semibold hover:!bg-zinc-100 rounded-full hover:text-black !text-sm !uppercase transition-all duration-300 cursor-pointer">Commercial</button>
                <button class="py-2 px-3 font-semibold hover:!bg-zinc-100 rounded-full hover:text-black !text-sm !uppercase transition-all duration-300 cursor-pointer">Concepts</button>
            </div> -->

        <div class="grid grid-cols-1 lg:grid-cols-3 grid-rows-2 gap-4">

            <?php for ($i = 0; $i < 3; $i++) {
                if (isset($projects[$i])) {
                    if ($i < 1) {
            ?>

                        <div class="col-span-1 row-span-2 flex flex-col gap-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-bold uppercase"><?= $projects[$i]["project_name"] ?></span>
                                <span class="text-sm font-light"><?= $projects[$i]["project_date"] ?></span>
                            </div>
                            <div class="relative h-full">
                                <img src="<?= $projects[$i]["img_url"] ?>" alt="image <?= $projects[$i]["project_name"] ?>" class="w-full h-full object-cover max-h-[50rem]">
                                <a href="project?id=<?= $projects[$i]["project_id"] ?>"
                                    class="absolute bottom-5 right-5 text-black !bg-white py-2 px-4 font-semibold rounded-full hover:!bg-orange-200 transition-all duration-300">+ d'infos</a>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="col-span-1 lg:col-span-2 flex flex-col gap-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-bold uppercase"><?= $projects[$i]["project_name"] ?></span>
                                <span class="text-sm font-light"><?= $projects[$i]["project_date"] ?></span>
                            </div>
                            <div class="relative h-full">
                                <img src="<?= $projects[$i]["img_url"] ?>" alt="image <?= $projects[$i]["project_name"] ?>" class="w-full h-full object-cover max-h-[23rem]">
                                <a href="project?id=<?= $projects[$i]["project_id"] ?>" class="absolute bottom-5 right-5 text-black !bg-white py-2 px-4 font-semibold rounded-full hover:!bg-orange-200 transition-all duration-300">+ d'infos</a>
                            </div>
                        </div>

            <?php }
                }
            } ?>

        </div>


        <div class="flex justify-end my-2">
            <a href="/portfolio" class="btn-principal">Découvrez nos projets</a>
        </div>
    </section>

    <!-- FAQ -->
    <section class="flex flex-col justify-center gap-4 py-16 text-white">
        <span class="title1">Des questions ?</span>
        <div class="flex gap-1 flex-wrap">
            <span>Vous ne trouvez pas les réponses que vous cherchez ?</span>
            <a href="/contact" class="font-semibold">Contactez-nous</a>
        </div>

        <div class="flex flex-col gap-2">

            <?php for ($i = 0; $i < 3; $i++) {

                if (isset($faq[$i])) { ?>

                    <div class="collapse collapse-arrow bg-neutral-950/50 rounded-xl">
                        <input type="checkbox" id="faq-<?= $i ?>" />
                        <label for="faq-<?= $i ?>" class="sr-only">Ouvrir la question : <?= $faq[$i]["faq_title"] ?></label>
                        <div class="collapse-title font-semibold"><?= $faq[$i]["faq_title"] ?></div>
                        <div class="collapse-content text-sm flex flex-col font-light gap-2">
                            <?= $faq[$i]["faq_article"] ?>
                        </div>
                    </div>

            <?php }
            } ?>

        </div>

    </section>


    <!-- NOUS CONTACTER -->
    <section class="flex flex-col justify-center gap-4 py-16 text-white" id="contact">
        <span class="title1">Nous contacter</span>

        <div class="flex flex-col lg:flex-row gap-4">
            <div class="flex flex-col lg:w-[50%] gap-6 text-left lg:text-right">

                <div class="flex flex-col gap-1">
                    <span class="font-bold">Email :</span>
                    <a href="mailto:contact@lume.com">contact@lume.com</a>
                </div>

                <div class="flex flex-col gap-1">
                    <span class="font-bold">Téléphone :</span>
                    <a href="tel:+bipboubap">02.35.72.43.13</a>
                </div>

                <div class="flex flex-col gap-1">
                    <span class="font-bold">Réseaux sociaux :</span>
                    <ul>
                        <li><a href="https://www.instagram.com/lume" target="_blank">Instagram</a></li>
                        <li><a href="https://www.linkedin.com/company/lume" target="_blank">LinkedIn</a></li>
                    </ul>
                </div>
                <div>
                    Ou via notre
                    <a href="/contact" class="font-bold hover:underline">formulaire de contact</a>
                </div>


                <div class="flex flex-col gap-1">
                    <span class="font-bold">Horaires :</span>
                    <span>Lundi - Vendredi : 9h - 18h</span>
                </div>
            </div>

            <img src="../../img/index/Minimalist_Villa.avif" alt="villa du sud" class="lg:w-[50%] max-h-[40rem] object-cover object-bottom">
        </div>
    </section>
</main>


<?php include_once __DIR__ . '/../../templates/footer.php';
include_once __DIR__ . '/../../templates/end.php' ?>