<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/menu.php';
?>


<section class="min-h-screen w-full flex flex-col justify-end items-center gap-8 lg:gap-8 relative overflow-hidden mb-16" id="hero">
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-b from-transparent via-gray-50 to-neutral-700/50 mix-blend-multiply z-10"></div>
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-t from-transparent to-neutral-600/15 mix-blend-multiply z-10"></div>
    <img src="../../img/services/hero1.avif" alt="" class="w-full !h-[100vh] object-cover object-center zoom-carousel">
    <div class="absolute inset-0 max-w-full overflow-hidden flex flex-col text-orange-50 gap-4 px-4 lg:px-20 pb-20 justify-end box-border z-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[50%] flex flex-col items-center lg:items-start justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold uppercase">VOTRE VISION, NOTRE EXPERTISE</span>
                <div class="flex flex-col text-md lg:text-xl font-semibold">
                    <span>Nous transformons vos idées en projets concrets, fonctionnels et esthétiques</span>
                </div>
            </div>

            <div class="lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                    <a href="/portfolio" class="btn-principal">Commençons à travailler</a>
                    <a href="/about" class="btn-secondaire">Découvrez la galerie</a>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="lg:max-w-[1200px] px-4 lg:mx-auto flex flex-col gap-24 mb-32">

    <section class="min-h-[80vh] flex flex-col justify-center items-center gap-4">
        <div class="flex flex-col gap-8">
            <h2 class="title1">Architecture et conception</h2>
            <div class="flex flex-col lg:flex-row w-full gap-4 lg:gap-8 justify-center items-center">
                <img src="../../img/services/services2.1.avif" alt="" class="lg:w-[50%] max-h-[40rem] w-full object-cover object-center">
                <div class="flex flex-col leading-6 justify-between gap-8 lg:w-[50%] lg:min-h-[40rem]">
                    <div class="flex flex-col gap-4">
                        <img src="../../img/services/services2.2.avif" alt="" class="hidden lg:flex">
                        <span>Nous vous accompagnons dans la conception et l’optimisation de vos espaces, en tenant compte
                            des contraintes techniques, esthétiques et réglementaires. Chaque projet est pensé pour allier
                            harmonie et fonctionnalité, en intégrant les matériaux les plus adaptés et en respectant les normes
                            en vigueur.
                            Que vous envisagiez une rénovation, un réaménagement intérieur ou un projet de construction, nous
                            mettons notre expertise au service de votre vision pour transformer vos idées en espaces cohérents,
                            équilibrés et pérennes.</span>
                        <span>

                        </span>
                    </div>
                    <a href="/about" class="btn-secondaire">Découvrez nous</a>
                </div>
            </div>
        </div>
    </section>

    <span>
        Conception et optimisation des espaces
        ✔ Agencement intérieur et circulation – Réorganisation des volumes pour plus de fluidité et de
        fonctionnalité.
        ✔ Éclairage naturel et ambiance – Étude de la lumière pour un confort optimal.
        ✔ Choix des matériaux et finitions – Conseils personnalisés sur les textures, couleurs et matières.
        Études et plans techniques
        ✔ Plans d’aménagement et d’exécution – Documents détaillés pour artisans et entreprises.
        ✔ Études de faisabilité – Analyse technique et spatiale pour garantir la viabilité du projet.
        Design sur-mesure et mobilier intégré
        ✔ Conception de mobilier sur-mesure – Solutions optimisées et adaptées à chaque espace.
        ✔ Aménagement personnalisé – Création de solutions sur-mesure selon vos besoins et votre style.
    </span>

    <section class="min-h-[80vh] flex flex-col justify-center items-center gap-4">
        <div class="flex flex-col gap-8">
            <h2 class="title1">Conseils & accompagnement</h2>
            <div class="flex flex-col lg:flex-row w-full gap-4 lg:gap-8 justify-center items-center">
                <div class="flex flex-col leading-6 justify-between gap-8 lg:w-[50%] lg:min-h-[40rem]">
                    <div class="flex flex-col gap-4">
                        <img src="../../img/services/services1_2.avif" alt="" class="hidden lg:flex">
                        <span>Vous avez une idée précise, mais vous ne savez pas comment la concrétiser ? Nous vous guidons à
                            chaque étape, du concept à la réalisation, pour vous aider à faire les bons choix et éviter les erreurs.
                            Grâce à une approche sur-mesure, nous vous apportons des solutions adaptées à vos envies,
                            contraintes techniques et budget.</span>
                    </div>
                    <a href="/contact" class="btn-secondaire self-end">Travaillons ensemble</a>
                </div>
                <img src="../../img/services/service1_1.avif" alt="" class="lg:w-[50%] h-[40rem] w-full object-cover object-center">
            </div>
        </div>
    </section>

    <section class="min-h-[80vh] flex flex-col justify-center items-center gap-4">
        <div class="flex flex-col gap-8">
            <h2 class="title1">Rendus & visuels 3D</h2>
            <div class="flex flex-col lg:flex-row w-full gap-4 lg:gap-8 justify-center items-center">
                <img src="../../img/services/kitchen3.avif" alt="" class="lg:w-[50%] max-h-[40rem] w-full object-cover object-center">
                <div class="flex flex-col leading-6 justify-between gap-8 lg:w-[50%] lg:min-h-[40rem]">
                    <span>Un visuel d’exception ne se limite pas à une simple image : il raconte une histoire, évoque une
                        émotion et projette une vision. Grâce à une maîtrise pointue des logiciels de modélisation et des
                        techniques avancées de rendu, nous insufflons vie à vos projets à travers des perspectives
                        saisissantes, des animations immersives et une mise en scène raffinée.</span>
                    <div class="flex flex-col gap-4">
                        <a href="/portfolio" class="btn-secondaire">Découvrez la galerie</a>
                        <img src="../../img/services/kitchen1.avif" alt="" class="hidden lg:flex">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include_once __DIR__ . '/../../templates/footer.php';
include_once __DIR__ . '/../../templates/end.php' ?>